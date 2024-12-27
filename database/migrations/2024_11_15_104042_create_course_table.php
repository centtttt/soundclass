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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('type');
            $table->text('description');
            $table->string('imageURL');
            $table->integer('total_lessons');
            $table->unsignedBigInteger('teacher_id');
            $table->timestamps();

            $table->foreign('teacher_id')->references('id')->on('teacher')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
