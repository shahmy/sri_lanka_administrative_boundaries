<?php

namespace Shahmy\SriLankaAdministrativeBoundaries\Database\Seeders;

use Illuminate\Database\Seeder;

class SriLankaAdministrativeBoundariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call([
            CountryDatabaseSeeder::class,
            ProvinceSeeder::class,
            DistrictSeeder::class,
            DivisionalSecretariatSeeder::class,
            GramaNiladhariDivisionSeeder::class,
        ]);
    }
}
