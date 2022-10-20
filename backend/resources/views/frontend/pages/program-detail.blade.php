@extends('frontend.master')
@section('title','Program Detayları')
@section('content')

    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">

        <div class="container">
            <div class="row ">

                <h1 class="text-center">‘MİDYAT DESEN TASARIMI’ VE ‘MİDYAT TAŞI’ ATÖLYELERİ</h1>
                <p class="text-center w-100">2018-07-13 18.00 - 2018-07-13 20.00</p>
                <p class="text-center w-100"><strong>Tür:</strong> <span class="tur">Atölye</span></p>


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


                <div class="col-md-12 programDetay">
                    <p class="giris">
                        Mimar Zafer Akay yürütücülüğünde gerçekleşecek atölyede, şehrin mimarisi, dokusu, kimliği
                        deneyimlenecek, Mardin taşı ve
                        işleme teknikleri, bu coğrafyaya özgü taşın farklı kullanımları ile ele alınacaktır. Tarih
                        boyunca çeşitli medeniyetlerin, dillerin, dinlerin, kültürlerin iç içe olduğu bu coğrafyanın
                        bir-aradalıkları, müşterek alanlarından yola çıkarak şehir mobilyaları ve taş söveler,
                        ocak, şömine, baca, korkuluklar, harpuşta gibi yapı bileşenleri tasarımları geliştirilecektir
                    </p>

                    <p>
                        Mardin’de çıkarılan kalker taşı, fırından ilk çıktığında yumuşak ve kolay şekillenen, fakat
                        güneş ve su ile sertleşen, bölgeye özgü bir taştır.
                        Midyatmimarisinin en büyük ayırt edici ögesidir. Midyat’taki yapıların içi ve dışı, kapıları,
                        pencereleri, sütunlar, kemerler taş işçiliğiyle
                        incelikle işlenebilen bu taşla bezelidir.

                    </p>


                    <p><strong>ATÖLYE İŞBİRLİĞİ:</strong> Dicle Kalkınma Ajansı, Midyat Meslek Yüksek Okulu</p>
                    <p><strong>ATÖLYE İÇERİĞİ</strong></p>
                    <p><strong>Seminer ve Sunumlar</strong></p>
                    <br>
                    <p><strong>Tasarım Vakfı Sunumu</strong> <br> Kuruluş, vizyonu, amacı, projeleri</p>
                    <p><strong>Atölye Sunumu</strong> <br> Kuruluş, vizyonu, amacı, projeleri</p>


                </div>


                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{asset('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{asset('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>

                </div>


                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{asset('public/frontend/images/2.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{asset('public/frontend/images/2.jpg')}}">
                        </div>
                    </a>

                </div>

                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{asset('public/frontend/images/5.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{asset('public/frontend/images/5.jpg')}}">
                        </div>
                    </a>

                </div>


            </div>
        </div>


    </section>
    <!-- Card Alanı -->





@endsection
