<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class socialStatus extends Enum implements LocalizedEnum
{
    const Married  =   0;
    const Divorced =   1;
    const single   =   2;
    const Widower  =   3 ;
    public static function getLocalizationKey(): string
    {
        return 'Scocial_Status';
    }
}
