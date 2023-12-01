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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('sec_name')->nullable();
            $table->string('category', 40);
            $table->unsignedInteger('value');
            $table->unsignedInteger('order');
            $table->string('color', 30);
            $table->string('color_sec', 30)->nullable();
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
        Schema::dropIfExists('skills');
    }
};
