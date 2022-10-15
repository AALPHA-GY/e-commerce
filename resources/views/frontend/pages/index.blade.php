@extends('frontend.master')
@section('title','Tasarım Vakfı')
@section('content')

  <!-- Hero Alanı -->
  <section class="bg-kirmizi heroSection">

    <div class="container">
      <div class="row text-center">

        <h1 class="text-center">TASARIM VAKFI</h1>
        <p class="w-100 text-center">İNSANLIĞIN ARAYIŞINDA;KÜLTÜREL ANILARIN İZİNDE; UYGARLIĞIN EVRELERİNİN,
          EKONOMİNİN EVRİMİNİN, KÜLTÜREL KÖKLERİN VE
          TOPLUMSAL MİRASIN, AKDENİZ YARIMADASI’NDAN, TÜM DÜNYAYA, ŞİMDİYE YAYILDIĞI, BU ESKİ DÜNYA’YA İTHAFEN,
          DÜNYANIN TÜM
          YARATICI AKILLARINA ADANMIŞTIR.</p>


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


        <div class="col col-md-4 ilkSira cardDiv mb-2">
          <div id="color-calendar"></div>
        </div>


        <div class="col-md-8 ilkSira cardDiv  mb-2">
          <img src="{{asset('public/frontend/images/1.jpg')}}">


        </div>


        <div class="col-md-4 cardDiv position-relative mb-2">
          <img src="{{asset('public/frontend/images/2.jpg')}}">
          <div class="cardYazisi">
            <h4>FARUK MALHAN "MİDYAT KENTSEL VE KIRSAL TASARIMI" SÖYLEŞİSİ</h4>
            <a href="#" class="cardBtn">DEVAMI</a>
          </div>
        </div>


        <div class="col-md-4 cardDiv position-relative mb-2">
          <img src="{{asset('public/frontend/images/3.jpg')}}">
          <div class="cardYazisi">
            <h4>DÜNYA ENDÜSTRİYEL TASARIM GÜNÜ KUTLU OLSUN!</h4>
            <a href="#" class="cardBtn">DEVAMI</a>
          </div>
        </div>


        <div class="col-md-4 cardDiv position-relative mb-2">
          <img src="{{asset('public/frontend/images/4.jpg')}}">
          <div class="cardYazisi">
            <h4>DA VİNCİ KÖPRÜSÜ</h4>
            <a href="#" class="cardBtn">DEVAMI</a>
          </div>
        </div>


        <div class="col-md-4 cardDiv position-relative mb-2">
          <img src="{{asset('public/frontend/images/5.jpg')}}">
          <div class="cardYazisi">
            <h4>TASARIM VAKFI MİDYAT TARİHİ MERKEZ VE KIRSAL KALKINMA TASARIMINI PROJELENDİRDİ</h4>
            <a href="#" class="cardBtn">DEVAMI</a>
          </div>
        </div>


        <div class="col-md-4 cardDiv position-relative mb-2">
          <img src="{{asset('public/frontend/images/6.jpg')}}">
          <div class="cardYazisi">
            <h4>‘ENTANGLED’ / LA TRIENNALE DI MILANO</h4>
            <a href="#" class="cardBtn">DEVAMI</a>
          </div>
        </div>


        <div class="col-md-4 cardDiv position-relative mb-2">
          <img src="{{asset('public/frontend/images/7.jpg')}}">
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
@section('footer')
  <script>
    new Calendar({
      id: '#color-calendar',
    });

  </script>
@endsection
