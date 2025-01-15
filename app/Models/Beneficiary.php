<?php

namespace App\Models;

use App\Enum\GenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class Beneficiary extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'document',
        'first_names',
        'last_names',
        'dob',
        'email',
        'phone_number',
        'address',
        'gender',
        'relationship',
        'official_id',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'gender' => GenderEnum::class,
    ];

    public function scopeSearch($query, $term) : void
    {
        if($term){
            $query->where('document', 'like', '%'.$term.'%')
                ->orWhere('first_names', 'like', '%'.$term.'%')
                ->orWhere('last_names', 'like', '%'.$term.'%')
                ->orWhere('email', 'like', '%'.$term.'%')
                ->orWhere('dob', 'like', '%'.$term.'%')
                ->orWhere('gender', 'like', '%'.$term.'%')
                ->orWhere('phone_number', 'like', '%'.$term.'%')
                ->orWhere('address', 'like', '%'.$term.'%')
                ->orWhereRelation('official', 'first_names','like', '%'.$term.'%')
                ->orWhereRelation('official', 'last_names','like', '%'.$term.'%')
                ->orWhereRelation('official', 'document','like', '%'.$term.'%');
        }
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
        ->logOnly(['*'])
        ->logOnlyDirty();
    }

    /**
     * Get the official that owns the beneficiary.
     */
    public function official() : BelongsTo
    {
        return $this->belongsTo(Official::class);
    }

    public function applications() : MorphMany
    {
        return $this->morphMany(Application::class,'recipientable');
    }

}
