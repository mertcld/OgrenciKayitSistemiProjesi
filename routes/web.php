<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CapBasvuruController;
use App\Http\Controllers\DgsBasvuruController;
use App\Http\Controllers\IntibakBasvuruController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OgrenciController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YatayBasvuruController;
use App\Http\Controllers\YazOkuluBasvuruController;
use Illuminate\Support\Facades\Route;
use Kreait\Firebase\Auth;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//
// Admin Route

// admin onayli liste
Route::get('/onayli-yazokulu-liste',[AdminController::class,'yazokulu_basvuru_onayli_liste'])->name('admin.basvurular.onaylilar.onayli-yazokulu-liste');
Route::get('/onayli-intibak-liste',[AdminController::class,'intibak_basvuru_onayli_liste'])->name('admin.basvurular.onaylilar.onayli-intibak-liste');
Route::get('/onayli-yatay-liste',[AdminController::class,'yatay_basvuru_onayli_liste'])->name('admin.basvurular.onaylilar.onayli-yatay-liste');
Route::get('/onayli-dgs-liste',[AdminController::class,'dgs_basvuru_onayli_liste'])->name('admin.basvurular.onaylilar.onayli-dgs-liste');
Route::get('/onayli-cap-liste',[AdminController::class,'cap_basvuru_onayli_liste'])->name('admin.basvurular.onaylilar.onayli-cap-liste');


// admin bekleyen liste
Route::get('/intibak-basvuru-listesi',[AdminController::class,'intibak_basvuru_liste'])->name('admin.basvurular.intibak-basvuru-listesi');
Route::get('/yazokulu-basvuru-listesi',[AdminController::class,'yazokulu_basvuru_liste'])->name('admin.basvurular.yazokulu-basvuru-listesi');
Route::get('/dgs-basvuru-listesi',[AdminController::class,'dgs_basvuru_liste'])->name('admin.basvurular.dgs-basvuru-listesi');
Route::get('/cap-basvuru-listesi',[AdminController::class,'cap_basvuru_liste'])->name('admin.basvurular.cap-basvuru-listesi');
Route::get('/yatay-basvuru-listesi',[AdminController::class,'yatay_basvuru_liste'])->name('admin.basvurular.yatay-basvuru-listesi');

// admin reddedilen liste
Route::get('/reddedilen-cap-liste',[AdminController::class,'cap_basvuru_reddedilen_liste'])->name('admin.basvurular.reddedilenler.reddedilen-cap-liste');
Route::get('/reddedilen-yatay-liste',[AdminController::class,'yatay_basvuru_reddedilen_liste'])->name('admin.basvurular.reddedilenler.reddedilen-yatay-liste');
Route::get('/reddedilen-dgs-liste',[AdminController::class,'dgs_basvuru_reddedilen_liste'])->name('admin.basvurular.reddedilenler.reddedilen-dgs-liste');
Route::get('/reddedilen-yazokulu-liste',[AdminController::class,'yazokulu_basvuru_reddedilen_liste'])->name('admin.basvurular.reddedilenler.reddedilen-yazokulu-liste');
Route::get('/reddedilen-intibak-liste',[AdminController::class,'intibak_basvuru_reddedilen_liste'])->name('admin.basvurular.reddedilenler.reddedilen-intibak-liste');

// admin index
Route::get('/index',[AdminController::class,'index']);
Route::get('/index',[AdminController::class,'index'])->name('admin.index');



// admin basvuru onayla
Route::get('/dgs-basvuru-onayla/{id}',[AdminController::class,'dgs_basvuruyu_onayla'])->name('admin.basvurular.onayla.dgs-basvuru-onayla');
Route::post('/dgs-basvuru-onayla/{id}',[AdminController::class,'dgs_basvuruyu_onayla'])->name('admin.basvurular.onayla.dgs-basvuru-onayla');
Route::get('/intibak-basvuru-onayla/{id}',[AdminController::class,'intibak_basvuruyu_onayla'])->name('admin.basvurular.onayla.intibak-basvuru-onayla');
Route::post('/intibak-basvuru-onayla/{id}',[AdminController::class,'intibak_basvuruyu_onayla'])->name('admin.basvurular.onayla.intibak-basvuru-onayla');
Route::post('/yatay-basvuru-onayla/{id}',[AdminController::class,'yatay_basvuruyu_onayla'])->name('admin.basvurular.onayla.yatay-basvuru-onayla');
Route::get('/yatay-basvuru-onayla/{id}',[AdminController::class,'yatay_basvuruyu_onayla'])->name('admin.basvurular.onayla.yatay-basvuru-onayla');
Route::get('/yazokulu-basvuru-onayla/{id}',[AdminController::class,'yazokulu_basvuruyu_onayla'])->name('admin.basvurular.onayla.yazokulu-basvuru-onayla');
Route::post('/yazokulu-basvuru-onayla/{id}',[AdminController::class,'yazokulu_basvuruyu_onayla'])->name('admin.basvurular.onayla.yazokulu-basvuru-onayla');
Route::get('/cap-basvuru-onayla/{id}',[AdminController::class,'cap_basvuruyu_onayla'])->name('admin.basvurular.onayla.cap-basvuru-onayla');
Route::post('/cap-basvuru-onayla/{id}',[AdminController::class,'cap_basvuruyu_onayla'])->name('admin.basvurular.onayla.cap-basvuru-onayla');

// admin basvuru reddet
Route::get('/dgs-basvuru-reddet/{id}',[AdminController::class,'dgs_basvuruyu_reddet'])->name('admin.basvurular.reddet.dgs-basvuru-reddet');
Route::post('/dgs-basvuru-reddet/{id}',[AdminController::class,'dgs_basvuruyu_reddet'])->name('admin.basvurular.reddet.dgs-basvuru-reddet');
Route::get('/intibak-basvuru-reddet/{id}',[AdminController::class,'intibak_basvuruyu_reddet'])->name('admin.basvurular.reddet.intibak-basvuru-reddet');
Route::post('/intibak-basvuru-reddet/{id}',[AdminController::class,'intibak_basvuruyu_reddet'])->name('admin.basvurular.reddet.intibak-basvuru-reddet');
Route::get('/yazokulu-basvuru-reddet/{id}',[AdminController::class,'yazokulu_basvuruyu_reddet'])->name('admin.basvurular.reddet.yazokulu-basvuru-reddet');
Route::post('/yazokulu-basvuru-reddet/{id}',[AdminController::class,'yazokulu_basvuruyu_reddet'])->name('admin.basvurular.reddet.yazokulu-basvuru-reddet');
Route::get('/yatay-basvuru-reddet/{id}',[AdminController::class,'yatay_basvuruyu_reddet'])->name('admin.basvurular.reddet.yatay-basvuru-reddet');
Route::post('/yatay-basvuru-reddet/{id}',[AdminController::class,'yatay_basvuruyu_reddet'])->name('admin.basvurular.reddet.yatay-basvuru-reddet');
Route::get('/cap-basvuru-reddet/{id}',[AdminController::class,'cap_basvuruyu_reddet'])->name('admin.basvurular.reddet.cap-basvuru-reddet');
Route::post('/cap-basvuru-reddet/{id}',[AdminController::class,'cap_basvuruyu_reddet'])->name('admin.basvurular.reddet.cap-basvuru-reddet');

// ogrenci kayit ve login ekranlari

Route::get('/',[UserController::class,'login_form'])->name('login');
Route::post('/login',[UserController::class,'giris_yap'])->name('ogrenciler.login');
Route::get('/kayit-ekrani',[UserController::class,'kayit_form'])->name('ogrenciler.kayit-ekrani');
Route::get('/login',[UserController::class,'login_form'])->name('ogrenciler.login');
Route::get('/home',[UserController::class,'index'])->name('ogrenciler.home');
Route::post('/home',[UserController::class,'oturumu_kapat'])->name('ogrenciler.home');

Route::get('/ogrenciler-index',[UserController::class,'indexx'])->name('ogrenciler.ogrenciler-index');



Route::get('/sifremi-unuttum',[UserController::class,'sifre_sifirla'])->name('ogrenciler.sifremi-unuttum');
// Route::post('/sifremi-unuttum',[UserController::class,'oturumu_kapat'])->name('ogrenciler.sifremi-unuttum');

// ogrenci basvuru ekranlari

Route::get('/yatay-basvuru',[YatayBasvuruController::class,'yatay_kayit_form'])->name('ogrenciler.basvurular.yatay-basvuru');
Route::get('/cap-basvuru',[CapBasvuruController::class,'cap_kayit_form'])->name('ogrenciler.basvurular.cap-basvuru');
Route::get('/dgs-basvuru',[DgsBasvuruController::class,'dgs_kayit_form'])->name('ogrenciler.basvurular.dgs-basvuru');
Route::get('/yazokulu-basvuru',[YazOkuluBasvuruController::class,'yaz_okulu_kayit_form'])->name('ogrenciler.basvurular.yazokulu-basvuru');
Route::get('/intibak-basvuru',[IntibakBasvuruController::class,'intibak_kayit_form'])->name('ogrenciler.basvurular.intibak-basvuru');
Route::post('/intibak-basvuru',[IntibakBasvuruController::class,'basvuru_olustur'])->name('ogrenciler.basvurular.intibak-basvuru');
Route::post('/dgs-basvuru',[DgsBasvuruController::class,'basvuru_olustur'])->name('ogrenciler.basvurular.dgs-basvuru');
Route::post('/yazokulu-basvuru',[YazOkuluBasvuruController::class,'basvuru_olustur'])->name('ogrenciler.basvurular.yazokulu-basvuru');
Route::post('/cap-basvuru',[CapBasvuruController::class,'basvuru_olustur'])->name('ogrenciler.basvurular.cap-basvuru');
Route::post('/yatay-basvuru',[YatayBasvuruController::class,'basvuru_olustur'])->name('ogrenciler.basvurular.yatay-basvuru');
Route::post('/kayit-ekrani',[UserController::class,'kaydol'])->name('ogrenciler.kayit-ekrani');



// ogrenci basvuru goruntuleme ekranlari

Route::get('/yatay-basvuru-goruntule',[UserController::class,'yatay_basvuru_goruntule'])->name('ogrenciler.basvurular.goruntule.yatay-basvuru-goruntule');
Route::get('/cap-basvuru-goruntule',[UserController::class,'cap_basvuru_goruntule'])->name('ogrenciler.basvurular.goruntule.cap-basvuru-goruntule');
Route::get('/dgs-basvuru-goruntule',[UserController::class,'dgs_basvuru_goruntule'])->name('ogrenciler.basvurular.goruntule.dgs-basvuru-goruntule');
Route::get('/yazokulu-basvuru-goruntule',[UserController::class,'yazokulu_basvuru_goruntule'])->name('ogrenciler.basvurular.goruntule.yazokulu-basvuru-goruntule');
Route::get('/intibak-basvuru-goruntule',[UserController::class,'intibak_basvuru_goruntule'])->name('ogrenciler.basvurular.goruntule.intibak-basvuru-goruntule');


//Route::post('/login/',[LoginController::class,'login'])->name('ogrenciler.login');
//Route::get('/insert',function (){
//    $stuRef = app('firebase.firestore')->database()->collection('ogrenciler')->newDocument();
//    $stuRef->set([
//      'ad' => 'deneme',
//        'soyad'=> 'deneme1',
//        'yas' => 19
//    ]);
//});