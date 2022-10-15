@extends('frontend.master')
@section('title','Yerler')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row text-center">
                <h1 class="text-center">MARDİN </h1>
                <p class="w-100 text-center">MARDİN ARTUKLU’DA SANATÇILARIN VE ZANAATKARLARIN İÇİNDE KURULDU, 'TASARIM
                    DÜŞÜNCESİ VE TASARIM
                    ÜRETİMİ'NE ADANMIŞTIR</p>
            </div>
        </div>
    </section>
    <!-- Hero Alanı -->
    <section class="bg-siyah cardSection">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 ilkSira cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-1.jpg')}}">
                    <div class="cardYazisi">
                        <h4>TANITIM</h4>
                        <div><a href="{{route('frontend-location-introducing',1)}}" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 ilkSira cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-2.jpg')}}">
                    <div class="cardYazisi">
                        <h4>ALT YAPI</h4>
                        <div><a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 ilkSira cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-3.jpg')}}">
                    <div class="cardYazisi">
                        <h4>GÖRSELLER</h4>
                        <div><a href="{{route('frontend-location-gallery',1)}}" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-4.jpg')}}">
                    <div class="cardYazisi">
                        <h4>PROGRAM</h4>
                        <div><a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-5.jpg')}}">
                    <div class="cardYazisi">
                        <h4>İLETİŞİM</h4>
                        <div><a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
