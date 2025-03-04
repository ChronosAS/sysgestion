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
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Citizen extends Model implements HasMedia
{
    use HasFactory, HasUuids, SoftDeletes, LogsActivity, InteractsWithMedia;

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
        'observations',
        'estado_id',
        'municipio_id',
        'parroquia_id',
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
                ->orWhereRelation('elderProgramMember','code','like','%'.$term.'%');
        }
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults();
    }

    public function elderProgramMember() : HasMany
    {
        return $this->hasMany(ElderProgramMember::class,'elder_id');
    }

    public function familyMembers() : HasMany
    {
        return $this->hasMany(FamilyGroup::class);
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
