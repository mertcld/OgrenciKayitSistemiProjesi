<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYazOkuluBasvuruModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yaz_okulu_basvuru_models', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('email');
            $table->string('tc_no');
            $table->string('gsm');
            $table->string('ev_adresi');
            $table->string('is_adresi');
            $table->string('ogrenci_no');
            $table->string('ogrenci_sinif');
            $table->string('ogrenci_fakulte');
            $table->string('ogrenci_bolum');
            $table->string('yaz_okulu_universite');
            $table->string('yaz_okulu_fakulte');
            $table->string('yaz_okulu_bolum');
            $table->json('sorumlu_dersler');
            $table->json('yaz_okulu_dersler');
            $table->string('belge_puan');
            $table->string('belge_transkript');
            $table->string('belge_icerik');
            $table->string('basvuru_durumu')->default('onay_bekliyor');



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
        Schema::dropIfExists('yaz_okulu_basvuru_models');
    }
}
