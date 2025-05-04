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
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('highlight_text')->nullable();
            $table->text('subtitle')->nullable();
            $table->string('gradient_from')->default('purple-400');
            $table->string('gradient_to')->default('blue-400');
            $table->string('highlight_color')->default('lime-300');
            $table->string('button1_text')->default('Button 1');
            $table->string('button1_link')->default('#');
            $table->string('button2_text')->default('Button 2')->nullable();
            $table->string('button2_link')->default('#')->nullable();
            $table->string('background_media')->nullable(); // Bild oder Video
            $table->enum('media_type', ['image','video'])->default('image');
            $table->integer('sort_order')->default(0);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('slides');
    }
};
