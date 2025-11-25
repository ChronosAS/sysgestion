<?php

namespace App\Enum\Medicines;

use App\Attributes\Label;
use App\Traits\AttributableEnum;
use App\Traits\EnumOptions;

enum PresentationEnum: string
{
    use EnumOptions,AttributableEnum;

    #[Label('Pastillas')]
    case PILL = 'pill';
    #[Label('Jarabe')]
    case syrup = 'syrup';
    #[Label('Ampollas')]
    case AMPOULE = 'ampoule';
}
