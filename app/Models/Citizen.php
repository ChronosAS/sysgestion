<?php

namespace App\Models;

use App\Enum\Citizens\CivilStatusEnum;
use App\Enum\GenderEnum;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Citizen extends Model
{
    use HasFactory, HasUuids, SoftDeletes, LogsActivity;

    protected $fillable = [
        'document',
        'first_names',
        'last_names',
        'civil_status',
        'dob',
        'gender',
        'email',
        'phone_number',
        'phone_number_2',
        'address',
        'observations'
    ];

    protected $casts = [
        'gender' => GenderEnum::class,
        'civil_status' => CivilStatusEnum::class

    ];

    public function scopeSearch($query,$term) : void
    {
        if($term){
            $query->where('document', 'like', '%'.$term.'%')
                ->orWhere('first_names', 'like', '%'.$term.'%')
                ->orWhere('last_names', 'like', '%'.$term.'%')
                ->orWhere('civil_status', 'like', '%'.$term.'%')
                ->orWhere('email', 'like', '%'.$term.'%')
                ->orWhere('dob', 'like', '%'.$term.'%')
                ->orWhere('gender', 'like', '%'.$term.'%')
                ->orWhere('phone_number', 'like', '%'.$term.'%')
                ->orWhere('phone_number_2', 'like', '%'.$term.'%')
                ->orWhere('address', 'like', '%'.$term.'%')
                ->orWhereRelation('estado', 'estado','like', '%'.$term.'%')
                ->orWhereRelation('municipio', 'municipio','like', '%'.$term.'%')
                ->orWhereRelation('parroquia', 'parroquia','like', '%'.$term.'%')
                ->orWhereRelation('elderProgramApplication','code','like','%'.$term.'%');
        }
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['*']);
    }

    public function elderProgramApplication() : HasMany
    {
        return $this->hasMany(ElderProgramApplication::class,'elder_uuid');
    }

    public function familyMembers() : HasMany
    {
        return $this->hasMany(FamilyGroup::class);
    }

    public function estado() : BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }

    public function municipio() : BelongsTo
    {
        return $this->belongsTo(Municipio::class);
    }

    public function parroquia() : BelongsTo
    {
        return $this->belongsTo(Parroquia::class);
    }
}
