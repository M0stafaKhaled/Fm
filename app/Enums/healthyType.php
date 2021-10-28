<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class healthyType extends Enum implements LocalizedEnum
{
    const disabled =   0;
    const right=   1;
   

    public static function getLocalizationKey(): string
    {
        return 'healthy_type';
    }
}
