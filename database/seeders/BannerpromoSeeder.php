<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BannerpromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner_promos')->insert([
            'judul' => 'On Furniture',
            'subjudul' => 'Upto 45% off',
            'deskripsi' => 'Promo besar besaran 45% hanya untuk pengguna baru',
            'foto' => 'offer-banner-06.jpg',
        ]);
    }
}
