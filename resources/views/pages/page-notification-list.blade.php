@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Bildirim Listesi')
{{-- vendor styles --}}
@section('vendor-styles')
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/tables/datatable/buttons.bootstrap4.min.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
  <link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-users.css')}}">
@endsection
@section('content')
  <!-- users list start -->
  <section class="users-list-wrapper">
    <div class="row">
    <div class="col-xl-9 col-md-8 col-12 users-list-table">
      <div class="card invoice-print-area">
        <div class="card-body">
          <!-- datatable start -->
          <div class="table-responsive">
            <table id="users-list-datatable" class="table">
              <thead>
              <tr>
                <th>Id</th>
                <th>Resim</th>
                <th>Başlık</th>
                <th>Bildirim İçerik</th>
                <th>İletilen Kişi Sayısı</th>
                <th>İşlem</th>
              </tr>
              </thead>
              <tbody>
              @foreach($notifications as $nt)
              <tr>
                <td>{{$nt->id}}</td>
                <td><img class="rounded-circle mr-1" src="{{asset('images/cards/1.png')}}"
                  alt="card">
                </td>
                <td ><a href="{{route('notifications.show',$nt->id)}}">{{$nt->title}}</a> </td>
                <td>{{$nt->description}}</td>
                <td >{{$nt->notification_user_details->count()}} Kişi</td>
                <td><a href="{{route('notifications.show',$nt->id)}}"><i class="bx bx-edit-alt"></i></a></td>
              </tr>
              @endforeach
              </tbody>
            </table>
          </div>
          <!-- datatable ends -->
        </div>
      </div>
    </div>
    <!-- invoice action  -->
    <div class="col-xl-3 col-md-4 col-12">
      <div class="card invoice-action-wrapper shadow-none border">
        <div class="card-body">
          <div class="invoice-action-btn">
            <button class="btn btn-primary btn-block invoice-send-btn">
              <i class="bx bx-send"></i>
              <span><a href="{{route('notifications.create')}}" style="text-decoration: none; color: white">Yeni Bildirim Gönder</a></span>
            </button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- users list ends -->
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
  <script src="{{asset('vendors/js/tables/datatable/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/dataTables.buttons.min.js')}}"></script>
  <script src="{{asset('vendors/js/tables/datatable/buttons.bootstrap4.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-scripts')
  <script src="{{asset('js/scripts/pages/app-users.js')}}"></script>
@endsection
