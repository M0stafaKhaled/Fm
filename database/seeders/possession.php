<?php

namespace Database\Seeders;

use App\Models\Poseession;
use Illuminate\Database\Seeder;

class possession extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pes = [
            ['name' => 'زراعية'],
            ['name' => 'مباني'],
            ['name' => 'عقارات '],
        ];

        foreach($pes as $pe)
        {

                Poseession::create($pe);
        }
        
    }
}
