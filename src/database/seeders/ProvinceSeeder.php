<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $provinceJson = file_get_contents(__DIR__.'/../../data/provinces.json');
        $provinces = json_decode($provinceJson, true);
        
        foreach ($provinces as $province) {
            DB::table('sl_provinces')->insertOrIgnore([
                'id' => $province['id'],
                'name_en' => $province['name_en'],
                'name_si' => $province['name_si'],
                'name_ta' => $province['name_ta'],
                'sl_country_id' => $province['sl_country_id'],
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ]);
        }
    }
}
