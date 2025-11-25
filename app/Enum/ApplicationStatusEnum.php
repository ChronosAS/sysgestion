<?php

namespace App\Enum;

use App\Attributes\Color;
use App\Attributes\Label;
use App\Traits\AttributableEnum;
use App\Traits\EnumOptions;

enum ApplicationStatusEnum: string
{
    use EnumOptions,AttributableEnum;

    #[Label('Por aprobar')]
    #[Color('yellow')]
    case Pending = 'pending';

    #[Label('Rechazado')]
    #[Color('red')]
    case Denied = 'denied';

    #[Label('Aprobado')]
    #[Color('green')]
    case Aproved = 'aproved';

    #[Label('Consolidado')]
    #[Color('green')]
    case Consolidated = 'consolidated';

    #[Label('Entregado')]
    #[Color('green')]
    case Delivered = 'delivered';
}
