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
            $table->string('berat_produk');
            $table->string('kategori');
            $table->string('sub_kategori')->nullable();
            $table->string('sub_subkategori')->nullable();
            $table->string('harga_diskonproduk')->nullable();
            $table->string('harga_asliproduk');
            $table->integer('diskon')->nullable();
            $table->string('galeri_produk');
            $table->string('Promo')->nullable();
            $table->string('Produk_Baru')->nullable();
            $table->string('Baru_Datang')->nullable();
            $table->string('Best_Seller')->nullable();
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
