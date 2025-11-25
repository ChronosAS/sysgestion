<?php

namespace App\Concerns;

use Illuminate\Support\Str;

/** IMPORTANT: This trait must be included at the end */
trait HasCode
{
    protected static function bootHasCode()
    {
        static::created(function ($model) {
            $model->code = static::getCodePrefix() . Str::padLeft($model->id, 5, 0);
            $model->saveQuietly();
        });
    }

    protected static function getCodePrefix(): ?string
    {
        return property_exists(static::class, 'codePrefix')
            ? static::$codePrefix
            : null;
    }
}
