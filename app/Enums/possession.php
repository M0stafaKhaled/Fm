<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class possession extends Enum implements LocalizedEnum
{
    const  AgriculturalLand =   0;
    const buildings =   1;
    const realEstates= 2;

    public static function getLocalizationKey(): string
    {
        return 'possession';
    }
}
