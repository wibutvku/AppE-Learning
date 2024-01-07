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
        Schema::create('teacher_lesson', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('lesson_id');
            $table->unsignedBigInteger('kelas_id');
            
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('cascade');
            $table->foreign('kelas_id')->references('id')->on('kelas')->onDelete('cascade');

            $table->unique(['lesson_id', 'kelas_id']);

            $table->timestamps();

            // Indeks unik untuk memastikan tidak ada duplikasi kombinasi foreign key
            // $table->unique(['post_id', 'comment_id', 'user_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_lesson');
    }
};
