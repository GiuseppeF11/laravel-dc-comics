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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 500);
            $table->string('description', 2000);
            $table->string('thumb', 2000)->nullable();
            $table->unsignedDecimal('price', 6, 2);
            $table->string('series', 200)->nullable();
            $table->date('sale_date')->nullable();
            $table->string('type',200)->nullable();
            $table->text('artists')->nullable();
            $table->text('writers')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
