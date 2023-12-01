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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->string('icon1')->nullable();
            $table->string('link1')->nullable();
            $table->string('icon2')->nullable();
            $table->string('link2')->nullable();
            $table->string('icon3')->nullable();
            $table->string('link3')->nullable();
            $table->string('icon4')->nullable();
            $table->string('link4')->nullable();
            $table->string('icon5')->nullable();
            $table->string('link5')->nullable();
            $table->string('creator', 100)->nullable();
            $table->string('slug', 150)->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
