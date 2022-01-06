<?php

namespace App\Http\Controllers;

use App\Models\CapBasvuruModel;
use Illuminate\Http\Request;

class CapBasvuruController extends Controller
{
    public function cap_kayit_form(){
        return view('ogrenciler.basvurular.cap-basvuru');
    }

    public function basvuru_olustur (Request $request) {

        CapBasvuruModel::create($request->all());
        return redirect()->route('ogrenciler.basvurular.cap-basvuru');

    }
    //
}
