@extends('frontend.master')
@section('title','Çalışma Modeli')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row ">
                <h1 class="text-center">ÇALIŞMA MODELİ</h1>
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
            <!--Card -->
            <div class="yukariCek row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>PAYDAŞLAR</h3>
                                <p>UNESCO, Ekonomi Bakanlığı, Kültür ve Turizm Bakanlığı, Kalkınma Bakanlığı, Kalkınma
                                    Ajansları, Yerel
                                    Yönetimler, Üniversiteler, Meslek Odaları, TÜBİTAK, Müzeler, STK’lar, Sektör ve İş
                                    adamları, Halk,
                                    Yerli/Yabancı İletişim Mecraları.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>FAALİYETLER</h3>
                                <p>Atölyeler, Seminer, Sempozyum, Konferans, Kongreler, Kentsel Tasarım Projeleri, Tezler,
                                    AR-GE
                                    Çalışmaları, Laboratuvar Çalışmaları, Ortak Yaratım Stüdyoları, Tasarım Mağazacılığı,
                                    Mesleki Eğitim,
                                    Akademik Eğitim, Ulusal/Uluslararası Fuarcılık</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>DEĞER ÖNERİLERİ</h3>
                                <p>Yerel zanaatleri çağdaş tasarımla buluşturmak. İstihdamın ve kalitesinin yükseltilmesi.
                                    Katma değerli
                                    ekonomik faaliyetler. Kimliğin keşfi ve sahiplenilmesi. Sosyal, kültürel ve ekonomik
                                    yönden DAHA
                                    GÜZEL BİR YAŞAM. Çevrenin keşfi ve sahiplenilmesi. Kent belleğini sahiplenmek. Hizmet ve
                                    deneyime
                                    can vermek. Yerelin ve evrenselin bilince çıkarılması ve sahiplenilmesi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>MÜŞTERİ İLİŞKİLERİ</h3>
                                <p>Sadakat, Erdem, Buluşçu, İlgi, Yenilikçi, Seçkin, Aydın, Liyakat, Özen
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>MÜŞTERİLER</h3>
                                <p>Zanaatkarlar, Tasarımcılar, Kültür Endüstrileri, Yerli / Yabancı Eğitim Kuruluşları,
                                    Enstitüler, Kültür /
                                    Sanat Paydaşları, Kalkınma Ajansları, Yerel Yönetimler, Merkezi Yönetim, Yerli / Yabancı
                                    Misafirler</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>KAYNAKLAR</h3>
                                <p>Somut Kültürel Miras, Somut Olmayan Kültürel Miras, Yatırımcı Sermaye, Donanım,
                                    Yazılım</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>KANALLAR</h3>
                                <p>Basın, Akademiler, Sosyal Medya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>MALİYET YAPISI</h3>
                                <p>Genel Giderler, Satış-Pazarlama Giderleri, Finans Giderleri, Yatırım Giderleri, Vergi ve
                                    Harçlar
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
            <!--Card -->
            <div class="row p-3">
                <div class="col-md-4  position-relative  mb-3">
                    <a href="{{('public/frontend/images/7.jpg')}}" data-lightbox="programGaleri">
                        <div class="image">
                            <img class="h-100" src="{{('public/frontend/images/7.jpg')}}">
                        </div>
                    </a>
                </div>
                <div class="col-md-8  mb-3">
                    <div class="programCardIcerik">
                        <div class="w-100">
                            <div class="px-5 py-3 col-md-8 col-xs-8 col-sm-8">
                                <h3>GELİR AKIŞI</h3>
                                <p>Yerel-Ulusal-Uluslararası Fonlar, Yatırım-İşletme Gelirleri, Hizmet Gelirleri, Web Store
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Card -->
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
