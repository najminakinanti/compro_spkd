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
        Schema::create('discussion_requests', function (Blueprint $table) {
            $table->uuid('unique_id')->primary();

            $table->string('reference_number')->unique();

            $table->string('solution_key')->nullable()->index();

            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('role')->nullable();
            $table->string('institution')->nullable();
            $table->text('message');

            $table->string('status')->default('new');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('discussion_requests');
    }
};
