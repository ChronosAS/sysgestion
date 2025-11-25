<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyGroup extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'citizen_uuid',
        'first_names',
        'last_names',
        'relation',
        'document',
        'age'
    ];


    public function citizen() : BelongsTo
    {
        return $this->belongsTo(Citizen::class);
    }
}
