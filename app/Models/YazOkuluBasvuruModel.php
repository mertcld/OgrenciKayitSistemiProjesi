<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class YazOkuluBasvuruModel extends Model
{
    protected $fillable = ['ad_soyad','email','tc_no,','gsm','ev_adresi','is_adresi','ad_soyad','ogrenci_no','ogrenci_sinif','ogrenci_fakulte','ogrenci_bolum','yaz_okulu_universite','yaz_okulu_fakulte','yaz_okulu_bolum','sorumlu_dersler','yaz_okulu_dersler','belge_puan','belge_transkript','belge_icerik','basvuru_durumu'];
    use HasFactory;
}