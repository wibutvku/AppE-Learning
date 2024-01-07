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
        Schema::create('multiples', function (Blueprint $table) {
            $table->id();
            $table->mediumText('kalimat');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('E');
            $table->string('kunci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('multiples');
    }
};
