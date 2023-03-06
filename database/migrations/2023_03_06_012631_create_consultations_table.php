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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('status')->default('pending');
            $table->string('disease_history')->default(null);
            $table->string('current_symptoms')->default(null);
            $table->string('doctor_notes')->default(null);
            $table->string('doctor')->default(null);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id_card')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consultations');
    }
};
