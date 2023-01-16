<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([
            'foto' => '2.jpg',
            'judul' => 'Get 15% off on branded shoes',
            'deskripsi' => 'Promo besar besaran 15% hanya untuk pengguna baru'
        ]);
        DB::table('promos')->insert([
            'foto' => '3.jpg',
            'judul' => 'Get 30% off on branded chair',
            'deskripsi' => 'Promo besar besaran 30% hanya untuk pengguna baru'
        ]);
        DB::table('promos')->insert([
            'foto' => '4.jpg',
            'judul' => 'Get 50% off on branded hand bags',
            'deskripsi' => 'Promo besar besaran 50% hanya untuk pengguna baru'
        ]);
    }
}
