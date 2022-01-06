<!doctype html>
<html lang="tr">


<head>

    <meta charset="utf-8" />
    <title>Çap Başvuru Ekranı | Koü Başvuru Sistemi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
                        <a href="{{route('ogrenciler.ogrenciler-index')}}" class="logo logo-dark">
                            <span class="logo-sm">
                                    <img src="/img/logo.png" alt="" height="24">
                                </span>
                            <span class="logo-lg">
                                    <img src="/img/logo.png" alt="" height="24"> <span class="logo-txt">Koü</span>
                            </span>
                        </a>

                        <a href="{{route('ogrenciler.ogrenciler-index')}}" class="logo logo-light">
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
                        <button type="button" class="btn header-item noti-icon position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i  class=" fas fa-bell icon-lg"></i>
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

        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

<div data-simplebar class="h-100">

    <!--- Sidemenu -->
    <div id="sidebar-menu">
        <!-- Left Menu Start -->
        <ul class="metismenu list-unstyled" id="side-menu">
            <li class="menu-title" data-key="t-menu">Menu</li>

            <li>
                <a href="{{route('ogrenciler.ogrenciler-index')}}">
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
                                        <li class="breadcrumb-item mx-2"><a href="javascript: void(0);">Çap Başvuru Ekranı</a></li> -
                                        <li class=" active mx-2">Başvuru Sistemi</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-2 mb-md-3 text-center">
                                    <a href="{{route('ogrenciler.basvurular.cap-basvuru')}}" class="d-block auth-logo">
                                        <img src="http://bhi.kocaeli.edu.tr/amblem/logorgb.jpg" alt="" height="120">
                                    </a>
                                </div>
                                <div class="auth-content my-auto ">
                                    <div class="text-center">
                                        <h5 class="mb-0">Kocaeli Üniversitesi</h5>
                                        <p class="text-muted mt-2">Çap Başvuru Formu</p>
                                    </div>
                                    <form class="needs-validation mt-3 pt-1" method="post"  action="{{route('ogrenciler.basvurular.cap-basvuru')}}">
                                       @csrf
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Ad Soyad</label>
                                            <input type="text" class="form-control" name="ad_soyad" id="username" placeholder=" Lütfen Ad-Soyad Giriniz" required>
                                            <div class="invalid-feedback">
                                                Lütfen Ad-Soyad giriniz.
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" id="useremail" placeholder="Lütfen email adresinizi giriniz." required>
                                            <div class="invalid-feedback">
                                                Lütfen email adresinizi giriniz.
                                            </div>
                                        </div>


                                        <div class="mb-2">
                                            <label for="username" class="form-label">TC NO</label>
                                            <input type="text" class="form-control" maxlength="11" name="tc_no" id="username" placeholder=" Lütfen TC NO Giriniz" required>
                                            <div class="invalid-feedback">
                                                Lütfen TC NO giriniz.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="username" class="form-label">Telefon No</label>
                                            <input type="tel" class="form-control" name="gsm" id="username" placeholder=" Lütfen Telefon No Giriniz" required>
                                            <div class="invalid-feedback">
                                                Lütfen Telefon No giriniz.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Ev Adresi</label>
                                            <input type="text" class="form-control" name="ev_adresi" id="userpassword" placeholder="Lütfen ev adresi giriniz." required>
                                            <div class="invalid-feedback">
                                                Lütfen Ev adresi giriniz.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Varsa İş Adresi</label>
                                            <input type="text" class="form-control" name="is_adresi" id="userpassword" placeholder="Lütfen iş adresi giriniz.">

                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Fakülte Adı</label>
                                            <select class="form-select" name="fakulte_ad" id="fakulte" onchange="populateItems(this.id,'bolum')">
                                                <option value="">Fakülte Seçin...</option>
                                                <option value="Mühendislik Fakültesi">Mühendislik Fakültesi</option>
                                                <option value="Fen Edebiyat Fakültesi">Fen Edebiyat Fakültesi</option>
                                                <option value="İletişim Fakültesi">İletişim Fakültesi</option>
                                                <option value="İktisadi ve İdari Bilimler Fakültesi">İktisadi ve İdari Bilimler Fakültesi</option>
                                                <option value="Eğitim Fakültesi">Eğitim Fakültesi</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Lütfen Fakülte seçiniz.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Bölüm Adı</label>
                                            <select class="form-select" name="bolum_ad" id="bolum">
                                                <option value="" name="bolumsec" id="bolumsec">Önce Fakülte seçin</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Lütfen Bölüm Adı giriniz.
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Öğrenci No</label>
                                            <input type="number" class="form-control" name="ogrenci_no" id="userpassword" placeholder="Lütfen öğrenci no giriniz." required>
                                            <div class="invalid-feedback">
                                                Lütfen öğrenci no giriniz.
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Yarıyıl</label>
                                            <select class="form-select" name="ogrenci_yariyil" id="yarıyıl">
                                                <option value="">Yarıyıl bilgisi (örn : 3.yarıyıl , 5.yarıyıl) ...</option>
                                                <option value="ucuncuyariyil">3.Yarıyıl</option>
                                                <option value="besinciyariyil">5.yarıyıl</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Lütfen Yarıyıl Bilgisi girin.
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Öğrenci GNO</label>
                                            <input type="text" class="form-control" name="ogrenci_gno" id="userpassword" placeholder="Not ortalamanızı(AGNO)  giriniz." required>
                                            <div class="invalid-feedback">
                                                Öğrenci not ortalaması.
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Disiplin Durumu</label>
                                            <select class="form-select" id="disiplin" name="ogrenci_disiplin">
                                                <option value="">Disiplin cezası var mı ? ...</option>
                                                <option value="var">Var</option>
                                                <option value="yok">Yok</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Disiplin Durumunu Seçiniz
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Çap yapılmak istenen Fakülte</label>
                                            <select class="form-select" id="basvurulanfakulte" name="cap_fakulte" onchange="populateBasvurulanItems(this.id,'basvurulanbolum')">
                                                <option value="">Fakülte Seçin...</option>
                                                <option value="Mühendislik Fakültesi">Mühendislik Fakültesi</option>
                                                <option value="Fen Edebiyat Fakültesi">Fen Edebiyat Fakültesi</option>
                                                <option value="İletişim Fakültesi">İletişim Fakültesi</option>
                                                <option value="İktisadi ve İdari Bilimler Fakültesi">İktisadi ve İdari Bilimler Fakültesi</option>
                                                <option value="Eğitim Fakültesi">Eğitim Fakültesi</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Lütfen Fakülte Adı giriniz.
                                            </div>
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Çap yapılmak istene Bölüm</label>
                                            <select class="form-select" name="cap_bolum" id="basvurulanbolum">
                                                <option value="" name="bolumsec" id="bolumsec">Önce Fakülte seçin</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Lütfen Bölüm Adı giriniz.
                                            </div>
                                        </div>
                                        <br>


                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Transkript Belgesi</label>
                                            <input type="file" name="belge_transkript">
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Onaylı Ders İçerikleri</label>
                                            <input type="file" name="belge_icerik">
                                        </div>

                                        <div class="mb-2">
                                            <input type="hidden" name="basvuru_durumu" value="onay_bekliyor">
                                        </div>


                                        <div class="mb-2">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Başvuruyu Tamamla</button>
                                        </div>
                                    </form>

                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© 2021 Kocaeli Üniversitesi</p>
                                </div>
                            </div>
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
    </div>
    
    
    <script>
        function populateItems(fakulte,bolum){
            var fakulte = document.getElementById("fakulte");
            var bolum = document.getElementById("bolum");
            bolum.innerHTML = "";
            if(fakulte.value =="Mühendislik Fakültesi"){
                var optionArray = ['Elektrik Mühendisliği|Elektrik Mühendisliği','Bilgisayar Mühendisliği|Bilgisayar Mühendisliği','İnşaat Mühendisliği|İnşaat Mühendisliği',
                    'Makina Mühendisliği|Makina Mühendisliği','Yazılım Mühendisliği|Yazılım Mühendisliği'];
            }else if(fakulte.value =="İletişim Fakültesi"){
                var optionArray = ['Gazetecilik|Gazetecilik','Halkla İlişkiler ve Tanıtım|Halkla İlişkiler ve Tanıtım','Radyo Televizyon ve Sinema|Radyo Televizyon ve Sinema',
                    'Reklamcılık|Reklamcılık','Görsel İletişim Tasarımı|Görsel İletişim Tasarımı'];
            } else if(fakulte.value=="Eğitim Fakültesi"){
                var optionArray = ['Fen Bilgisi Öğretmenliği|Fen Bilgisi Öğretmenliği','Matematik Öğretmenliği|Matematik Öğretmenliği','İngilizce Öğretmenliği|İngilizce Öğretmenliği',
                    'Bilgisayar ve Öğretim teknolojileri Öğretmenliği|Bilgisayar ve Öğretim teknolojileri Öğretmenliği','Türkçe Öğretmenliği|Türkçe Öğretmenliği'];
            } else if(fakulte.value == "İktisadi ve İdari Bilimler Fakültesi" ){
                var optionArray = ['Siyaset Bilimi ve Kamu Yönetimi|Siyaset Bilimi ve Kamu Yönetimi','Çalışma Ekonomisi ve Endüstri İlişkileri|Çalışma Ekonomisi ve Endüstri İlişkileri','İktisat|İktisat',
                    'Uluslararası İlişkiler|Uluslararası İlişkiler','İşletme|İşletme'];
            }
            else if(fakulte.value == "Fen Edebiyat Fakültesi"){
                var optionArray = ['Matematik|Matematik','Fizik|Fizik','Kimya|Kimya',
                    'Biyoloji|Biyoloji','Felsefe|Felsefe'];
            }

            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                bolum.options.add(newOption);

            }
        }
    </script>

    <script>

        function populateBasvurulanItems(basvurulanfakulte,basvurulanbolum){
            var basvurulanfakulte = document.getElementById("basvurulanfakulte");
            var basvurulanbolum = document.getElementById("basvurulanbolum");
            basvurulanbolum.innerHTML = "";

            if(basvurulanfakulte.value =="Mühendislik Fakültesi"){
                var optionArray = ['Elektrik Mühendisliği|Elektrik Mühendisliği','Bilgisayar Mühendisliği|Bilgisayar Mühendisliği','İnşaat Mühendisliği|İnşaat Mühendisliği',
                    'Makina Mühendisliği|Makina Mühendisliği','Yazılım Mühendisliği|Yazılım Mühendisliği'];
            }else if(basvurulanfakulte.value =="İletişim Fakültesi"){
                var optionArray = ['Gazetecilik|Gazetecilik','Halkla İlişkiler ve Tanıtım|Halkla İlişkiler ve Tanıtım','Radyo Televizyon ve Sinema|Radyo Televizyon ve Sinema',
                    'Reklamcılık|Reklamcılık','Görsel İletişim Tasarımı|Görsel İletişim Tasarımı'];
            } else if(basvurulanfakulte.value=="Eğitim Fakültesi"){
                var optionArray = ['Fen Bilgisi Öğretmenliği|Fen Bilgisi Öğretmenliği','Matematik Öğretmenliği|Matematik Öğretmenliği','İngilizce Öğretmenliği|İngilizce Öğretmenliği',
                    'Bilgisayar ve Öğretim teknolojileri Öğretmenliği|Bilgisayar ve Öğretim teknolojileri Öğretmenliği','Türkçe Öğretmenliği|Türkçe Öğretmenliği'];
            } else if(basvurulanfakulte.value == "İktisadi ve İdari Bilimler Fakültesi" ){
                var optionArray = ['Siyaset Bilimi ve Kamu Yönetimi|Siyaset Bilimi ve Kamu Yönetimi','Çalışma Ekonomisi ve Endüstri İlişkileri|Çalışma Ekonomisi ve Endüstri İlişkileri','İktisat|İktisat',
                    'Uluslararası İlişkiler|Uluslararası İlişkiler','İşletme|İşletme'];
            }
            else if(basvurulanfakulte.value == "Fen Edebiyat Fakültesi"){
                var optionArray = ['Matematik|Matematik','Fizik|Fizik','Kimya|Kimya',
                    'Biyoloji|Biyoloji','Felsefe|Felsefe'];
            }


            for(var option in optionArray){
                var pair = optionArray[option].split("|");
                var newOption = document.createElement("option");
                newOption.value = pair[0];
                newOption.innerHTML = pair[1];
                basvurulanbolum.options.add(newOption);

            }
        }

    </script>

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