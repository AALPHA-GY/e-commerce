@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Mükellef Uygulaması | Bildirim Detayı')
{{-- styles --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-invoice.css')}}">
@endsection
@section('content')
    <!-- app invoice View Page -->
    <section class="invoice-view-wrapper">
        <div class="row">
            <!-- invoice view page -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card invoice-print-area">
                    <div class="card-body pb-0 mx-25">
                        <!-- header section -->
                        <div class="row">
                            <div class="col-lg-4 col-md-12">
                                <span class="invoice-number mr-50">Bildirim Id#</span>
                                <span>{{$notification->id}}</span>
                            </div>
                            <div class="col-lg-8 col-md-12">
                                <div class="d-flex align-items-center justify-content-lg-end flex-wrap">
                                    <div class="mr-3">
                                        <small class="text-muted">Bildirim Tarihi:</small>
                                        <span>{{$notification->created_at->format('d/m/Y H:i:s')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- logo and title -->
                        <div class="row my-2 my-sm-3">
                            <div class="col-sm-6 col-12 text-center text-sm-left order-2 order-sm-1">
                                <h4 class="text-primary">{{$notification->title}}</h4>
                            </div>
                            <div class="col-sm-6 col-12 text-center text-sm-right order-1 order-sm-2 d-sm-flex justify-content-end mb-1 mb-sm-0">
{{--                                <img src="{{asset('images/pages/pixinvent-logo.png')}}" alt="logo" height="46" width="164">--}}
                            </div>
                        </div>
                        <hr>
                        <!-- invoice address and contact -->
                        <div class="row invoice-info">
                            <div class="col-sm-12 col-12 mt-1">
                                <h6 class="invoice-from">Bildirim İçeriği</h6>
                                <p>{{$notification->description}}</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <!-- product details table-->
                    <div class="invoice-product-details table-responsive">
                        <table class="table table-borderless mb-0">
                            <thead>
                            <tr class="border-0">
                                <th scope="col">Gönderilen Kişi</th>
                                <th scope="col">Firma Ünvanı</th>
                                <th scope="col">Okunma Durum</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($notification->notification_user_details as $detail)
                            <tr>
                                <td>{{$detail->user->name}}</td>
                                <td>{{$detail->user->company_name}}</td>

                                @switch($detail->read)
                                    @case(1)
                                    <td><div class="badge badge-success mb-1">Okundu</div></td>
                                    @break
                                    @default
                                    <td><div class="badge badge-danger mb-1">Okunmadı</div></td>
                                @endswitch

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
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
                                <span><a href="" style="text-decoration: none; color: white">Yeni Bildirim Gönder</a></span>
                            </button>
                        </div>
                        <div class="invoice-action-btn">
                            <button class="btn btn-light-primary btn-block invoice-print">
                                <span>Yazdır</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
{{-- page scripts --}}
@section('page-scripts')
    <script src="{{asset('js/scripts/pages/app-invoice.js')}}"></script>
@endsection
