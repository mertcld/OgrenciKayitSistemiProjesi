<?php

namespace App\Http\Controllers;

use App\Models\YatayBasvuruModel;
use Illuminate\Http\Request;

class YatayBasvuruController extends Controller
{

    public function yatay_kayit_form (){
        $yataybasvurular = YatayBasvuruModel::all();
        return view('ogrenciler.basvurular.yatay-basvuru',compact('yataybasvurular'));
    }

    public function basvuru_olustur (Request $request) {

        YatayBasvuruModel::create($request->all());
        return redirect()->route('ogrenciler.basvurular.yatay-basvuru');

    }



    //
}
