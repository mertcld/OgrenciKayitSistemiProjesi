<?php

namespace App\Http\Controllers;

use App\Models\YazOkuluBasvuruModel;
use Illuminate\Http\Request;

class YazOkuluBasvuruController extends Controller
{
    public function yaz_okulu_kayit_form(){
        return view('ogrenciler.basvurular.yazokulu-basvuru');
    }
    //

    public function basvuru_olustur(Request $request){

        YazOkuluBasvuruModel::create($request->all());
        return redirect()->route('ogrenciler.basvurular.yazokulu-basvuru');
    }
}
