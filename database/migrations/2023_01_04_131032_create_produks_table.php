<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('berat_pruduk');
            $table->string('stok_produk');
            $table->string('harga_produk');
            $table->string('ukuran_produk');
            $table->string('warna_produk');
            $table->text('deskirpsi_pendek');
            $table->text('deskirpsi_panjang');
            $table->string('foto_produk');
            $table->string('galeri_produk');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produks');
    }
};
