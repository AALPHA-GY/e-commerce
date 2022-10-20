<!-- Bülten Alanı -->

<section class="bg-kirmizi bultenSection">
  <div class="container">
    <div class="row ">

      <div class="col-md-4 col-sm-12 col-xs-12 mb-2 text-center">E-BÜLTEN
        <input class="customInput" type="email" placeholder="E-Posta Adresi" id="bultenInput">
        <button type="button" id="bultenBtn"><i class="fa fa-check"></i></button>
      </div>


      <div class="col-md-4 col-sm-12 col-xs-12 mb-2 text-center">ARKADAŞINA ÖNER
        <input class="customInput" type="email" placeholder="E-Posta Adresi" id="onerInput">
        <button type="button" id="onerBtn"><i class="fa fa-check"></i></button>
      </div>


      <div class="col-md-4 col-sm-12 col-xs-12 mb-2 text-center">
        <ul>
          <li><i class="fab fa-facebook-f"></i></li>
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-instagram"></i></li>
          <li><i class="fab fa-pinterest"></i></li>
          <li><i class="fab fa-youtube"></i></li>
          <li><i class="fab fa-vimeo-v"></i></li>
        </ul>
      </div>
    </div>

  </div>
</section>

<!-- Bülten Alanı -->


<!-- Footer -->
<footer>
  <div class="footer-bg">

    <div class="container">

      <div class="row">


        <div class="col-md-4">


          <a href="/"><img class="logo-footer" src="{{asset('public/frontend/images/logo.png')}}" height="140"></a>


          <ul class="list-unstyled text-small">
            <li>
              <p><strong>Tasarım Vakfı İstanbul</strong><br>
                Cumhuriyet Mah. Hacıosman
                Bayırı Cad. No:25, 34457, Sarıyer,
                İstanbul, Türkiye</p>
            </li>

            <li>
              <p><strong>Tasarım Vakfı Mardin</strong><br>
                Şar Mah. 227. Sok. No:4,
                47100, Artuklu,
                Mardin, Türkiye</p>
            </li>


          </ul>
        </div>


        <div class="col-md-2">
          <h5>Etkinlikler</h5>
          <ul class="list-unstyled text-small">
            <li><a href="{{route('frontend-program')}}">Program</a></li>
            <li><a href="#">Atölyeler</a></li>
            <li><a href="#">Konferans</a></li>
            <li><a href="#">Sergi/Fuat</a></li>
            <li><a href="{{route('frontend-date')}}">Takvim</a></li>
            <li><a href="{{route('frontend-publication')}}">Yayınlar</a></li>
          </ul>
        </div>


        <div class="col-md-2">
          <h5>Yerler</h5>
          <ul class="list-unstyled text-small">
            <li><a href="{{route('frontend-location',1)}}">Mardin</a></li>
            <li><a href="#">İstanbul</a></li>
          </ul>

          <h5>Sponsorlar</h5>
          <ul class="list-unstyled text-small">
            <li><a href="sponsorluk-programi.php">Sponsorluk<br>Programı</a></li>
            <li><a href="sponsorlar.php">Sponsorlar</a></li>
          </ul>


        </div>


        <div class="col-md-2">
          <h5>Haberler</h5>
          <ul class="list-unstyled text-small">
            <li><a href="{{route('frontend-press-release')}}">Basın Bülteni</a></li>
            <li><a href="{{route('frontend-press-release-gallery')}}">Basın Görselleri</a></li>
            <li><a href="{{route('frontend-announcements')}}">Duyurular</a></li>
            <li><a href="{{route('frontend-press')}}">Basında</a></li>
          </ul>

          <h5>HAKKIMIZDA</h5>
          <ul class="list-unstyled text-small">
            <li><a href="kurumsal.php">Kurumsal</a></li>
            <li><a href="calisma-modeli.php">Çalışma Modeli</a></li>

            <li><a href="acik-gorevler.php">Açık Görevler</a></li>

            <li><a href="iletisim.php">İletişim</a></li>
            <li><a href="#">Katılanlar</a></li>
          </ul>


        </div>


        <div class="col-md-2 text-center copyText">
          <p>&copy; 2021, TASARIM VAKFI <br>TÜM HAKLARI SAKLIDIR.</p>

        </div>


      </div>


    </div>

  </div>

</footer>
