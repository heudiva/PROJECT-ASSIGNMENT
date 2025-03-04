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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('studentid')->nullable();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sex');
            $table->string('dob');
            $table->string('village');
            $table->string('commune');
            $table->string('district');
            $table->string('province');
            $table->string('phone');
            $table->string('email');
            $table->string('active')->default('1');
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
