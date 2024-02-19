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
            $table->string('prefecture', 10);
            $table->string('business_hour', 1000)->nullable();
            $table->string('holiday', 1000)->nullable();
            $table->string('charge', 1000)->nullable();
            $table->string('content', 1000)->nullable();
            $table->string('image_path', 1000)->nullable();
            $table->string('website', 1000)->nullable();
            $table->string('x', 1000)->nullable();
            $table->string('instagram', 1000)->nullable();
            $table->string('youtube', 1000)->nullable();
            $table->string('amazon', 1000)->nullable();
            $table->string('admin', 1000)->nullable();
            $table->string('map', 1000)->nullable();
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
