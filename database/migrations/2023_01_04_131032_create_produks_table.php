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
            $table->string('merk_produk');
            $table->string('nama_produk');
            $table->string('ukuran_produk');
            $table->string('warna_produk');
            $table->string('berat_produk');
            $table->string('kategori');
            $table->string('sub_kategori');
            $table->string('sub_subkategori');
            $table->string('stok_produk');
            $table->string('harga_diskonproduk')->nullable();
            $table->string('harga_asliproduk');
            $table->integer('diskon')->nullable();
            $table->string('galeri_produk');
            $table->string('status_produk');
            $table->text('deskirpsi_pendek');
            $table->text('deskirpsi_panjang');
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
