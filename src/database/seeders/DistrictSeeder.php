<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $districtJson = file_get_contents(__DIR__.'/../../data/districts.json');
        $districts = json_decode($districtJson, true);
    

        foreach ($districts as $district) {
            DB::table('sl_districts')->insertOrIgnore([
                'id' => $district['id'],
                'name_en' => $district['name_en'],
                'name_si' => $district['name_si'],
                'name_ta' => $district['name_ta'],
                'sl_province_id' => $district['sl_province_id'],
                'created_at' => Carbon::now(),
                'updated_at' => null,
            ]);
        }
    }
}
