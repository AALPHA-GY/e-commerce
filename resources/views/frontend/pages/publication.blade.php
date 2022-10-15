@extends('frontend.master')
@section('title','Yayınlar')
@section('content')
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row text-center">
                <h1 class="text-center">YAYINLAR </h1>
                <p class="w-100 text-center">TASARIM VAKFI ATÖLYELERİ “TASARIM DÜŞÜNCESİ VE TASARIM ÜRETİMİ”NE ADANMIŞ BULUNMAKTADIR.</p>
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
                <div class="col-md-4 ilkSira cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/2.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>FARUK MALHAN "MİDYAT KENTSEL VE KIRSAL TASARIMI" SÖYLEŞİSİ</h4>
                        <a href="#" class="cardBtn">DEVAMI</a>
                    </div>
                </div>
                <div class="col-md-4 ilkSira cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/3.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>DÜNYA ENDÜSTRİYEL TASARIM GÜNÜ KUTLU OLSUN!</h4>
                        <a href="#" class="cardBtn">DEVAMI</a>
                    </div>
                </div>
                <div class="col-md-4 ilkSira cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/4.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>DA VİNCİ KÖPRÜSÜ</h4>
                        <a href="#" class="cardBtn">DEVAMI</a>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/5.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>TASARIM VAKFI MİDYAT TARİHİ MERKEZ VE KIRSAL KALKINMA TASARIMINI PROJELENDİRDİ</h4>
                        <a href="#" class="cardBtn">DEVAMI</a>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/6.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>‘ENTANGLED’ / LA TRIENNALE DI MILANO</h4>
                        <a href="#" class="cardBtn">DEVAMI</a>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/7.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>‘MİDYAT DESEN TASARIMI’ VE ‘MİDYAT TAŞI’ ATÖLYELERİ</h4>
                        <a href="#" class="cardBtn">DEVAMI</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
