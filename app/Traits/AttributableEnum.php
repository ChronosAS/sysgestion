<?php

namespace App\Traits;

use App\Attributes\AttributeProperty;
use BadMethodCallException;
use Illuminate\Support\Str;
use ReflectionAttribute;
use ReflectionEnum;

trait AttributableEnum
{
    public function __call(string $method,array $arguments): mixed
    {
        $reflection = new ReflectionEnum(static::class);
        $attributes = $reflection->getCase($this->name)->getAttributes();

        $filtered_attributes = array_filter($attributes,fn (ReflectionAttribute $attribute)=> $attribute->getName() === AttributeProperty::ATTRIBUTE_PATH . Str::ucfirst($method));

        if (empty($filtered_attributes)) {
            throw new BadMethodCallException(sprintf('Call to undefined method %s::%s()',static::class,$method));

        }

        return array_shift($filtered_attributes)->newInstance()->get();
    }
}
