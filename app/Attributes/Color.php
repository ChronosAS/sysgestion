<?php

namespace App\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class Color extends AttributeProperty
{
    public function __construct(
        private mixed $value,
        ) {
    }

    public function get(): string
    {
        return $this->value;
    }
}
