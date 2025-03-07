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
    case s = 's';

    #[Label('Casado/a')]
    case m = 'm';

    #[Label('Divorciado/a')]
    case d = 'd';

    #[Label('Viudo/a')]
    case w = 'w';

}
