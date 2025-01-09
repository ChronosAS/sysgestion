<?php

namespace App\Enum;

use App\Attributes\Label;
use App\Traits\AttributableEnum;
use App\Traits\EnumOptions;

enum GenderEnum: string
{
    use EnumOptions,AttributableEnum;

    #[Label('Masculino')]
    case M = 'M';
    #[Label('Femenino')]
    case F = 'F';
}
