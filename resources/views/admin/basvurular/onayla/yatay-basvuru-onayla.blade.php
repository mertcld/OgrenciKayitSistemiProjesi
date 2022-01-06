@extends('layouts.app')
@section('content')
    <head>
        <style>
            table {
                margin-top: 35px;
                border-collapse: collapse;
                border-spacing: 0;
                width: 100%;
            }

            th,td {
                text-align: left;
                padding: 8px;
            }
        </style>
    </head>
    <form method="post" action="{{route('admin.basvurular.yatay-basvuru-listesi')}}">
         @csrf
        <div class="container text-center" style="overflow-x: auto;">
            <h2 style="text-align: center; margin-top: 30px">Yatay Geçiş Başvuru Listesi</h2>
            <table class="table table-bordered border-dark">
                <thead>
                <tr>
                    <th>Belge ID</th>
                    <th>Başvuru Türü</th>
                    <th>Ad-Soyad</th>
                    <th>E-mail</th>
                    <th>Ev Adresi</th>
                    <th>İş Adresi</th>
                    <th>T.C No</th>
                    <th>GSM</th>
                    <th>Fakülte</th>
                    <th>Bölüm</th>
                    <th>Öğrenci No</th>
                    <th>Sınıf</th>
                    <th>Not Ortalaması</th>
                    <th>Başvurulan Fakülte</th>
                    <th>Başvurulan Bölüm</th>
                    <th>Başvuru Durumu</th>
                    <th>Belge Oluşturulma Zamanı</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($yataybasvurular as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->basvuru_turu}}</td>
                        <td>{{$item->ad_soyad}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->ev_adres}}</td>
                        <td>{{$item->is_adres}}</td>
                        <td>{{$item->tc_no}}</td>
                        <td>{{$item->gsm}}</td>
                        <td>{{$item->fakulte_ad}}</td>
                        <td>{{$item->bolum_ad}}</td>
                        <td>{{$item->ogrenci_no}}</td>
                        <td>{{$item->ogrenci_sinif}}</td>
                        <td>{{$item->not_gno}}</td>
                        <td>{{$item->basvurulan_fakulte}}</td>
                        <td>{{$item->basvurulan_bolum}}</td>
                        <td>{{$item->basvuru_durumu}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a class="btn btn-soft-success" href="{{route('admin.basvurular.yatay-basvuru-listesi',$item->id)}}">Başvuruyu Onayla</a>
                            <a class="btn btn-soft-danger" href="#">Başvuruyu Reddet</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </form>

@endsection
