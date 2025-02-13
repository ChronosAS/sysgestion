<?php

namespace App\Models;

use App\Enum\ApplicationStatusEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ElderProgramApplication extends Model
{
    use HasFactory, HasUuids, SoftDeletes, LogsActivity;

    protected $fillable = [
        'code',
        'elder_id',
        'ocuppation',
        'education_level',
        'status',
        'medical_aspect',
        'city_of_birth'
    ];

    protected $casts = [
        'status' => ApplicationStatusEnum::class
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'code',
                'elder_id',
                'ocuppation',
                'education_level',
                'status',
                'medical_aspect',
                'city_of_birth'
            ]);
    }

    public function scopeSearch($query,$term)
    {
        return $query->where('code','like','%'.$term.'%')
            ->orWhere('city_of_birth','like','%'.$term.'%')
            ->orWhereRelation('elder','document','like','%'.$term.'%')
            ->orWhereRelation('elder','first_names','like','%'.$term.'%')
            ->orWhereRelation('elder','last_names','like','%'.$term.'%')
            ->orWhereRelation('elder','email','like','%'.$term.'%');
    }

    public function elder() : BelongsTo
    {
        return $this->belongsTo(Citizen::class,'elder_id');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($application){
            $lastApplication = self::withTrashed()->orderBy('code', 'desc')->first();
            if ($lastApplication) {
                $lastCode = (int) str_replace('PAL', '', $lastApplication->code);
                $newCode = $lastCode + 1;
            } else {
                $newCode = 1;
            }
            if (empty($application->code)) {
                $application->code = 'PAL' . Str::padLeft($newCode, 5, '0');
            }
        });
    }
}
