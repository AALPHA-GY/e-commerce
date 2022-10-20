@extends('layouts.contentLayoutMaster')
{{-- page Title --}}
@section('title','Mükellef Uygulaması | Anasayfa')
{{-- vendor css --}}
@section('vendor-styles')
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/swiper.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/extensions/shepherd.min.css')}}">
@endsection
@section('page-styles')
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/extensions/swiper.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/pages/faq.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/plugins/tour/tour.css')}}">
@endsection

@section('content')
  <!-- Dashboard Ecommerce Starts -->
  {{--<section id="dashboard-ecommerce">--}}
  {{--  <div class="row">--}}
  {{--    <!-- Greetings Content Starts -->--}}
  {{--    <div class="col-xl-12 col-md-12 col-12 dashboard-greetings">--}}
  {{--      <div class="card">--}}
  {{--        <div class="card-header">--}}
  {{--          <h3 class="greeting-text">Hoşgeldiniz</h3>--}}
  {{--        </div>--}}
  {{--        <div class="card-body mt-0">--}}
  {{--          <p>Yönetim paneline hoş geldiniz tanıtım için lütfen turu başlatınız</p>--}}
  {{--          <div class="btn btn-outline-primary" id="tour">Turu Başlat</div>--}}
  {{--        </div>--}}
  {{--      </div>--}}
  {{--    </div>--}}
  {{--  </div>--}}
  {{--</section>--}}
  <!-- Dashboard Ecommerce ends -->
  <!-- faq search start -->
  <section class="faq-search">
    <div class="row">
      <div class="col-12">
        <div class="card faq-bg bg-transparent box-shadow-0 p-1 p-md-5">
          <div class="card-body p-0">
            <h1 class="faq-title text-center mb-3">Merhaba, yönetim paneline hoş geldiniz <br> size yardım edebilir miyiz?</h1>
            <form>
              <fieldset class="faq-search-width form-group position-relative w-50 mx-auto">
                <input type="text" class="form-control round form-control-lg shadow pl-2"
                       id="searchbar" placeholder="Bir içerik arayın..">
                <button class="btn btn-primary round position-absolute d-none d-sm-block" type="button">Ara</button>
                <button class="btn btn-primary round position-absolute d-block d-sm-none" type="button"><i
                    class="bx bx-search"></i></button>
              </fieldset>
            </form>
            <p class="card-text text-center mt-2 font-medium-1 text-muted">
              yada tanıtım turu için <a href="javascript:void(0)" id="tour">burayı tıklayın</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- faq search ends -->

  <!-- fab bottom start -->
  <section class="faq-bottom" style="margin-top: -60px;">
    <div class="row mb-2">
      <div class="col-12 text-center">
        <h2 class="faq-subtitle">Hala bir sorunuz mu var?</h2>
        <p class="p-2 text-muted font-medium-1">Bize aşağı yer alan iletişim bilgilerini kullanarak ulaşabilirsiniz.</p>
      </div>
    </div>
    <div class="row d-flex justify-content-center mb-2">
      <div class="col-sm-12 col-md-4 text-center border rounded p-2 mr-md-2 m-1">
        <i class="bx bx-phone-call primary font-large-1 text-muted p-50"></i>
        <h5>0 (541) 371 07 05</h5>
      </div>
      <div class="col-sm-12 col-md-4 text-center border color-gray-faq rounded p-2 m-1">
        <i class="bx bx-mail-send primary font-large-1 p-50"></i>
        <h5><a href="mailto:hello@help.com">info@erensengun.com</a></h5>
      </div>
    </div>
  </section>
  <!-- fab bottom ends -->
@endsection

@section('vendor-scripts')
  <script src="{{asset('vendors/js/extensions/swiper.min.js')}}"></script>
  <script src="{{asset('vendors/js/extensions/shepherd.min.js')}}"></script>
@endsection

@section('page-scripts')
  <script src="{{asset('js/scripts/pages/faq.js')}}"></script>
  <script src="{{asset('js/scripts/extensions/tour.js')}}"></script>
@endsection
