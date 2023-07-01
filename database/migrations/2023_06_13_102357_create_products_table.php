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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('uid');
            $table->string('meta_title')->default("");
            $table->text('meta_description')->default("");
            $table->string('title');
            $table->string('img');
            $table->integer('price');
            $table->text('text');
            $table->string('sku');
            $table->foreignId('category_id')
                ->constrained('sites')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('site_id')
                ->constrained('sites')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->integer('enabled');
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
