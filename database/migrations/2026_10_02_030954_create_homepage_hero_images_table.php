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
        Schema::create('homepage_hero_images', function (Blueprint $table) {
            $table->uuid('unique_id')->primary();

            $table->uuid('hero_id');

            $table->string('image');
            $table->text('description')->nullable();

            $table->timestamps();

            $table->foreign('hero_id')
                ->references('unique_id')
                ->on('homepage_hero')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homepage_hero_images');
    }
};
