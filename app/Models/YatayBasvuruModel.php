<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class YatayBasvuruModel extends Model
{
    use HasFactory;

    protected $fillable = ['ad_soyad','basvuru_turu','email','is_adres','tc_no','ad_soyad','gsm','ev_adres','fakulte_ad','bolum_ad','ogrenci_no','ogrenci_sinif','yerlesme_yili','yerlesme_puani','not_gno','ogrenci_ydp','ogrenci_disiplin','basvurulan_fakulte','basvurulan_bolum','belge_transkript','belge_icerik','basvuru_durumu'];
}
