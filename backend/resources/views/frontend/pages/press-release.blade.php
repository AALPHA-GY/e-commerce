@extends('frontend.master')
@section('title','Basın Bülteni')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row ">
                <h1 class="text-center">BASIN BÜLTENLERİ</h1>
                <p class="text-center w-100"></p>
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
                <!--Card -->
                <div class="yukariCek row p-3">
                    <div class="col-md-4 cardDiv position-relative programCardSol mb-3">
                        <div class="image">
                            <img src="{{asset('public/frontend/images/7.jpg')}}">
                        </div>
                    </div>
                    <div class="col-md-8 programCardSag mb-3">
                        <div class="programCardIcerik">
                            <div class="w-100">
                                <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                    <p>2018-07-13 18.00 - 2018-07-13 20.00</p>
                                    <h3>‘MİDYAT DESEN TASARIMI’ VE ‘MİDYAT TAŞI’ ATÖLYELERİ</h3>
                                    <p>Atölye 13 Temmuz 2018 Çarşamba günü saat 18.00-20.00 arasında Tasarım Vakfın’da
                                        gerçekleşecektir.</p>
                                </div>
                                <p class="sagAlt">
                                    <strong>Lokasyon:</strong> Mardin, <strong>Tür:</strong> Konferans / Panel
                                </p>
                                <div class="tarihKutusu">
                                    TEM<br><strong>13</strong><br>2018
                                </div>
                            </div>
                            <a href="{{route('frontend-press-release-detail',1)}}" title="" class="kirmiziBtn">DEVAMI</a>
                        </div>
                    </div>
                </div>
                <!--Card -->
                <!--Card -->
                <div class="col-md-4 cardDiv position-relative programCardSol mb-3">
                    <div class="image">
                        <img src="{{asset('public/frontend/images/2.jpg')}}">
                    </div>
                </div>
                <div class="col-md-8 programCardSag mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <p>2018-07-13 18.00 - 2018-07-13 20.00</p>
                                <h3>FARUK MALHAN “MİDYAT KENTSEL VE KIRSAL TASARIMI” SÖYLEŞİSİ</h3>
                                <p>Atölye 13 Temmuz 2018 Çarşamba günü saat 18.00-20.00 arasında Tasarım Vakfın’da
                                    gerçekleşecektir.</p>
                            </div>
                            <p class="sagAlt">
                                <strong>Lokasyon:</strong> Mardin, <strong>Tür:</strong> Konferans / Panel
                            </p>
                            <div class="tarihKutusu">
                                TEM<br><strong>13</strong><br>2018
                            </div>
                        </div>
                        <a href="{{route('frontend-press-release-detail',1)}}" title="" class="kirmiziBtn">DEVAMI</a>
                    </div>
                </div>
                <!--Card -->
                <!--Card -->
                <div class="col-md-4 cardDiv position-relative programCardSol mb-3">
                    <div class="image">
                        <img src="{{asset('public/frontend/images/5.jpg')}}">
                    </div>
                </div>
                <div class="col-md-8 programCardSag mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <p>2018-07-13 18.00 - 2018-07-13 20.00</p>
                                <h3>TASARIM VAKFI MİDYAT TARİHİ MERKEZ VE KIRSAL KALKINMA TASARIMINI PROJELENDİRDİ</h3>
                                <p>Atölye 13 Temmuz 2018 Çarşamba günü saat 18.00-20.00 arasında Tasarım Vakfın’da
                                    gerçekleşecektir.</p>
                            </div>
                            <p class="sagAlt">
                                <strong>Lokasyon:</strong> Mardin, <strong>Tür:</strong> Konferans / Panel
                            </p>
                            <div class="tarihKutusu">
                                TEM<br><strong>13</strong><br>2018
                            </div>
                        </div>
                        <a href="{{route('frontend-press-release-detail',1)}}" title="" class="kirmiziBtn">DEVAMI</a>
                    </div>
                </div>
                <!--Card -->
                <!--Card -->
                <div class="col-md-4 cardDiv position-relative programCardSol mb-3">
                    <div class="image">
                        <img src="{{asset('public/frontend/images/6.jpg')}}">
                    </div>
                </div>
                <div class="col-md-8 programCardSag mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <p>2018-07-13 18.00 - 2018-07-13 20.00</p>
                                <h3>‘ENTANGLED’ / LA TRIENNALE DI MILANO</h3>
                                <p>Atölye 13 Temmuz 2018 Çarşamba günü saat 18.00-20.00 arasında Tasarım Vakfın’da
                                    gerçekleşecektir.</p>
                            </div>
                            <p class="sagAlt">
                                <strong>Lokasyon:</strong> Mardin, <strong>Tür:</strong> Konferans / Panel
                            </p>
                            <div class="tarihKutusu">
                                TEM<br><strong>13</strong><br>2018
                            </div>
                        </div>
                        <a href="{{route('frontend-press-release-detail',1)}}" title="" class="kirmiziBtn">DEVAMI</a>
                    </div>
                </div>
                <!--Card -->
                <!--Card -->
                <div class="col-md-4 cardDiv position-relative programCardSol mb-3">
                    <div class="image">
                        <img src="{{asset('public/frontend/images/3.jpg')}}">
                    </div>
                </div>
                <div class="col-md-8 programCardSag mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <p>2018-07-13 18.00 - 2018-07-13 20.00</p>
                                <h3>DÜNYA ENDÜSTRİYEL TASARIM GÜNÜ KUTLU OLSUN!</h3>
                                <p>Atölye 13 Temmuz 2018 Çarşamba günü saat 18.00-20.00 arasında Tasarım Vakfın’da
                                    gerçekleşecektir.</p>
                            </div>
                            <p class="sagAlt">
                                <strong>Lokasyon:</strong> Mardin, <strong>Tür:</strong> Konferans / Panel
                            </p>
                            <div class="tarihKutusu">
                                TEM<br><strong>13</strong><br>2018
                            </div>
                        </div>
                        <a href="{{route('frontend-press-release-detail',1)}}" title="" class="kirmiziBtn">DEVAMI</a>
                    </div>
                </div>
                <!--Card -->
            </div>
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
