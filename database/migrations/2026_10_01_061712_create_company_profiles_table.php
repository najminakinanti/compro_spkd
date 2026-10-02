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
        Schema::create('company_profiles', function (Blueprint $table) {
            $table->uuid('unique_id')->primary();

            $table->string('name');
            $table->text('short_description');

            $table->string('about_title');
            $table->text('about_description');

            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->string('work_hour');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profiles');
    }
};
