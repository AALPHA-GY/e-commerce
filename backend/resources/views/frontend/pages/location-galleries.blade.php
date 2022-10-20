@extends('frontend.master')
@section('title','Mardin Görseller')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row ">
                <h1 class="text-center">MARDİN</h1>
            </div>
        </div>
    </section>
    <!-- Hero Alanı -->
    <section class="bg-siyah cardSection">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 programDetay">
                    <div class="slider slider-for mb-5 text-center">
                        <div class="imgDiv">
                            <a href="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" data-lightbox="programGaleri"><img
                                        src="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="imgDiv">
                            <a href="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" data-lightbox="programGaleri"><img
                                        src="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="imgDiv">
                            <a href="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" data-lightbox="programGaleri"><img
                                        src="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="imgDiv">
                            <a href="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" data-lightbox="programGaleri"><img
                                        src="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" alt="">
                            </a>
                        </div>
                        <div class="imgDiv">
                            <a href="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" data-lightbox="programGaleri"><img
                                        src="{{asset('public/frontend/images/mardin-galeri-1.jpg')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="slider slider-nav">
                        <div><img src="{{asset('public/frontend/images/mardin-galeri-thumb-1.jpg')}}" alt=""></div>
                        <div><img src="{{asset('public/frontend/images/mardin-galeri-thumb-2.jpg')}}" alt=""></div>
                        <div><img src="{{asset('public/frontend/images/mardin-galeri-thumb-1.jpg')}}" alt=""></div>
                        <div><img src="{{asset('public/frontend/images/mardin-galeri-thumb-2.jpg')}}" alt=""></div>
                        <div><img src="{{asset('public/frontend/images/mardin-galeri-thumb-1.jpg')}}" alt=""></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-1.jpg')}}">
                    <div class="cardYazisi">
                        <h4>TANITIM</h4>
                        <div><a href="{{route('frontend-location-introducing',1)}}" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-2.jpg')}}">
                    <div class="cardYazisi">
                        <h4>ALT YAPI</h4>
                        <div><a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2">
                    <img src="{{asset('public/frontend/images/mardin-3.jpg')}}">
                    <div class="cardYazisi">
                        <h4>GÖRSELLER</h4>
                        <div><a href="#" class="cardBtn">DEVAMI</a></div>
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
