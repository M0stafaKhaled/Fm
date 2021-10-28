<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class HomeType extends Enum implements LocalizedEnum
{
    const governmentHouse =   0;
    const selfHome =   1;
    const rentOROwn = 2;
    public static function getLocalizationKey(): string
    {
        return 'Home_type';
    }
}
