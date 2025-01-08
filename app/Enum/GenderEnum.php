<?php

namespace App\Enum;

use App\Traits\EnumOptions;

enum GenderEnum: string
{
    use EnumOptions;

    case M = 'Masculino';

    case F = 'Femenino';
}
