<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Municipio extends Model
{
    use HasFactory;

    protected $connection= 'estado_ciudad_municipio';

    public function parroquias() : HasMany
    {
        return $this->hasMany(Parroquia::class);
    }

    public function estado() : BelongsTo
    {
        return $this->belongsTo(Estado::class);
    }
}
