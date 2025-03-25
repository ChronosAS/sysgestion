<?php

namespace App\Enum\Medicines;

use App\Attributes\Label;
use App\Traits\AttributableEnum;
use App\Traits\EnumOptions;

enum CompositionEnum: string
{
    use EnumOptions,AttributableEnum;

    #[Label('mg')]
    case mg = 'mg';
    #[Label('cc(cm³)')]
    case cm3 = 'cm3';
    #[Label('ml')]
    case ml = 'ml';
}
