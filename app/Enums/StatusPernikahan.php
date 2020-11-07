<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class StatusPernikahan extends Enum
{
    const BelumKawin    = 1;
    const Kawin         = 2;
    const Duda          = 3;
    const Janda         = 4;
}
