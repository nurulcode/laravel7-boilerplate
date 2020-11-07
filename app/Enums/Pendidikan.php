<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Pendidikan extends Enum
{
    const SD        = 1;
    const SLTP      = 2;
    const SLTA      = 3;
    const D1        = 4;
    const D2        = 5;
    const S1        = 6;
    const S2        = 7;
    const S3        = 8;
    const TidakAda  = 9;

}
