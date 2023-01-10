<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class sliders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            'foto1' => 'slider-03.png',
        ]);
        DB::table('sliders')->insert([
            'foto1' => 'slider-03.png',
        ]);
        DB::table('sliders')->insert([
            'foto1' => 'slider-03.png',
        ]);
    }
}
