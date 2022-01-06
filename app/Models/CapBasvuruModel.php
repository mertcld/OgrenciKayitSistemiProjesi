<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class CapBasvuruModel extends Model
{
    use HasFactory;
    protected $fillable = ['ad_soyad','email','tc_no','gsm','ev_adresi','is_adresi','fakulte_ad','bolum_ad','ogrenci_no','ogrenci_yariyil','ogrenci_gno','ogrenci_disiplin','cap_fakulte','cap_bolum','belge_transkript','belge_icerik','basvuru_durumu'];
}
