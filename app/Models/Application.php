<?php

namespace App\Models;

use App\Enum\ApplicationStatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Application extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia, LogsActivity;

    protected $fillable = [
        'code',
        'applicant_id',
        'recipient_id',
        'recipient_type',
        'application_date',
        'delivery_date',
        'status',
    ];

    protected $casts = [
        'status' => ApplicationStatusEnum::class
    ];

    public function scopeSearch($query,$term)
    {
        return $query->where('id','like','%'.$term.'%')
        ->orWhere('code','like','%'.$term.'%')
        ->orWhereRelation('applicant','document','like','%'.$term.'%')
        ->orWhereRelation('applicant','first_names','like','%'.$term.'%')
        ->orWhereRelation('applicant','last_names','like','%'.$term.'%')
        ->orWhereHasMorph('recipientable','*',function($query,$term){
            $query->where('document','like','%'.$term.'%');
        });
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($application){
            $newId = Application::withTrashed()->get()->max('id') + 1;
            if(empty($application->code)) {
                $application->code = 'SOL'.Str::padLeft($newId, 5, '0');
            }
        });
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*'])
        ->logOnlyDirty();
    }

    public function applicant() : BelongsTo
    {
        return $this->belongsTo(Official::class,'applicant_id');
    }

    public function recipientable() : MorphTo
    {
        return $this->morphTo('recipient');
    }

    public function medicines() : BelongsToMany
    {
        return $this->belongsToMany(Medicine::class,'application_medicine')->withPivot('quantity');
    }

}
