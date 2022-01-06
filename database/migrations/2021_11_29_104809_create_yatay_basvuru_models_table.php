<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYatayBasvuruModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yatay_basvuru_models', function (Blueprint $table) {
            $table->id();
            $table->string('basvuru_turu');
            $table->string('email');
            $table->string('is_adres');
            $table->string('tc_no',11);
            $table->string('ad_soyad');
            $table->string('gsm',11);
            $table->string('ev_adres');
            $table->string('fakulte_ad');
            $table->string('bolum_ad');
            $table->string('ogrenci_no');
            $table->string('ogrenci_sinif');
            $table->string('yerlesme_yili');
            $table->string('yerlesme_puani');
            $table->string('not_gno');
            $table->string('ogrenci_ydp');
            $table->string('ogrenci_disiplin');
            $table->string('basvurulan_fakulte');
            $table->string('basvurulan_bolum');
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
        Schema::dropIfExists('yatay_basvuru_models');
    }
}
