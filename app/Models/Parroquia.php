<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Parroquia extends Model
{
    use HasFactory;

    protected $connection= 'estado_ciudad_municipio';

    protected $primaryKey = 'id_parroquia';

    public function municipio() : BelongsTo
    {
        return $this->belongsTo(Municipio::class,'id_municipio');
    }
}
