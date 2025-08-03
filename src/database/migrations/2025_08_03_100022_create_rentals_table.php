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
        Schema::create('rentals', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price_per_day', 10, 2);
            $table->string('vehicle_type');
            $table->string('status')->default('available');
            $table->text('description')->nullable();
            $table->string('photo')->nullable();
            $table->boolean('driver_option')->default(false);
            $table->string('category')->nullable();
            $table->json('tags')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rentals');
    }
};
