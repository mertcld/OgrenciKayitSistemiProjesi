<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntibakBasvuruModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intibak_basvuru_models', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('email');
            $table->string('tc_no');
            $table->string('gsm');
            $table->string('ev_adres');
            $table->string('is_adres');
            $table->string('ogrenci_no');
            $table->string('ogrenci_fakulte');
            $table->string('ogrenci_bolum');
            $table->string('intibak_fakulte');
            $table->string('intibak_universite');
            $table->string('intibak_bolum');
            $table->json('alinan_dersler');
            $table->json('sorumlu_dersler');
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
        Schema::dropIfExists('intibak_basvuru_models');
    }
}