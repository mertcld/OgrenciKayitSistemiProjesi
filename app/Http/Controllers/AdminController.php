<?php

namespace App\Http\Controllers;

use App\Models\CapBasvuruModel;
use App\Models\DgsBasvuruModel;
use App\Models\IntibakBasvuruModel;
use App\Models\YatayBasvuruModel;
use App\Models\YazOkuluBasvuruModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function intibak_basvuru_liste(){
        $intibakbasvurular = IntibakBasvuruModel::where('basvuru_durumu','onay_bekliyor')->get();
        return view('admin.basvurular.intibak-basvuru-listesi',compact('intibakbasvurular'));
    }

    public function intibak_basvuru_onayli_liste(){
        $intibakbasvurular =IntibakBasvuruModel::where('basvuru_durumu','basvuru_onaylandi')->get();
        return view('admin.basvurular.onaylilar.onayli-intibak-liste',compact('intibakbasvurular'));
    }

    public function intibak_basvuru_reddedilen_liste(){
        $intibakbasvurular =IntibakBasvuruModel::where('basvuru_durumu','basvuru_reddedildi')->get();
        return view('admin.basvurular.reddedilenler.reddedilen-intibak-liste',compact('intibakbasvurular'));
    }

    public function intibak_basvuruyu_onayla(Request $request,$id){

        $intibakbasvurular = IntibakBasvuruModel::find($id);
        $intibakbasvurular->update(['basvuru_durumu'=>'basvuru_onaylandi'],$request->all());
        return redirect()->route('admin.basvurular.intibak-basvuru-listesi');

    }

    public function intibak_basvuruyu_reddet(Request $request,$id){

        $intibakbasvurular = IntibakBasvuruModel::find($id);
        $intibakbasvurular->update(['basvuru_durumu'=>'basvuru_reddedildi'],$request->all());
        return redirect()->route('admin.basvurular.intibak-basvuru-listesi');
    }


    public function yazokulu_basvuru_liste(){
        $yazokulubasvurular = YazOkuluBasvuruModel::where('basvuru_durumu','onay_bekliyor')->get();
        return view('admin.basvurular.yazokulu-basvuru-listesi',compact('yazokulubasvurular'));
    }

    public function yazokulu_basvuru_onayli_liste(){
        $yazokulubasvurular =YazOkuluBasvuruModel::where('basvuru_durumu','basvuru_onaylandi')->get();
        return view('admin.basvurular.onaylilar.onayli-yazokulu-liste',compact('yazokulubasvurular'));
    }

    public function yazokulu_basvuru_reddedilen_liste(){
        $yazokulubasvurular =YazOkuluBasvuruModel::where('basvuru_durumu','basvuru_reddedildi')->get();
        return view('admin.basvurular.reddedilenler.reddedilen-yazokulu-liste',compact('yazokulubasvurular'));
    }

    public function yazokulu_basvuruyu_onayla(Request $request,$id){
         $yazokulubasvurular = YazOkuluBasvuruModel::find($id);
        $yazokulubasvurular->update(['basvuru_durumu'=>'basvuru_onaylandi'],$request->all());
        return redirect()->route('admin.basvurular.yazokulu-basvuru-listesi');
    }
    public function yazokulu_basvuruyu_reddet(Request $request,$id){
        $yazokulubasvurular = YazOkuluBasvuruModel::find($id);
        $yazokulubasvurular->update(['basvuru_durumu'=>'basvuru_reddedildi'],$request->all());
        return redirect()->route('admin.basvurular.yazokulu-basvuru-listesi');
    }


    public function yatay_basvuru_liste(){
          $yataybasvurular = YatayBasvuruModel::where('basvuru_durumu','onay_bekliyor')->get();
          return view('admin.basvurular.yatay-basvuru-listesi',compact('yataybasvurular'));

    }

    public function dgs_basvuru_liste(){
        $dgsbasvurular = DgsBasvuruModel::where('basvuru_durumu','onay_bekliyor')->get();
        return view('admin.basvurular.dgs-basvuru-listesi',compact('dgsbasvurular'));
    }

    public function dgs_basvuruyu_onayla(Request $request,$id){
        $dgsbasvurular = DgsBasvuruModel::find($id);
        $dgsbasvurular->update(['basvuru_durumu'=>'basvuru_onaylandi'],$request->all());
        return redirect()->route('admin.basvurular.dgs-basvuru-listesi');
    }

    public function dgs_basvuruyu_reddet(Request $request,$id){
        $dgsbasvurular = DgsBasvuruModel::find($id);
        $dgsbasvurular->update(['basvuru_durumu'=>'basvuru_reddedildi'],$request->all());
        return redirect()->route('admin.basvurular.dgs-basvuru-listesi');
    }

    public function dgs_basvuru_onayli_liste(){
        $dgsbasvurular =DgsBasvuruModel::where('basvuru_durumu','basvuru_onaylandi')->get();
        return view('admin.basvurular.onaylilar.onayli-dgs-liste',compact('dgsbasvurular'));
    }

    public function dgs_basvuru_reddedilen_liste(){
        $dgsbasvurular =DgsBasvuruModel::where('basvuru_durumu','basvuru_reddedildi')->get();
        return view('admin.basvurular.reddedilenler.reddedilen-dgs-liste',compact('dgsbasvurular'));
    }


    public function yatay_basvuru_onayli_liste(){
        $yataybasvurular = YatayBasvuruModel::where('basvuru_durumu','basvuru_onaylandi')->get();
         return view('admin.basvurular.onaylilar.onayli-yatay-liste',compact('yataybasvurular'));
    }

    public function yatay_basvuru_reddedilen_liste(){
        $yataybasvurular = YatayBasvuruModel::where('basvuru_durumu','basvuru_reddedildi')->get();
        return view('admin.basvurular.reddedilenler.reddedilen-yatay-liste',compact('yataybasvurular'));

    }

    public function yatay_basvuruyu_onayla (Request $request,$id){
        $yataybasvurular = YatayBasvuruModel::find($id);
        $yataybasvurular->update(['basvuru_durumu'=>'basvuru_onaylandi'],$request->all());
        return redirect()->route('admin.basvurular.yatay-basvuru-listesi');
    }

    public function yatay_basvuruyu_reddet (Request $request,$id){
        $yataybasvurular = YatayBasvuruModel::find($id);
        $yataybasvurular->update(['basvuru_durumu'=>'basvuru_reddedildi'],$request->all());
        return redirect()->route('admin.basvurular.yatay-basvuru-listesi');
    }


    public function cap_basvuru_liste(){
        $capbasvurular = CapBasvuruModel::where('basvuru_durumu','onay_bekliyor')->get();
        return view('admin.basvurular.cap-basvuru-listesi',compact('capbasvurular'));

    }

    public function cap_basvuruyu_onayla (Request $request,$id){
        $capbasvurular = CapBasvuruModel::find($id);
        $capbasvurular->update(['basvuru_durumu'=>'basvuru_onaylandi'],$request->all());
        return redirect()->route('admin.basvurular.cap-basvuru-listesi');
    }

    public function cap_basvuruyu_reddet (Request $request,$id){
        $capbasvurular = CapBasvuruModel::find($id);
        $capbasvurular->update(['basvuru_durumu'=>'basvuru_reddedildi'],$request->all());
        return redirect()->route('admin.basvurular.cap-basvuru-listesi');
    }

    public function cap_basvuru_onayli_liste(){
        $capbasvurular = CapBasvuruModel::where('basvuru_durumu','basvuru_onaylandi')->get();
        return view('admin.basvurular.onaylilar.onayli-cap-liste',compact('capbasvurular'));
    }

    public function cap_basvuru_reddedilen_liste(){
        $capbasvurular = CapBasvuruModel::where('basvuru_durumu','basvuru_reddedildi')->get();
        return view('admin.basvurular.reddedilenler.reddedilen-cap-liste',compact('capbasvurular'));

    }


    public function index () {
        return view('admin.index');
    }



    //
}