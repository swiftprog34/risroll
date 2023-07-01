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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('uid');
            $table->string('meta_title')->default("");
            $table->text('meta_description');
            $table->string('title');
            $table->text('image');
            $table->integer('enabled');
            $table->integer('order');
            $table->foreignId('site_id')
                ->constrained('sites')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
            $table->text("header_description");
            $table->text("footer_description");
            $table->boolean('add_to_main_page');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
