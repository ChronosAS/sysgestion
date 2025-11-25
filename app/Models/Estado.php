<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Estado extends Model
{
    use HasFactory;

    protected $connection= 'estado_ciudad_municipio';

    protected $primaryKey = 'id_estado';

    public function municipios() : HasMany
    {
        return $this->hasMany(Municipio::class, 'id_estado');
    }

    public function parroquias() : HasManyThrough
    {
        return $this->hasManyThrough(Parroquia::class,Municipio::class,'id_estado','id_municipio');
    }
}
