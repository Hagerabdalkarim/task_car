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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->decimal('price', 4, 2);
            $table->longText('content');
            $table->tinyInteger('doors');
            $table->tinyInteger('luggage');
            $table->tinyInteger('passenger');
            $table->boolean('active');
            $table->foreignId('category_id')->constrained('categories')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->string('image', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
