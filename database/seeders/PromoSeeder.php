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
            'nama_produk' => null,
            'foto' => null,
            'judul' => null,
            'deskripsi' => null
        ]);
        DB::table('promos')->insert([
            'nama_produk' => null,
            'foto' => null,
            'judul' => null,
            'deskripsi' => null
        ]);
        DB::table('promos')->insert([
            'nama_produk' => null,
            'foto' => null,
            'judul' => null,
            'deskripsi' => null
        ]);
    }
}

