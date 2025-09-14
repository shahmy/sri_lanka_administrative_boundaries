<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {

        
        $countryJson = file_get_contents(__DIR__.'/../../data/countries.json');
        $countries = json_decode($countryJson, true);
        

        foreach ($countries as $country) {
            DB::table('sl_countries')->insertOrIgnore([
                'name_en' => $country['name_en'],
                'name_si' => $country['name_si'],
                'name_ta' => $country['name_ta'],
                'code' => $country['code'],
                'currency' => $country['currency'],
                'phone_code' => $country['phone_code']
            ]);
        }
    }
}
