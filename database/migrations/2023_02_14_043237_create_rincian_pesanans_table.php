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
        Schema::create('rincian_pesanan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pesanan_id');
            $table->string('FotoProduk');
            $table->string('NamaProduk');
            $table->string('UkuranProduk');
            $table->string('WarnaProduk');
            $table->string('BeratProduk');
            $table->string('QuantityProduk');
            $table->string('TotalHargaProduk');
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
        Schema::dropIfExists('rincian_pesanan');
    }
};
