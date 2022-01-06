<?php

namespace App\Http\Controllers;

use App\Models\IntibakBasvuruModel;
use Illuminate\Http\Request;

class IntibakBasvuruController extends Controller
{
    public function intibak_kayit_form(){
        return view('ogrenciler.basvurular.intibak-basvuru');
    }

    public function basvuru_olustur(Request $request){
        IntibakBasvuruModel::create($request->all());
        return redirect()->route('ogrenciler.basvurular.intibak-basvuru');
    }
    //
}