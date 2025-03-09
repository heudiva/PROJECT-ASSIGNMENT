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
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('name', length:100)->nullable();
            $table->string('name_khmer', length:50)->nullable();
            $table->string('barcode', length:100)->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('supplier_id')->nullable();
            $table->integer('qty_on_hand')->nullable();
            $table->integer('qty_alert')->nullable();
            $table->string('description', length:100)->nullable();
            $table->char('stocktype', length:50)->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
