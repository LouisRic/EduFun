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
        Schema::create('matakuliah', function (Blueprint $table) {
            $table->id();
            $table->date('publishdate');
            $table->string('name');
            $table->string('imgurl');
            $table->enum('category', ['Data Science', 'Network Security']);
            $table->text('description');
            $table->unsignedBigInteger('writer_id');
            $table->timestamps();

            $table->foreign('writer_id')->references('id')->on('writer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matakuliah');
    }
};
