<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDgsBasvuruModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dgs_basvuru_models', function (Blueprint $table) {
            $table->id();
            $table->string('ad_soyad');
            $table->string('email');
            $table->string('tc_no');
            $table->string('gsm');
            $table->string('ev_adres');
            $table->string('is_adres');
            $table->string('mezuniyet_myo');
            $table->string('mezuniyet_bolum');
            $table->string('diploma_notu');
            $table->string('tercih_fakulte');
            $table->string('tercih_bolum');
            $table->string('belge_diploma');
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
        Schema::dropIfExists('dgs_basvuru_models');
    }
}