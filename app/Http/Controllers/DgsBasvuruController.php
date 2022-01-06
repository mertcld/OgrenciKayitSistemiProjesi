<?php

namespace App\Http\Controllers;

use App\Models\DgsBasvuruModel;
use Illuminate\Http\Request;

class DgsBasvuruController extends Controller
{
    public function dgs_kayit_form(){
        return view('ogrenciler.basvurular.dgs-basvuru');
    }
    //

    public function basvuru_olustur(Request $request){
        DgsBasvuruModel::create($request->all());
        return redirect()->route('ogrenciler.basvurular.dgs-basvuru');
    }
}