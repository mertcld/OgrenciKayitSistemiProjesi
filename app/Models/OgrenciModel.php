<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class OgrenciModel extends Model
{

    use HasFactory;

    protected $fillable = [
        'ad_soyad',
        'email',
        'tc_no',
        'dogum_tarihi',
        'gsm',
        'ev_adres',
        'is_adres',
        'fakulte_ad',
        'bolum_ad',
        'ogrenci_no',
        'ogrenci_sinif',
        'sifre'
    ];


}
