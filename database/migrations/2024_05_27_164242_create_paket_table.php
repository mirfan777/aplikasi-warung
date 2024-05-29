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
        Schema::create('paket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_member');
            $table->foreign('id_member')->references('id')->on('members');
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->integer("qty_masuk");
            $table->integer("qty_keluar");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
