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
        Schema::create('ticketorders', function (Blueprint $table) {
            $table->id();
            $table->date('ingeplandeDatum');
            $table->string('email');
            $table->string('voornaam');
            $table->string('achternaam');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticketorders');
    }
};
