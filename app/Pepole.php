<?php

namespace App;

use App\Enums\Gender;
use App\Enums\healthyType;
use App\Enums\HomeType;
use App\Enums\JobType;
use App\Enums\possession;
use App\Enums\socialStatus;
use BenSampo\Enum\Traits\CastsEnums;
use Illuminate\Database\Eloquent\Model;

class Pepole extends Model
{
    protected $guarded =[];
    use CastsEnums;
    protected $enumCasts = [
        'SocialStatus' => socialStatus::class,
        'healthy' => healthyType::class , 
        'job'=> JobType::class , 
        'home'=> HomeType::class,
        'possession' => possession::class ,  
        'gender' => Gender::class , 
    ];

}
