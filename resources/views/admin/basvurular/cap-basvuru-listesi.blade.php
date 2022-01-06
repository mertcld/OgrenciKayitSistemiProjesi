<!doctype html>
<html lang="tr">


<head>

    <meta charset="utf-8" />
    <title>Admin | Çap Başvuru Listesi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
 <!-- DataTables -->
 <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="/css/preloader.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="/css/bootstrap.min.css" id="app-style" rel="stylesheet" type="text/css" />
  
    <link href="/css/icons.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>

<body>

    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="/index" class="logo logo-dark">
                            <span class="logo-sm">
                                    <img src="/img/logo.png" alt="" height="24">
                                </span>
                            <span class="logo-lg">
                                    <img src="/img/logo.png" alt="" height="24"> <span class="logo-txt">Koü</span>
                            </span>
                        </a>

                        <a href="/index" class="logo logo-light">
                            <span class="logo-sm">
                                    <img src="/img/logo.png" alt="" height="24">
                                </span>
                            <span class="logo-lg">
                                    <img src="/img/logo.png" alt="" height="24"> <span class="logo-txt">Koü</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Ara...">
                            <button class="btn btn-success" type="button"><i class="fas fa-search align-middle"></i></button>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i data-feather="search" class="icon-lg"></i>
                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Ara ..." aria-label="Sonuçları Ara">

                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i class=" fas fa-moon icon-lg layout-mode-dark"></i>
                                <i class=" fas fa-sun icon-lg layout-mode-light"></i>
                            </button>
                    </div>

                  

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i  class="fas fa-bell icon-lg"></i>
                                <span class="badge bg-danger rounded-pill">2</span>
                            </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                            <div class="p-3">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <h6 class="m-0"> Bildirimler </h6>
                                    </div>
                                    <div class="col-auto">
                                        <a href="#!" class="small text-reset text-decoration-underline"> Okunmamış (2)</a>
                                    </div>
                                </div>
                            </div>
                            <div data-simplebar style="max-height: 230px;">
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="/assets/images/users/avatar-1.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Mert Bulut</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">Yatay geçiş başvurusu yaptı.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>1 saat önce</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                               
                                <a href="#!" class="text-reset notification-item">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <img src="/assets/images/users/avatar-5.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                        </div>
                                        <div class="flex-grow-1">
                                            <h6 class="mb-1">Emre Alkan</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">Dgs başvurusu yaptı.</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span>4 saat önce</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                               
                            </div>
                            <div class="p-2 border-top d-grid">
                                <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                    <i class="mdi mdi-arrow-right-circle me-1"></i> <span>Daha Fazlasını Gör..</span>
                                </a>
                            </div>
                        </div>
                    </div>

                 

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-soft-light border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="
                                /assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                    <span class="d-none d-xl-inline-block ms-1 fw-medium">{{auth()->user()->name}}</span>
                                 
                            </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <a class="dropdown-item" href="{{route('ogrenciler.home')}}"><i class="fas fa-user-alt font-size-16 align-middle me-1"></i> Profil</a>
                             <div class="dropdown-divider"></div>
                         <a class="dropdown-item" href="/login"><i class="fas fa-sign-out-alt font-size-16 align-middle me-1"></i> Çıkış Yap</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>

     
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

             
                <div id="sidebar-menu">
                
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>

                        <li>
                            <a href="/index">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Anasayfa</span>
                            </a>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Yatay Geçiş Başvuruları</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li >
                                    <a href="{{route('admin.basvurular.yatay-basvuru-listesi')}}">
                                        <span data-key="t-calendar">Bekleyen Başvurular</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.basvurular.onaylilar.onayli-yatay-liste')}}">
                                        <span data-key="t-check">Onaylanan Başvurular</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('admin.basvurular.reddedilenler.reddedilen-yatay-liste')}}" >
                                        <span data-key="t-email">Reddedilen Başvurular</span>
                                    </a>
                                   
                                </li>
                              
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="users"></i>
                                <span data-key="t-authentication">ÇAP Başvuruları</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li class="active show"><a href="{{route('admin.basvurular.cap-basvuru-listesi')}}" >Bekleyen Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.onaylilar.onayli-cap-liste')}}" >Onaylanan Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.reddedilenler.reddedilen-cap-liste')}}" data-key="t-recover-password">Reddedilen Başvurular</a></li>
                                </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="file-text"></i>
                                <span data-key="t-pages">DGS Başvuruları</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.basvurular.dgs-basvuru-listesi')}}" data-key="t-login">Bekleyen Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.onaylilar.onayli-dgs-liste')}}" data-key="t-register">Onaylanan Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.reddedilenler.reddedilen-dgs-liste')}}" data-key="t-recover-password">Reddedilen Başvurular</a></li>
                            </ul>
                        </li>
                       <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="file-text"></i>
                                <span data-key="t-pages">Yaz Okulu Başvuruları</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.basvurular.yazokulu-basvuru-listesi')}}" data-key="t-login">Bekleyen Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.onaylilar.onayli-yazokulu-liste')}}" data-key="t-register">Onaylanan Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.reddedilenler.reddedilen-yazokulu-liste')}}" data-key="t-recover-password">Reddedilen Başvurular</a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="file-text"></i>
                                <span data-key="t-pages">İntibak Başvuruları</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{route('admin.basvurular.intibak-basvuru-listesi')}}" data-key="t-login">Bekleyen Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.onaylilar.onayli-intibak-liste')}}" data-key="t-register">Onaylanan Başvurular</a></li>
                                <li><a href="{{route('admin.basvurular.reddedilenler.reddedilen-intibak-liste')}}" data-key="t-recover-password">Reddedilen Başvurular</a></li>
                            </ul>
                        </li>
                       

                       
                    </div>
                </div>
        
            </div>
        </div>
  
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                  
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Kocaeli Üniversitesi Başvuru Sistemi</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Çap Başvuruları</a></li> -
                                        <li class=" active">Başvuru Sistemi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>


                    <form method="post" action="{{route('admin.basvurular.cap-basvuru-listesi')}}">
                        @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bekleyen Çap Başvuruları</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                                        <thead>
                                            <tr>
                                            <th>Belge ID</th>
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
                                    <th>Çap için başvurulan Fakülte</th>
                                    <th>Çap için başvurulan Bölüm</th>
                                    <th>Başvuru Durumu</th>
                                    <th>Belge Oluşturulma Zamanı</th>
                                    <th>İşlemler</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        @foreach($capbasvurular as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->ad_soyad}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->ev_adresi}}</td>
                                        <td>{{$item->is_adresi}}</td>
                                        <td>{{$item->tc_no}}</td>
                                        <td>{{$item->gsm}}</td>
                                        <td>{{$item->fakulte_ad}}</td>
                                        <td>{{$item->bolum_ad}}</td>
                                        <td>{{$item->ogrenci_no}}</td>
                                        <td>{{$item->ogrenci_sinif}}</td>
                                        <td>{{$item->ogrenci_gno}}</td>
                                        <td>{{$item->cap_fakulte}}</td>
                                        <td>{{$item->cap_bolum}}</td>
                                        <td>{{$item->basvuru_durumu}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>
                                            <a class="btn btn-soft-success" href="{{route('admin.basvurular.onayla.cap-basvuru-onayla',$item->id)}}">Başvuruyu Onayla</a>
                                            <a class="btn btn-soft-danger" href="{{route('admin.basvurular.reddet.cap-basvuru-reddet',$item->id)}}">Başvuruyu Reddet</a>
                                        </td>
                                    </tr>
                                @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- end cardaa -->
                        </div>
                        <!-- end col -->
                        </form>
</div>
                    
                    

                </div>
           
                
            </div>
          
            


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © Koü.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                               Tüm hakları saklıdır. <a target="_blank" href="https://kocaeli.edu.tr" class="text-decoration-underline">Kocaeli Üniversitesi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
       
        

    </div>
  
    
  
    
    

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="/assets/libs/pace-js/pace.min.js"></script>
    <!-- Required datatable js -->
    <script src="/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="/assets/libs/jszip/jszip.min.js"></script>
    <script src="/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
<script>
    $(document).ready(function(){
        $("#datatable").DataTable({
            "language": {
             "url": "http://mertcloud.com/dttr.json"
            },
            'columnDefs' : [{ type: 'turkish', targets: '_all' }]
            }),
        $("#datatable-buttons").DataTable({lengthChange:!1,buttons:["excel","pdf"]}).buttons().container().appendTo("#datatable-buttons_wrapper .col-md-6:eq(0)"),$(".dataTables_length select").addClass("form-select form-select-sm")});
        
</script>

    <script src="/assets/libs/pace-js/gerkeli.js"></script>
  
   
</body>


</html>