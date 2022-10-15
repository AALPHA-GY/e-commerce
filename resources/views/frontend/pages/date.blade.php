@extends('frontend.master')
@section('title','Takvim')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row text-center">
                <h1 class="text-center">TASARIM VAKFI</h1>
                <p class="w-100 text-center">TASARIM VAKFI ATÖLYELERİ “TASARIM DÜŞÜNCESİ VE TASARIM ÜRETİMİ”NE ADANMIŞ
                    BULUNMAKTADIR.</p>
            </div>
        </div>
    </section>
    <!-- Hero Alanı -->


    <!-- Card Alanı
       <img src="images/2.jpg">
     -->
    <section class="bg-siyah cardSection">
        <div class="container">
            <div class="row ">
                <div class="col-md-4 ilkSira cardDiv mb-2">
                    <div id="color-calendar"></div>
                </div>
                <div class="col-md-8 ilkSira cardDiv  mb-2">
                    <img src="{{asset('public/frontend/images/1.jpg')}}">
                </div>
            </div>
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
@section('footer')
    <script>
        new Calendar({
            id: '#color-calendar',
        });
    </script>
@endsection
