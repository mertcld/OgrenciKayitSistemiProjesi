<!doctype html>
<html lang="tr">


<head>

    <meta charset="utf-8" />
    <title>Öğrenci Ana Sayfa | KOU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="/css/preloader.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="/css/bootstrap.min.css" id="app-style" rel="stylesheet" type="text/css" />
  
    <link href="/css/icons.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
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
                            <button class="btn btn-primary" type="button"><i class="fas fa-search align-middle"></i></button>
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
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                                <i class="fas fa-moon icon-lg layout-mode-dark"></i>
                                <i  class="fas fa-sun icon-lg layout-mode-light"></i>
                            </button>
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

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <div data-simplebar class="h-100">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                        <li class="menu-title" data-key="t-menu">Menu</li>

                        <li>
                            <a href="#">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ogrenciler.basvurular.yatay-basvuru')}}">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Yatay Geçiş Başvurusu</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ogrenciler.basvurular.cap-basvuru')}}">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">ÇAP Başvurusu</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ogrenciler.basvurular.dgs-basvuru')}}">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Dikey Geçiş Başvurusu</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ogrenciler.basvurular.intibak-basvuru')}}">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">İntibak Başvurusu</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ogrenciler.basvurular.yazokulu-basvuru')}}">
                                <i data-feather="home"></i>
                                <span data-key="t-dashboard">Yaz Okulu Başvurusu</span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow">
                                <i data-feather="grid"></i>
                                <span data-key="t-apps">Kayıtlı Başvurularım</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li>
                                    <a href="{{route('ogrenciler.basvurular.goruntule.yatay-basvuru-goruntule')}}">
                                        <span data-key="t-check">Yatay Geçiş Başvurularım</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('ogrenciler.basvurular.goruntule.cap-basvuru-goruntule')}}" >
                                        <span data-key="t-check">ÇAP Başvurularım</span>
                                    </a>
                                   
                                </li>
                                <li>
                                    <a href="{{route('ogrenciler.basvurular.goruntule.dgs-basvuru-goruntule')}}">
                                        <span data-key="t-check">Dikey Geçiş Başvurularım</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="{{route('ogrenciler.basvurular.goruntule.intibak-basvuru-goruntule')}}" >
                                        <span data-key="t-check">İntibak Başvurularım</span>
                                    </a>
                                   
                                </li>
                                <li>
                                    <a href="{{route('ogrenciler.basvurular.goruntule.yazokulu-basvuru-goruntule')}}" >
                                        <span data-key="t-check">Yaz Okulu Başvurularım</span>
                                    </a>
                                   
                                </li>
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
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Anasayfa</a></li> -
                                        <li class=" active">Başvuru Sistemi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
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
  
    

    
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/jquery/jquery.min.js"></script>
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="./assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="/assets/libs/pace-js/pace.min.js"></script>
    <script src="/assets/libs/pace-js/gerkeli.js"></script>
  
   
</body>


</html>