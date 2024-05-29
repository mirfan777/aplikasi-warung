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
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->string("nama");
            $table->unsignedBigInteger('satuan');
            $table->foreign('satuan')->references('id')->on('satuan_barang');
            $table->bigInteger("cost");
            $table->bigInteger("retail");
            $table->bigInteger("setoran");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
