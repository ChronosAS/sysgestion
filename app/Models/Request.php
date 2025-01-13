<?php

namespace App\Models;

use App\Enum\RequestStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Request extends Model
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $fillable = [
        'code',
        'applicant_id',
        'request_date',
        'delivery_date',
        'status',
    ];

    protected $casts = [
        'status' => RequestStatusEnum::class
    ];

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10);
    }

    public function official() : BelongsTo
    {
        return $this->belongsTo(Official::class);
    }

    public function recipientable() : MorphTo
    {
        return $this->morphTo();
    }

    public function medicines() : HasMany
    {
        return $this->hasMany(Medicine::class);
    }

}
