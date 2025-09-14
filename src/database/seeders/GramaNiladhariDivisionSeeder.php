<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GramaNiladhariDivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gnDivisionJson = file_get_contents(__DIR__.'/../../data/grama_niladhari_divisions.json');
        $gnDivisions = json_decode($gnDivisionJson, true);

        foreach ($gnDivisions as $gnDivision) {
            DB::table('sl_grama_niladhari_divisions')->insertOrIgnore([
                'id' => $gnDivision['id'],
                'name_en' => $gnDivision['name_en'],
                'name_si' => $gnDivision['name_si'],
                'name_ta' => $gnDivision['name_ta'],
                'sl_divisional_secretariat_id' => $gnDivision['sl_divisional_secretariat_id']
            ]);
        }
    }
}
