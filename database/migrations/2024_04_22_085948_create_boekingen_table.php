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
        Schema::create('boekingen', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('email');
            $table->int('telefoonNummer');
            $table->string('kamerType');
            $table->date('aankomst');
            $table->date('vertrek');
            $table->int('aantalPersonen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('boekingen');
    }
};