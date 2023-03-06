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
        Schema::create('spot_details', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('vaccinations_count');
            $table->unsignedBigInteger('spot_id');
            $table->foreign('spot_id')->references('id')->on('spots');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spot_details');
    }
};
