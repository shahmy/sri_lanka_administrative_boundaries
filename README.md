### shahmy/sri\_lanka\_administrative\_boundaries

This package provides a comprehensive migration and seeder solution for populating a Laravel application with the administrative boundaries of Sri Lanka, including Provinces, Districts, Divisional Secretariats, and Grama Niladhari Divisions. The data is based on the official sources and is pre-packaged as JSON files for easy migration and seeding.

-----

### Installation Guide

You can install the package via Composer.

```bash
composer require shahmy/sri_lanka_administrative_boundaries
```

After the package is installed, you need to publish the migration files to your `database/migrations` directory.

```bash
php artisan vendor:publish --tag=sri-lanka-administrative-boundaries-migrations
```

Next, you can run the migrations and seed the database with the provided data. You have two options for seeding:

**Option 1: Run All Migrations and Seeders**

Add the package's seeder to your main `database/seeders/DatabaseSeeder.php` file.

```php
// database/seeder/DatabaseSeeder.php

use Illuminate\Database\Seeder;
use Shahmy\SriLankaAdministrativeBoundaries\database\seeders\SriLankaAdministrativeBoundariesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // Other seeders...
            SriLankaAdministrativeBoundariesSeeder::class,
        ]);
    }
}
```

Then, run the command:

```bash
php artisan migrate --seed
```

**Option 2: Run Only the Package's Seeder**

If you have already run your migrations and only need to seed the data from this package, you can run the following command directly:

```bash
php artisan db:seed --class=SriLankaAdministrativeBoundariesSeeder
```

-----

### Data Source

The data used in this package is sourced from the **Humanitarian Data Exchange (HDX)**. Specifically, the data is from the following resource: [https://data.humdata.org/dataset/cod-ab-lka](https://data.humdata.org/dataset/cod-ab-lka)