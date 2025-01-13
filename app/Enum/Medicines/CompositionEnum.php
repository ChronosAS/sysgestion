<?php

namespace App\Enum\Medicines;

use App\Attributes\Label;
use App\Traits\AttributableEnum;
use App\Traits\EnumOptions;

enum CompositionEnum: string
{
    use EnumOptions,AttributableEnum;

    #[Label('mg')]
    case MG = 'mg';
    #[Label('cm³')]
    case CM3 = 'cm3';
    #[Label('ml')]
    case ML = 'ml';
}
