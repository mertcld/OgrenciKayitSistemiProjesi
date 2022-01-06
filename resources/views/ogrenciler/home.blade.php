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
    <div class="container">
        <form method="post" action="{{route('ogrenciler.home')}}">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <h2 style="text-align: center; margin-top: 30px">Giriş Yapan Kullanıcı</h2>
                        <input type="text" value="{{auth()->user()->name}}" readonly>
                        <input type="text" value="{{auth()->user()->email}}" readonly>
                        <input type="text" value="{{auth()->user()->id}}" readonly>
                    </div>
                    <a class="btn btn-info" href="{{route('ogrenciler.ogrenciler-index')}}">Anasayfaya Dön</a>
                   <button class="btn btn-danger" type="submit">Çıkış Yap</button>

                </div>
            </div>

        </form>

    </div>
@endsection