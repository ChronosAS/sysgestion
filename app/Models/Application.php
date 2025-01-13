<?php

namespace App\Models;

use App\Enum\ApplicationStatusEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Application extends Model
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'code',
        'applicant_id',
        'application_date',
        'delivery_date',
        'status',
    ];

    protected $casts = [
        'status' => ApplicationStatusEnum::class
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }

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

    public function applicant() : BelongsTo
    {
        return $this->belongsTo(Official::class,'applicant_id');
    }

    public function recipientable() : MorphTo
    {
        return $this->morphTo('recipient','recipient_type','recipient_id');
    }

    public function medicines() : HasMany
    {
        return $this->hasMany(Medicine::class);
    }

}
