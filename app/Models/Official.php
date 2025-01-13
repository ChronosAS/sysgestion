<?php

namespace App\Models;

use App\Enum\GenderEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Official extends Model
{
    use HasFactory;

    protected $casts = [
        'gender' => GenderEnum::class,
    ];

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
    ];

    public function scopeSearch($query, $term) : void
    {
        if($term) {
            $query->where('document', 'like', '%'.$term.'%')
                ->orWhere('first_names', 'like', '%'.$term.'%')
                ->orWhere('last_names', 'like', '%'.$term.'%')
                ->orWhere('email', 'like', '%'.$term.'%')
                ->orWhere('phone_number', 'like', '%'.$term.'%')
                ->orWhere('gender', 'like', '%'.$term.'%')
                ->orWhere('dob', 'like', '%'.$term.'%');
        }
    }

    public function beneficiaries() : HasMany
    {
        return $this->hasMany(Beneficiary::class);
    }

    public function requests() : MorphMany
    {
        return $this->morphMany(Request::class,'recipientable');
    }
}
