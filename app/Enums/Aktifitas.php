<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Aktifitas extends Enum
{
    const Ringan    = 1;
    const Sedang    = 2;
    const Berat     = 3;
}
