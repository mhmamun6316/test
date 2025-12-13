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
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['intro', 'full_width_image', 'content_image', 'quote', 'services'])->default('content_image');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->longText('content')->nullable();
            $table->string('image')->nullable();
            $table->enum('image_position', ['left', 'right'])->default('left');
            $table->json('list_items')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sections');
    }
};
