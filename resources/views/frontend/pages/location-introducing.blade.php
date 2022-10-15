@extends('frontend.master')
@section('title','Mardin Tanıtım')
@section('content')
    <!-- Hero Alanı -->
    <section class="bg-kirmizi heroSection">
        <div class="container">
            <div class="row ">
                <h1 class="text-center">TANITIM</h1>
                <p class="text-center w-100">MARDİN ARTUKLU’DA SANATÇILARIN VE ZANAATKARLARIN İÇİNDE KURULDU, 'TASARIM DÜŞÜNCESİ VE TASARIM ÜRETİMİ'NE ADANMIŞTIR.</p>
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
                        Bodrum Tasarım Atölyeleri tasarımcıyı üretimle buluşturmayı, tasarımı katma değerleriyle buluşlara, ekonomiye,kültüre,
                        istihdama kazandırmayı amaçlıyor.
                    </p>
                    <p>
                        2013 yılında kurulduğu günden bu yana yaratıcı endüstriler ve yaratıcı ekonomileri buluşturan Tasarım Vakfı, “yaparak,
                        uygulayarak öğrenme” temeline dayanan faaliyetlerine devam ediyor.
                        Disiplinler üstü, ayrıştıran, sorgulayan, tasarımcı düşünceye yoğunlaşan araştırma süreçlerini ilke edinen Tasarım Vakfı,
                        yaratıcı disiplinleri bütüncül birliktelikleri ile ele alıyor. İşbirliğine, açık işe, çoğulcu ve ortak akla dayalı tasarım anlayışını
                        benimsiyor.</p>
                    <p> Bu amaçla Tasarım Vakfı tarafından hayata geçirilen Bodrum Tasarım Atölyeleri tasarımcıyı üretimle buluşturmayı, tasarımı
                        katma değerleriyle buluşlara, ekonomiye,kültüre, istihdama kazandırmayı amaçlıyor.
                        Tasarım Vakfı, 2015 yılında 12 lider, 96 katılımcı ile 10 Yaz Atölyesini Bodrum’da gerçekleştirmiş, tasarımları ve tasarımcıları 2
                        Aralık 2015’te ulusal ve uluslararası basına İstanbul’da duyurmuş ve sergi açılışıyla paydaşlara sunmuştur.
                        Tasarım Vakfı, 2016 yılında 1 Haziran - 30 Kasım tarihleri arasında 20 lider ve 163 tasarımcı, sanatçı ve zanaatkarın katılımı ile
                        mobilya, dokuma, moda, kilim, cam, seramik, gastronomi, takı, hamur kağıt (papier-mâché) ve deri alanlarında 15 farklı
                        tasarım atölyesi gerçekleştirmiştir.</p>
                    <h4 class="text-dark">ATÖLYELER HAKKINDA</h4>
                    <p>Tasarımda disiplinler üstü kurgusal, deneysel bağlar kurmayı amaçlayan “Tasarım Vakfı Atölyeleri” edimsel yetkinliklerin,
                        fikirlerin, hünerlerin çapraz eşleşmelerle çoğalacağı ortamları olarak yetenekli tasarımcılar için kurgulanmıştır.
                        Türkiye’deki yaratıcı ekonomilere katma değer sağlayamayı hedeflediğimiz atölye çalışmaları, tasarımcıları üretime, üretimleri
                        tasarımcılara tanıştırma olanakları vermektedir. Bu kapsamda pazara yeni girişimlerde bulunan genç yeteneklere farklı bakış
                        açıları kazandırmak, farklı disiplinleri tanıtmak, disiplinler üstü deneyimler kazandırmak amaçlanmaktadır.
                        Tasarımda disiplinler üstü kurgusal, deneysel bağlar kurmayı amaçlayan Tasarım Vakfı Atölyeleri edimsel yetkinliklerin,
                        fikirlerin, hünerlerin çapraz eşleşmelerle çoğalacağı ortamları olarak yetenekli tasarımcılar için kurgulanmıştır.
                        Nesne temelli işlerden uzak; nesnenin değerleri, bağlamları araştırılarak yenibir ürün, hizmet, deneyim, ilham, kültür
                        üretebilmek hedefleniyor.</p>
                    <h4 class="text-dark">ATÖLYELERİN AMACI</h4>
                    <p>
                        Tasarım, sanat, zanaat önderleriyle; tasarım, üretim, teknik ve zanaatlar arasında deneyimsel, deneysel bağlar kurabilmek,
                        “yaparak öğrenme, öğrenirken yapma” kurgusuna odaklanmak  </p>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/mardin-1.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>TANITIM</h4>
                        <div> <a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/mardin-2.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>ALT YAPI</h4>
                        <div> <a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/mardin-3.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>GÖRSELLER</h4>
                        <div> <a href="{{route('frontend-location-gallery',1)}}" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/mardin-4.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>PROGRAM</h4>
                        <div> <a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
                <div class="col-md-4 cardDiv position-relative mb-2" >
                    <img src="{{asset('public/frontend/images/mardin-5.jpg')}}" >
                    <div class="cardYazisi">
                        <h4>İLETİŞİM</h4>
                        <div> <a href="#" class="cardBtn">DEVAMI</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Card Alanı -->
@endsection
