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
        Schema::create('news', function (Blueprint $table) {
             $table->uuid('unique_id')->primary();

            $table->foreignUuid('category_id')
                ->constrained('news_categories', 'unique_id')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            $table->string('title');
            $table->string('slug')->unique();

            $table->text('excerpt');

            $table->jsonb('content');

            $table->string('featured_image')->nullable();

            $table->string('author');
            $table->unsignedInteger('reading_time')->nullable();

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(false);

            $table->timestamp('published_at')->nullable();

            $table->timestamps();

            $table->foreignUuid('created_by')
                ->nullable()
                ->constrained('users', 'unique_id')
                ->nullOnDelete()
                ->cascadeOnUpdate();

            $table->foreignUuid('updated_by')
                ->nullable()
                ->constrained('users', 'unique_id')
                ->nullOnDelete()
                ->cascadeOnUpdate();
                    });
                }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
