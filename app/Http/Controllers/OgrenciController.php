<?php

namespace App\Http\Controllers;

use App\Models\OgrenciModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use Jenssegers\Mongodb\Auth as auth;
class OgrenciController extends Controller
{
    public function login_form(){
        return view('ogrenciler.login');
    }
    public function kayit_form(){
        return view('ogrenciler.kayit-ekrani');
    }



    //

}