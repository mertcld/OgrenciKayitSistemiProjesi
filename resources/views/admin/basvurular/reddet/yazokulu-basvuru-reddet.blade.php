@extends('layouts.app')
@section('content')
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/font/bootstrap-icons.min.css" integrity="sha512-WYaDo1TDjuW+MPatvDarHSfuhFAflHxD87U9RoB4/CSFh24/jzUHfirvuvwGmJq0U7S9ohBXy4Tfmk2UKkp2gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/bootstrap-icons.svg">
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
    <body>


    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-success">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Admin Paneli</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="#" class="nav-link align-middle px-0">
                                <i class="bi bi-house fa-2x"></i> <span class="ms-1 d-none d-sm-inline">Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="bi bi-file-earmark-word-fill fa-2x"></i> <span class="ms-1 d-none d-sm-inline">Yatay Geçiş Başvuruları</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="{{route('admin.basvurular.yatay-basvuru-listesi')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Bekleyen Başvurular</span></a>
                                </li>
                                <li>
                                    <a href="{{route('admin.basvurular.onaylilar.onayli-yatay-liste')}}" class="nav-link px-0"> <span class="d-none d-sm-inline">Onaylanan Başvurular</span></a>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Reddedilen Başvurular</span></a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="bi bi-file-earmark-word-fill fa-2x"></i> <span class="ms-1 d-none d-sm-inline">ÇAP Başvuruları</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Bekleyen Başvurular</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Onaylanan Başvurular</span></a>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Reddedilen Başvurular</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="bi bi-file-earmark-word-fill fa-2x"></i> <span class="ms-1 d-none d-sm-inline">DGS Başvuruları</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Bekleyen Başvurular</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Onaylanan Başvurular</span></a>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Reddedilen Başvurular</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu4" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="bi bi-file-earmark-word-fill fa-2x"></i> <span class="ms-1 d-none d-sm-inline">Yaz Okulu Başvuruları</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu4" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Bekleyen Başvurular</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Onaylanan Başvurular</span></a>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Reddedilen Başvurular</span></a>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="#submenu5" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                                <i class="bi bi-file-earmark-word-fill fa-2x"></i> <span class="ms-1 d-none d-sm-inline">İntibak Başvuruları</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu5" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Bekleyen Başvurular</span></a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Onaylanan Başvurular</span></a>
                                </li>

                                <li>
                                    <a href="#" class="nav-link px-0"> <span class="d-none d-sm-inline">Reddedilen Başvurular</span></a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>

                </div>
            </div>

            <div class="container">
                <div class="mb-2">
                    <form method="post" action="{{route('admin.basvurular.yazokulu-basvuru-listesi')}}">
                        @csrf
                        <div class="container text-center" style="overflow-x: auto;">
                            <h2 style="text-align: center; margin-top: 30px">Yaz Okulu Bekleyen Başvuru Listesi</h2>
                            <table class="table table-bordered border-dark">
                                <thead>
                                <tr>
                                    <th>Belge ID</th>
                                    <th>Ad-Soyad</th>
                                    <th>E-mail</th>
                                    <th>Ev Adresi</th>
                                    <th>İş Adresi</th>
                                    <th>GSM</th>
                                    <th>Fakülte</th>
                                    <th>Bölüm</th>
                                    <th>Öğrenci No</th>
                                    <th>Sınıf</th>
                                    <th>Yaz Okulu Üniversite</th>
                                    <th>Yaz Okulu Fakülte</th>
                                    <th>Yaz Okulu Bölüm</th>
                                    <th>Sorumlu Olunan Dersler</th>
                                    <th>Yaz Okulunda Alınan Dersler</th>
                                    <th>Belge Oluşturulma Zamanı</th>
                                    <th>Başvuru Durumu</th>
                                    <th>İşlemler</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($yazokulubasvurular as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->ad_soyad}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->ev_adresi}}</td>
                                        <td>{{$item->is_adresi}}</td>
                                        <td>{{$item->gsm}}</td>
                                        <td>{{$item->ogrenci_fakulte}}</td>
                                        <td>{{$item->ogrenci_bolum}}</td>
                                        <td>{{$item->ogrenci_no}}</td>
                                        <td>{{$item->ogrenci_sinif}}</td>
                                        <td>{{$item->yaz_okulu_universite}}</td>
                                        <td>{{$item->yaz_okulu_fakulte}}</td>
                                        <td>{{$item->yaz_okulu_bolum}}</td>
                                        <td>{{$item->sorumlu_dersler['ders_adi']}}</td>
                                        <td>{{$item->yaz_okulu_dersler['ders_adi']}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->basvuru_durumu}}</td>

                                        <td>
                                            <a class="btn btn-soft-success" href="#">Başvuruyu Onayla</a>
                                            <a class="btn btn-soft-danger" href="{{route('admin.basvurular.reddet.yazokulu-basvuru-reddet',$item->id)}}">Başvuruyu Reddet</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>






    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="assets/libs/pace-js/pace.min.js"></script>

    <!-- validation init -->
    <script src="assets/js/pages/validation.init.js"></script>

    </body>


@endsection