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
        Schema::create('cafes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('address', 50);
            $table->string('business_hour', 50)->nullable();
            $table->string('holiday', 50)->nullable();
            $table->string('content', 1000)->nullable();
            $table->string('image_path', 1000)->nullable();
            $table->string('website', 1000)->nullable();
            $table->string('twitter', 1000)->nullable();
            $table->string('instagram', 1000)->nullable();
            $table->string('youtube', 1000)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cafes');
    }
};
