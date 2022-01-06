<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOgrenciModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ogrenci_models', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('email')->unique();
            $table->string('tc_no',11)->unique();
            $table->string('dogum_tarihi');
            $table->string('gsm',11);
            $table->string('ev_adres');
            $table->string('is_adres');
            $table->string('fakulte_ad');
            $table->string('bolum_ad');
            $table->string('ogrenci_no',9);
            $table->string('ogrenci_sinif');
            $table->string('sifre');
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
        Schema::dropIfExists('ogrenci_models');
    }
}
