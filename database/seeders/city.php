<?php

namespace Database\Seeders;

use App\Models\datawilayahkabupaten;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Kavist\RajaOngkir\Facades\RajaOngkir;

class city extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $daftarkota = RajaOngkir::kota()->all();
        foreach($daftarkota as $city){
            datawilayahkabupaten::create([
                "city_id"=>$city["city_id"],
                "province_id"=>$city["province_id"],
                "province"=>$city["province"],
                "type"=>$city["type"],
                "city_name"=>$city["city_name"],
                "postal_code"=>$city["postal_code"],
            ]);
        }
    }
}
