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
        Schema::create('datawilayahkabupaten', function (Blueprint $table) {
            $table->id("city_id");
            $table->string('province_id');
            $table->string('province');
            $table->string('type');
            $table->string('city_name');
            $table->string('postal_code');
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
        Schema::dropIfExists('datawilayahkabupaten');
    }
};
