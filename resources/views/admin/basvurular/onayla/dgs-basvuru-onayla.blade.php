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
    <form method="post" action="{{route('admin.basvurular.dgs-basvuru-listesi')}}">
        @csrf
        <div class="container text-center" style="overflow-x: auto;">
            <h2 style="text-align: center; margin-top: 30px">DGS Başvuru Listesi</h2>
            <table class="table table-bordered border-dark">
                <thead>
                <tr>
                    <th>Belge ID</th>
                    <th>Ad-Soyad</th>
                    <th>E-mail</th>
                    <th>Ev Adresi</th>
                    <th>İş Adresi</th>
                    <th>T.C No</th>
                    <th>GSM</th>
                    <th>Mezun Olunan MYO</th>
                    <th>Mezun Olunan Bölüm</th>
                    <th>Diploma Notu</th>
                    <th>Tercih Edilen Fakülte</th>
                    <th>Tercih Edilen Bölüm</th>
                    <th>Başvuru Durumu</th>
                    <th>Belge Oluşturulma Zamanı</th>
                    <th>İşlemler</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dgsbasvurular as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->ad_soyad}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->ev_adres}}</td>
                        <td>{{$item->is_adres}}</td>
                        <td>{{$item->tc_no}}</td>
                        <td>{{$item->gsm}}</td>
                        <td>{{$item->mezuniyet_myo}}</td>
                        <td>{{$item->mezuniyet_bolum}}</td>
                        <td>{{$item->diploma_notu}}</td>
                        <td>{{$item->tercih_fakulte}}</td>
                        <td>{{$item->tercih_bolum}}</td>
                        <td>{{$item->basvuru_durumu}}</td>
                        <td>{{$item->created_at}}</td>
                        <td>
                            <a class="btn btn-soft-success" href="{{route('admin.basvurular.dgs-basvuru-listesi',$item->id)}}">Başvuruyu Onayla</a>
                            <a class="btn btn-soft-danger" href="#">Başvuruyu Reddet</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </form>

@endsection