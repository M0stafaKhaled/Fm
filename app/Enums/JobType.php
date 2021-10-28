<?php

namespace App\Enums;

use BenSampo\Enum\Contracts\LocalizedEnum;
use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class JobType extends Enum implements LocalizedEnum
{
    const Officer      =   0;
    const retired      =   1;
    const dailyWorker  =   2;
    const wageWorker   =   3;

    public static function getLocalizationKey(): string
    {
        return 'Job_type';
    }
}
