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
        Schema::create('filns', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            /*
            $table->unsignedBigInteger('director_id');
            $table->foreign('director_id')->references('id')->on('directors')->onDelete('cascade');
            */
            //or
            $table->foreignId('director_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('filns');
    }
};
