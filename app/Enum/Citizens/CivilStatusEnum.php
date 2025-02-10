<?php

namespace App\Enum\Citizens;

use App\Attributes\Color;
use App\Attributes\Label;
use App\Traits\AttributableEnum;
use App\Traits\EnumOptions;

enum CivilStatusEnum: string
{
    use EnumOptions,AttributableEnum;

    #[Label('Soltero/a')]
    case Single = 's';

    #[Label('Casado/a')]
    case Married = 'm';

    #[Label('Divorciado/a')]
    case Divorced = 'd';

    #[Label('Viudo/a')]
    case Widow = 'w';

}
