<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DivisionalSecretariatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $divisionalSecretariatJson = file_get_contents(__DIR__.'/../../data/divisional_secretariats.json');
        $divisionalSecretariats = json_decode($divisionalSecretariatJson, true);

        foreach ($divisionalSecretariats as $divisionalSecretariat) {
            DB::table('sl_divisional_secretariats')->insertOrIgnore([
                'id' => $divisionalSecretariat['id'],
                'name_en' => $divisionalSecretariat['name_en'],
                'name_si' => $divisionalSecretariat['name_si'],
                'name_ta' => $divisionalSecretariat['name_ta'],
                'district_id' => $divisionalSecretariat['district_id']
                ]);
        }
    }
}
