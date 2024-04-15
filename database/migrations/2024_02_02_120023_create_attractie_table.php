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
        Schema::create('attracties', function (Blueprint $table) {
            $table->id();
            $table->string('naamAttractie');
            $table->string('tijdsDuur');
            $table->string('informatie');
            $table->string('lengte');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attracties');
    }
};
