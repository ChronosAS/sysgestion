<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class PensionReport extends Model implements HasMedia
{
    use HasUuids, LogsActivity, InteractsWithMedia;

    protected $fillable = [
        'code',
        'total_elders',
        'amount',
        'total',
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'code',
                'total_elders',
                'amount',
                'total',
            ]);
    }

    public function elders(): BelongsToMany
    {
        return $this->belongsToMany(ElderProgramMember::class,'report_member');
    }

    public function scopeSearch($query,$term)
    {
        return $query->where('code','like','%'.$term.'%')
            ->orWhere('total_elders','like','%'.$term.'%')
            ->orWhere('amount','like','%'.$term.'%')
            ->orWhere('total','like','%'.$term.'%')
            ->orWhereRelation('elders.elder', 'document', 'like', '%'.$term.'%')
            ->orWhereRelation('elders.elder', 'first_names', 'like', '%'.$term.'%')
            ->orWhereRelation('elders.elder', 'last_names', 'like', '%'.$term.'%');
        }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($application){
            $lastApplication = self::orderBy('code', 'desc')->first();
            if ($lastApplication) {
                $lastCode = (int) str_replace('RP', '', $lastApplication->code);
                $newCode = $lastCode + 1;
            } else {
                $newCode = 1;
            }
            if (empty($application->code)) {
                $application->code = 'RP' . Str::padLeft($newCode, 5, '0');
            }
        });
    }
}
