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
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // id
            $table->string('title_en'); // title in English
            $table->string('title_kh'); // title in Khmer
            $table->string('sub_title_en')->nullable(); // subtitle in English
            $table->string('sub_title_kh')->nullable(); // subtitle in Khmer
            $table->text('description_en')->nullable(); // description in English
            $table->text('description_kh')->nullable(); // description in Khmer
            $table->timestamps(); // created_at and updated_at
            $table->softDeletes(); // deleted_at for soft deletes
            $table->unsignedBigInteger('created_by')->nullable(); // creator ID
            $table->unsignedBigInteger('updated_by')->nullable(); // updater ID
            $table->unsignedBigInteger('deleted_by')->nullable(); // deleter ID
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
