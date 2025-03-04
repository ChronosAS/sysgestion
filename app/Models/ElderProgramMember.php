<?php

namespace App\Models;

use App\Enum\ApplicationStatusEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class ElderProgramMember extends Model
{
    use HasFactory, HasUuids, SoftDeletes, LogsActivity;

    protected $fillable = [
        'code',
        'elder_id',
        'occupation',
        'education_level',
        'status',
        'medical_aspect',
        'psychosocial_aspect',
        'environmental_aspect',
        'city_of_birth',
        'account_number',
        'family_monthly_income',
        'family_monthly_expenses'
    ];

    protected $casts = [
        'status' => ApplicationStatusEnum::class
    ];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly([
                'elder_id',
                'occupation',
                'education_level',
                'status',
                'medical_aspect',
                'city_of_birth'
            ]);
    }

    public function scopeSearch($query,$term)
    {
        return $query->where('city_of_birth','like','%'.$term.'%')
            ->orWhereRelation('elder','document','like','%'.$term.'%')
            ->orWhereRelation('elder','first_names','like','%'.$term.'%')
            ->orWhereRelation('elder','last_names','like','%'.$term.'%')
            ->orWhereRelation('elder','email','like','%'.$term.'%');
    }

    public function pensionReport(): BelongsToMany
    {
        return $this->belongsToMany(PensionReport::class,'report_member');
    }

    public function elder() : BelongsTo
    {
        return $this->belongsTo(Citizen::class,'elder_id');
    }


}
