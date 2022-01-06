<?php

namespace App\Http\Controllers;

use App\Models\CapBasvuruModel;
use App\Models\DgsBasvuruModel;
use App\Models\IntibakBasvuruModel;
use App\Models\User;
use App\Models\YatayBasvuruModel;
use App\Models\YazOkuluBasvuruModel;
use Illuminate\Http\Request;
use Illuminate\Testing\Fluent\Concerns\Has;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    //

    public function index() {
        return view('ogrenciler.home');
    }

    
    public function indexx() {
        return view('ogrenciler.ogrenciler-index');
    }
   

//    public function giris_yapan_kullanici($id){
//        $user = User::where('id',$id)->get();
//        return view('ogrenciler.home',compact('user'));
//    }

    public function login_form(){
        return view('ogrenciler.login');
    }

    public function kayit_form(){
        return view('ogrenciler.kayit-ekrani');
    }

    public function sifre_sifirla(){
        return view('ogrenciler.sifremi-unuttum');
    }


    public function giris_yap(){
        if(auth()->attempt(['email'=>request('email'),'password'=>request('password')])){
            request()->session()->regenerate();
            //TODO
           
            if(auth()->user()->isAdmin==true){
                return redirect()->route('admin.index');
            }
              else{
                return redirect()->route('ogrenciler.ogrenciler-index');
              }
             
    
        } else {
            $errors = ['email'=>'Hatalı giris'];
            return back()->withErrors($errors);

        }
    }

    public function oturumu_kapat(){
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('ogrenciler.login');
    }


    public function kaydol()
    {
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(\request('password')),
            'photo' => request('photo'),
        ]);

        auth()->login($user);
        return redirect()->route('ogrenciler.login');
    }


    public function yatay_basvuru_goruntule(){
        $yataybasvurular = YatayBasvuruModel::where('email',auth()->user()->email)->get();
        return view('ogrenciler.basvurular.goruntule.yatay-basvuru-goruntule',compact('yataybasvurular'));
    }

    public function cap_basvuru_goruntule(){
        $capbasvurular = CapBasvuruModel::where('email',auth()->user()->email)->get();
        return view('ogrenciler.basvurular.goruntule.cap-basvuru-goruntule',compact('capbasvurular'));
    }

    public function dgs_basvuru_goruntule(){
        $dgsbasvurular = DgsBasvuruModel::where('email',auth()->user()->email)->get();
        return view('ogrenciler.basvurular.goruntule.dgs-basvuru-goruntule',compact('dgsbasvurular'));
    }

    public function yazokulu_basvuru_goruntule(){
        $yazokulubasvurular = YazOkuluBasvuruModel::where('email',auth()->user()->email)->get();
        return view('ogrenciler.basvurular.goruntule.yazokulu-basvuru-goruntule',compact('yazokulubasvurular'));
    }

    public function intibak_basvuru_goruntule(){
        $intibakbasvurular = IntibakBasvuruModel::where('email',auth()->user()->email)->get();
        return view('ogrenciler.basvurular.goruntule.intibak-basvuru-goruntule',compact('intibakbasvurular'));
    }


}