<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Gender extends Enum implements LocalizedEnum
{
    const male=    0;
    const female =   1;


    public static function getLocalizationKey(): string
    {
        return 'Gender';
    }
   

}
