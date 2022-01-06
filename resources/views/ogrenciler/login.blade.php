@extends('layouts.app')
@section('content')
    <head>
       <title>Giriş Ekranı</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/font/bootstrap-icons.min.css" integrity="sha512-WYaDo1TDjuW+MPatvDarHSfuhFAflHxD87U9RoB4/CSFh24/jzUHfirvuvwGmJq0U7S9ohBXy4Tfmk2UKkp2gA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/bootstrap-icons.svg">
        <style>
        
        .avatar-upload {
            position: relative;
            max-width: 160px;
        }
        
            .avatar-upload .avatar-edit {
                position: absolute;
                right: 12px;
                z-index: 1;
                top: 10px;
            }
        
                .avatar-upload .avatar-edit input {
                    display: none;
                }
        
                    .avatar-upload .avatar-edit input + label {
                        display: inline-block;
                        width: 34px;
                        height: 34px;
                        margin-bottom: 0;
                        border-radius: 100%;
                        background: #FFFFFF;
                        border: 1px solid transparent;
                        box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        font-weight: normal;
                        transition: all 0.2s ease-in-out;
                    }
        
                        .avatar-upload .avatar-edit input + label:hover {
                            background: #f1f1f1;
                            border-color: #d6d6d6;
                        }
        
                        .avatar-upload .avatar-edit input + label:after {
                            font-family: 'Font Awesome 5    ';
                            content: "\f304";
                            color: #757575;
                            position: absolute;
                            top: 10px;
                            left: 0;
                            max-width: 10px;
                            max-height: 10px;
                            right: 0;
                            text-align: center;
                            margin: auto;
                        }
        
            .avatar-upload .avatar-preview {
                width: 100px;
                height: 100px;
                position: relative;
                border-radius: 100%;
                border: 6px solid #F8F8F8;
                box-shadow: 0px 2px 4px 0px rgba(0, 0, 0, 0.1);
            }
        
                .avatar-upload .avatar-preview > div {
                    width: 100%;
                    height: 100%;
                    border-radius: 100%;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-position: center;
                }
            </style>
            
     
    </head>
    <body>
   
    <!-- <body data-layout="horizontal"> -->
    <div class="auth-page">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="auth-full-page-content d-flex p-sm-5 p-4">
                        <div class="w-100">
                            <div class="d-flex flex-column h-100">
                                <div class="mb-4 mb-md-5 text-center">
                                    <a href="index.html" class="d-block auth-logo">
                                        <img src="http://bhi.kocaeli.edu.tr/amblem/logorgb.jpg" alt="" height="75">
                                    </a>
                                </div>
                                <div class="auth-content my-auto">
                                    <div class="text-center">
                                        <h5 class="mb-0">Hoşgeldin</h5>
                                        <p class="text-muted mt-2">Başvuru kayıt sistemine giriş yap.</p>
                                    </div>
                                    <form class="mt-4 pt-2" method="POST" action="{{route('ogrenciler.login')}}">
                                        @csrf

                                        <!-- <div class="mb-3">
                                        <div style="width:200px;margin-left:100px;">
                                   


                                    <div class="image-upload">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit me-3">
                                                <input type='file' id="imageUpload" name="ProfilePhoto" accept=".png, .jpg, .jpeg" />
                                                <label for="imageUpload"></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imagePreview" style="background-image: url('https://media-exp1.licdn.com/dms/image/C4D03AQEXfSldoPxUgQ/profile-displayphoto-shrink_800_800/0/1609922177180?e=1646265600&v=beta&t=kSrqnBBISdAWjopYYCqlS9U5VF17rYyzXX1vn8EL2rk'); ">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                        </div> -->
                                        <div class="mb-3">
                                            <label class="form-label">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" required placeholder="Email adresini giriniz.">
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    <label class="form-label">Şifre</label>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="">
                                                        <a href="{{route('ogrenciler.sifremi-unuttum')}}" class="text-muted">Şifreni mi unuttun?</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Lütfen şifrenizi giriniz." aria-label="Password" aria-describedby="password-addon">
                                                <button class="btn btn-light shadow-none ms-0" type="button" id="password-addon"><span class="iconify" data-icon="mdi:eye-outline"></span></button>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="remember-check">
                                                    <label class="form-check-label" for="remember-check">
                                                        Beni hatırla
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mb-3">
                                            <button class="btn btn-primary w-100 waves-effect waves-light" id="girisyap" type="submit">
                                               Giriş Yap
                                            </button>
                                        </div>
                                    </form>




                                    <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Hesabın yoksa <a href="{{route('ogrenciler.kayit-ekrani')}}" class="text-primary fw-semibold"> Kayıt Ol </a> </p>
                                    </div>

                                    <!-- <div class="mt-5 text-center">
                                        <p class="text-muted mb-0">Admin kullanıcılar için <a href="{{route('admin.index')}}" class="text-primary fw-semibold">Admin Paneli</a> </p>
                                    </div> -->
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
                                                    <h4 class="mt-4 fw-medium lh-base text-white">“KOU Başvuru kayıt sistemine kayıt olun ve bilgilerinizi tamamlayın. Daha sonra başvuru ekranlarını kullanarak yapmak isediğiniz başvuruları formları doğru bir şekilde doldurarak tamamlayın”
                                                    </h4>
                                                    <br> <br>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">
                                                    <h4 class="mt-4 fw-medium lh-base text-white">“Başvurular, başvuru süresi dolduktan sonra ilgili birimler tarafından ayrıntılı bir şekilde incelenir ve kayıt hakkı kazanan öğrenciler ilgili birimlerin yetkilileri tarafından açıklanır.”</h4>
                                                    <br> <br>
                                                </div>
                                            </div>

                                            <div class="carousel-item">
                                                <div class="testi-contain text-white">

                                                    <h4 class="mt-4 fw-medium lh-base text-white">“Öğrenciler, başvuru bilgilerini doğru girmekle yükümlüdür. Yanlış ya da eksik girilen bilgiler sonucu kayıt hakkı kazanılamaması durumunda üniversitemiz sorumlu tutulamaz.”
                                                    </h4>
                                                    <br> <br>
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

    <script >
         function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#imagePreview').css('background-image', 'url('+e.target.result +')');
            $('#imagePreview').hide();
            $('#imagePreview').fadeIn(650);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#imageUpload").change(function() {
    readURL(this);
});
        </script>
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- pace js -->
    <script src="assets/libs/pace-js/pace.min.js"></script>
    <!-- password addon init -->
    <script src="assets/js/pages/pass-addon.init.js"></script>
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    </body>
@endsection