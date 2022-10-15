<!-- TopBar -->
<div class="topBar pb-2">


  <!-- Site İçi Arama -->

  <div class="container">

    <div class="row">
      <div class="col-md-7"></div>

      <div class="col-md-2 col-xs-3 col-sm-3">
        <div class="dilAlani">
          <ul>
            <li class="dilAktif">TR</li>
            <li>/</li>
            <li>EN</li>
          </ul>
        </div>
      </div>


      <div class="col-md-3 col-xs-3 col-sm-3">
        <form role="search">
          <div class="input-group add-on">
            <input class="form-control inputAra" placeholder="Arama" name="ara" type="text">
            <div class="input-group-btn">
              <button class="btn btn-default btnAra" type="submit">
                <i class="fa fa-search"></i>
              </button>
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>
  <!-- Site İçi Arama -->

</div>

<!-- TopBar -->


<!-- Menü -->

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="/">
    <img class="logo" src="{{asset('public/frontend/images/logo-white.png')}}" height="140">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> <i class="fa fa-bars"></i></span>
  </button>
  <div class="collapse navbar-collapse pl-5 text-center" id="navbarNav">
    <ul class="navbar-nav">


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          ETKİNLİKLER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <span class="dropdown-menu-arrow"></span>
          <a class="dropdown-item" href="{{route('frontend-program')}}">Program</a>
          <a class="dropdown-item" href="#">Atölyeler</a>
          <a class="dropdown-item" href="#">Konferans / Panel</a>
          <a class="dropdown-item" href="#">Sergi / Fuar</a>
          <a class="dropdown-item" href="{{route('frontend-date')}}">Takvim</a>
          <a class="dropdown-item" href="{{route('frontend-publication')}}">Yayınlar</a>
        </div>
      </li>


      <!--            <li class="nav-item ">-->
      <!--                <a class="nav-link" href="#">-->
      <!--                    YERLER-->
      <!--                </a>-->
      <!--            </li>-->
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          YERLER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <span class="dropdown-menu-arrow"></span>
          <a class="dropdown-item" href="{{route('frontend-location',1)}}">Mardin</a>
          <a class="dropdown-item" href="#">İstanbul</a>
        </div>
      </li>


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          HABERLER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <span class="dropdown-menu-arrow"></span>
          <a class="dropdown-item" href="{{route('frontend-press-release')}}">Basın Bülteni</a>
          <a class="dropdown-item" href="{{route('frontend-press-release-gallery')}}">Basın Görselleri</a>
          <a class="dropdown-item" href="{{route('frontend-announcements')}}">Duyurular</a>
          <a class="dropdown-item" href="{{route('frontend-press')}}">Basında</a>
        </div>
      </li>


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          SPONSORLAR
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <span class="dropdown-menu-arrow"></span>
          <a class="dropdown-item" href="{{route('sponsorship-program')}}">Sponsorluk Programı</a>
          <a class="dropdown-item" href="{{route('sponsorship')}}">Sponsorlar</a>
        </div>
      </li>


      <li class="nav-item ">
        <a class="nav-link" href="#">
          BAĞIŞ YAP
        </a>
      </li>


      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
           aria-haspopup="true" aria-expanded="false">
          HAKKIMIZDA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <span class="dropdown-menu-arrow"></span>
          <a class="dropdown-item" href="{{route('corporate')}}">Kurumsal</a>
          <a class="dropdown-item" href="{{route('work-model')}}">Çalışma Modeli</a>
          <a class="dropdown-item" href="{{route('open-quests')}}">Açık Görevler</a>
          <a class="dropdown-item" href="{{route('contact')}}">İletişim</a>
          <a class="dropdown-item" href="#">Katılanlar</a>
        </div>
      </li>


    </ul>
  </div>
</nav>


<!-- Menü -->
