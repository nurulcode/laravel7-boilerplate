<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class JenisPenerimaan extends Enum
{
    const URJ       = 1;
    const IRD       = 2;
    const Langsung  = 3;
}
