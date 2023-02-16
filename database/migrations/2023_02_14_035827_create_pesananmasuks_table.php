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
        Schema::create('pesananmasuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('payment_id');
            //intabel
            $table->bigInteger('idpesanan');
            $table->string('TotalHarga');
            //alamat pengiriman
            $table->string('NamaPenerima')->nullable();
            $table->bigInteger('NoTelp')->nullable();
            $table->string('Alamat_lengkap')->nullable();
            $table->string('ekspedisi');
            $table->string('PesanDariPembeli')->nullable();
            $table->string('OngkosKirim');
            $table->string('HargaProdukPembayaran');
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
        Schema::dropIfExists('pesananmasuk');
    }
};
