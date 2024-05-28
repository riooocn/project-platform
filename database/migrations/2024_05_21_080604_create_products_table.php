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
            $table->id('shoe_id');
            $table->text('name');
            $table->string('brand', 50);
            $table->string('category', 100);
            $table->text('color');
            $table->string('slug')->unique();
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->text('url');
            $table->text('url_1');
            $table->text('url_2');
            $table->text('url_3');
            $table->text('url_4');
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
