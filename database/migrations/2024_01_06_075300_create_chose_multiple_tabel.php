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
        Schema::create('chose_multiple_tabel', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('multiple_id');
            $table->unsignedBigInteger('choselesson_id');
            $table->foreign('multiple_id')->references('id')->on('multiples')->onDelete('cascade');
            $table->foreign('choselesson_id')->references('id')->on('multiple_lesson')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chose_multiple_tabel');
    }
};
