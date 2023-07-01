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
        Schema::create('free_deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default("Бесплатная доставка");
            $table->integer('min_sum');
            $table->foreignId('delivery_zone_id')
                ->constrained('delivery_zones')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('free_deliveries');
    }
};
