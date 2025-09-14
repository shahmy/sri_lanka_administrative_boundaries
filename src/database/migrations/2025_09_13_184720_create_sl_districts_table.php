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
        Schema::create('sl_districts', function (Blueprint $table) {
            $table->id();
            $table->string('name_en')->index();
            $table->string('name_si')->nullable();
            $table->string('name_ta')->nullable();
            $table->foreignId('sl_province_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sl_districts');
    }
};
