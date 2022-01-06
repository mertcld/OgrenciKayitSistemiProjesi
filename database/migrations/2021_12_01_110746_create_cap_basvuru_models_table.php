<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapBasvuruModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cap_basvuru_models', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('email');
            $table->string('tc_no',11);
            $table->string('gsm',11);
            $table->string('ev_adresi');
            $table->string('is_adresi');
            $table->string('fakulte_ad');
            $table->string('bolum_ad');
            $table->string('ogrenci_no');
            $table->string('ogrenci_yariyil');
            $table->string('ogrenci_gno');
            $table->string('ogrenci_disiplin');
            $table->string('cap_fakulte');
            $table->string('cap_bolum');
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
        Schema::dropIfExists('cap_basvuru_models');
    }
}
