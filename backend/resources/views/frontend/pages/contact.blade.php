@extends('frontend.master')
@section('title','İletişim')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row ">
                <h1 class="text-center">İLETİŞİM</h1>
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
                <div class="col-md-3 mapsDiv  yukariCek">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200066.14127024438!2d26.939632585195547!3d38.4175916758296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd862a762cacd%3A0x628cbba1a59ce8fe!2zxLB6bWly!5e0!3m2!1sen!2str!4v1634324488062!5m2!1sen!2str"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-9 yukariCek ">
                    <div class="iletisimCard">
                        <h4 class="mb-1">İSTANBUL</h4>
                        <p class="mb-5">Cumhuriyet Mah. Haciosman Bayiri Cad. No:25<br>
                            34457 Sariyer, Istanbul / Türkiye</p>
                        <div class="solAlt">
                            <p class="mb-1"><strong> T:</strong> +90 (212) 223 07 71</p>
                            <p><strong> E:</strong> info@tasarimvakfi.com</p>
                        </div>
                    </div>
                </div>
                <!--Card -->
                <!--Card -->
                <div class="col-md-3 mapsDiv  mt-4">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d200066.14127024438!2d26.939632585195547!3d38.4175916758296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbd862a762cacd%3A0x628cbba1a59ce8fe!2zxLB6bWly!5e0!3m2!1sen!2str!4v1634324488062!5m2!1sen!2str"
                            style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="col-md-9 mt-4 ">
                    <div class="iletisimCard">
                        <h4 class="mb-1">MARDİN</h4>
                        <p class="mb-5">Şar Mah. 227. Sok. No:4, 47100, Artuklu, Mardin / Türkiye
                        </p>
                        <div class="solAlt">
                            <p class="mb-1"><strong> T:</strong>+90 552 291 63 80</p>
                            <p><strong> E:</strong> info@tasarimvakfi.com</p>
                        </div>
                    </div>
                </div>
                <!--Card -->
                <div class="col-md-12 ">
                    <div class="iletisimFormu">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="mb-5">İLETİŞİM FORMU</h3>
                                <input type="" name="" placeholder="AD/SOYAD">
                                <input type="" name="" placeholder="ŞİRKET">
                                <input type="" name="" placeholder="E-POSTA">
                                <input type="" name="" placeholder="TELEFON">
                            </div>
                            <div class="col-md-6">
                                <p class="text-dark iletisimYazisi">
                                    MESAJ
                                </p>
                            </div>
                            <div class="col-md-4">
                                <input type="" name="" placeholder="GÜVENLİK KODU">
                            </div>
                            <div class="col-md-2">
                                <img src="{{asset('public/frontend/images/guvenlik.png')}}" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <button type="submit">GÖNDER</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
