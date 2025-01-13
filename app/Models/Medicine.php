<?php

namespace App\Models;

use App\Enum\Medicines\CompositionEnum;
use App\Enum\Medicines\PresentationEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Medicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'composition',
        'active_component',
        'presentation',
        'laboratory',
        'stock',
        'price',
        'expiration_date',
        'entry_date',
    ];

    protected $casts = [
        'stock' => 'integer',
        'price' => 'decimal:2',
        'composition' => CompositionEnum::class,
        'presentation' => PresentationEnum::class,
    ];

    public function scopeSearch($query,$term){

        return $query->where('name','like','%'.$term.'%')
            ->orWhere('composition','like','%'.$term.'%')
            ->orWhere('active_component','like','%'.$term.'%')
            ->orWhere('presentation','like','%'.$term.'%')
            ->orWhere('laboratory','like','%'.$term.'%')
            ->orWhere('price','like','%'.$term.'%')
            ->orWhere('stock','like','%'.$term.'%');
    }

    public function applications() : BelongsToMany
    {
        return $this->belongsToMany(Application::class);
    }

    public function addToStock($amount)
    {
        $this->stock += $amount;
        $this->save();
    }

    public function removeFromStock($amount)
    {
        if ($this->stock >= $amount) {
            $this->stock -= $amount;
            $this->save();
        } else {
            throw new \Exception('No hay suficiente stock para eliminar la cantidad especificada.');
        }
    }
}
