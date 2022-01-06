<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class DgsBasvuruModel extends Model
{
    use HasFactory;

    protected $fillable = ['ad_soyad','email','tc_no','gsm','ev_adres','is_adres','mezuniyet_myo','mezuniyet_bolum','diploma_notu','tercih_fakulte','tercih_bolum','belge_diploma','belge_transkript','belge_icerik','basvuru_durumu'];
}