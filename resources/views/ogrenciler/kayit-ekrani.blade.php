@extends('layouts.app')
@section('content')
    <body>
    <head>
    <title>Kayıt Formu</title>
    </head>
    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-3 p-1 scrollbar" style="max-height: 100vh; overflow: scroll;" id="style-15">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-2 mb-md-3 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="http://bhi.kocaeli.edu.tr/amblem/logorgb.jpg" alt="" height="120">
                                    </a>
                                </div>
                                <div class="auth-content my-auto ">
                                    <div class="text-center">
                                        <h5 class="mb-0">Kocaeli Üniversitesi</h5>
                                        <p class="text-muted mt-2">Başvuru Kayıt Sistemi</p>
                                    </div>
                                    <form class="needs-validation mt-3 pt-1" method="post" action="{{route('ogrenciler.kayit-ekrani')}}">
                                        @csrf


                                        <div class="mb-2">
                                            <label for="username" class="form-label">Ad Soyad</label>
                                            <input type="text" class="form-control" name="name" id="username" placeholder=" Lütfen Ad-Soyad Giriniz" required>
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
                                            <label for="photo" class="form-label">Foto</label>
                                            <input type="file" class="form-control"  id="photo"  required>
                                            <input type="text" class="d-none" name="photo" value="https://www.pikpng.com/pngl/m/263-2631740_empty-avatar-png-user-png-clipart.png" id="dbphoto">
                                        </div>

                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Şifre</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Lütfen şifre giriniz." required>
                                            <div class="invalid-feedback">
                                                Şifre
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label for="userpassword" class="form-label">Şifre tekrarı</label>
                                            <input type="password" class="form-control" name="password" id="userpassword" placeholder="Lütfen şifre tekrarı giriniz." required>
                                            <div class="invalid-feedback">
                                                Şifre tekrarı
                                            </div>
                                        </div>
                                        <br>


                                        <div class="mb-3">
                                            <p class="mb-0">Kaydolarak <a href="#" class="text-primary">Kocaeli Üniversitesi Kullanım Şartlarını</a> kabul etmiş olursunuz.</p>
                                        </div>



                                        <div class="mb-2">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Üye Ol</button>
                                        </div>
                                    </form>



                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Hesabın var mı ? <a href="{{route('ogrenciler.login')}}" class="text-primary fw-semibold"> Giriş Yap </a> </p>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0">© 2021 Kocaeli Üniversitesi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end auth full page content -->
                </div>
                <!-- end col -->
                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg pt-md-5 p-4 d-flex">
                        <div class="bg-overlay bg-success"></div>
{{--                        <ul class="bg-bubbles">--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                            <li></li>--}}
{{--                        </ul>--}}
                        <!-- end bubble effect -->
                        <div class="row justify-content-center align-items-center">
                            <div class="col-xl-7">
                                <div class="p-0 p-sm-4 px-xl-0">
                                    <div id="reviewcarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-indicators carousel-indicators-rounded justify-content-start ms-0 mb-0">
                                            <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#reviewcarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <!-- end carouselIndicators -->
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-center text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">Mobil Uygulamamızdan Kareler </h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-center">

                                                            <img src="assets/images/mockups/1-min.png" class=" img-fluid " alt="...">


                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-center text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">Mobil Uygulamamızdan Kareler</h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-center">

                                                            <img src="assets/images/mockups/2-min.png" class="img-fluid" alt="...">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <i class="bx bxs-quote-alt-center text-success display-6"></i>

                                                    <h4 class="mt-4 fw-medium lh-base text-white">Mobil Uygulamamızdan Kareler</h4>
                                                    <div class="mt-4 pt-3 pb-5">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/mockups/3-min.png" class="img-fluid" alt="...">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end carousel-inner -->
                                    </div>
                                    <!-- end review carousel -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
    <!-- <script>

const selectElement = document.querySelector('#photo');

selectElement.addEventListener('change', (event) => {
    document.getElementById("dbphoto").value=document.getElementById("photo").value;
    
});
    </script> -->

    <script>
        function populateItems(fakulte,bolum){
            var fakulte = document.getElementById("fakulte");
            var bolum = document.getElementById("bolum");
            bolum.innerHTML = "";
            if(fakulte.value =="muhendislik"){
                var optionArray = ['elektrik|Elektrik Mühendisliği','bilgisayar|Bilgisayar Mühendisliği','insaat|İnşaat Mühendisliği',
                    'makina|Makina Mühendisliği','yazılım|Yazılım Mühendisliği'];
            }else if(fakulte.value =="iletisim"){
                var optionArray = ['gazetecilik|Gazetecilik','halklailiskiler|Halkla İlişkiler ve Tanıtım','rts|Radyo Televizyon ve Sinema',
                    'reklamcılık|Reklamcılık','gorseliletisim|Görsel İletişim Tasarımı'];
            } else if(fakulte.value=="egitim"){
                var optionArray = ['fenbilgisi|Fen Bilgisi Öğretmenliği','matematik|Matematik Öğretmenliği','ingilizce|İngilizce Öğretmenliği',
                    'bilgisayar|Bilgisayar ve Öğretim teknolojileri Öğretmenliği','türkçe|Türkçe Öğretmenliği'];
            } else if(fakulte.value == "iktisadi" ){
                var optionArray = ['siyaset|Siyaset Bilimi ve Kamu Yönetimi','çalışma|Çalışma Ekonomisi ve Endüstri İlişkileri','iktisat|İktisat',
                    'uluslararası|Uluslararası İlişkiler','işletme|İşletme'];
            }
            else if(fakulte.value == "fenedebiyat"){
                var optionArray = ['matematik|Matematik','fizik|Fizik','kimya|Kimya',
                    'biyoloji|Biyoloji','felsefe|Felsefe'];
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


    <!-- JAVASCRIPT -->
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