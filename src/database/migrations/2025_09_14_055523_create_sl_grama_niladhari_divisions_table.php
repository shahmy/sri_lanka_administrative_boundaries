<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sl_grama_niladhari_divisions', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->index();
            $table->string('name_si')->nullable();
            $table->string('name_ta')->nullable();
            $table->unsignedBigInteger('sl_divisional_secretariat_id');
            $table->foreign('sl_divisional_secretariat_id', 'sl_gnd_sl_ds_id_foreign')->references('id')
            ->on('sl_divisional_secretariats')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sl_grama_niladhari_divisions');
    }
};
