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
        Schema::create('users', function (Blueprint $table) {
            $table->string('name');
            $table->unsignedBigInteger('id_card')->unique()->primary();
            $table->string('password');
            $table->string('born_date');
            $table->string('gender');
            $table->string('address');
            $table->string('role');
            $table->string('region');
            $table->foreign('region')->references('district')->on('regions');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
