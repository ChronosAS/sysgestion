<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;

class Donation extends Model
{
    /** @use HasFactory<\Database\Factories\DonationFactory> */
    use HasFactory, HasUuids;

    protected $fillable = [
        'code',
        'donor_document',
        'donor_name',
        'donor_email',
        'donor_phone_number',
        'donor_address',
        'donor_civil_status',
        'donor_dob',
        'donor_gender',
        'estado_id',
        'municipio_id',
        'parroquia_id'
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'code',
                'donor_document',
            ]);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($application){
            $lastApplication = self::orderBy('code', 'desc')->first();
            if ($lastApplication) {
                $lastCode = (int) str_replace('DM', '', $lastApplication->code);
                $newCode = $lastCode + 1;
            } else {
                $newCode = 1;
            }
            if (empty($application->code)) {
                $application->code = 'DM' . Str::padLeft($newCode, 5, '0');
            }
        });
    }

    public function medicines(): BelongsToMany
    {
        return $this->belongsToMany(Medicine::class,'donation_medicines');
    }

    public function estado() : BelongsTo
    {
        return $this->belongsTo(Estado::class,'estado_id');
    }

    public function municipio() : BelongsTo
    {
        return $this->belongsTo(Municipio::class,'municipio_id');
    }

    public function parroquia() : BelongsTo
    {
        return $this->belongsTo(Parroquia::class,'parroquia_id');
    }
}
