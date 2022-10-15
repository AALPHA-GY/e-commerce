@extends('layouts.contentLayoutMaster')
{{-- page title --}}
@section('title','Mükellef Uygulaması | Bildirim Gönder')
{{-- vendor styles --}}
@section('vendor-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/pickers/pickadate/pickadate.css')}}">
@endsection
{{-- page styles --}}
@section('page-styles')
    <link rel="stylesheet" type="text/css" href="{{asset('css/pages/app-invoice.css')}}">
@endsection

@section('content')
    <!-- app invoice View Page -->
    <section class="invoice-edit-wrapper">
        <div class="row">
            <!-- invoice view page -->
            <div class="col-xl-9 col-md-8 col-12">
                <div class="card">
                    <div class="card-body pb-0 mx-25">
                        <!-- logo and title -->
                        <div class="row my-2 py-50">
                            <div class="col-sm-12 col-12 order-2 order-sm-1">
                                <h4 class="text-primary">Bildirim Başlığı</h4>
                                <input type="text" class="form-control" placeholder="Bildirim Başlığı">
                            </div>
                        </div>
                        <hr>
                        <!-- invoice address and contact -->
                        <div class="row invoice-info">
                            <div class="col-lg-12 col-md-12 mt-25">
                                <h6 class="invoice-to">Bildirim Detayları</h6>
                                <fieldset class="invoice-address form-group">
                                    <textarea class="form-control" rows="4" placeholder="Bildirim açıklama"></textarea>
                                </fieldset>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="card-body pt-50">
                        <!-- product details table-->
                        <div class="invoice-product-details ">
                            <form id="ntf-form" class="form invoice-item-repeater">
                                <div data-repeater-list="group-a">
                                    <div data-repeater-item>
                                        <div class="row mb-50">
                                            <div class="col-6 col-md-6 invoice-item-title">Gönderilecek Kişi</div>
                                            <div class="col-6 invoice-item-title">Firma Adı</div>
                                        </div>
                                        <div class="invoice-item border rounded mb-1">
                                            <div class="invoice-item-filed row pt-1 px-1">
                                                <div class="col-12 col-md-6 form-group">
                                                    <select style="width: 100%" class="form-control invoice-item-select">
                                                        <option value="Frest Admin Template">Frest Admin Template
                                                        </option>
                                                        <option value="Stack Admin Template">Stack Admin Template
                                                        </option>
                                                        <option value="Robust Admin Template">Robust Admin Template
                                                        </option>
                                                        <option value="Apex Admin Template">Apex Admin Template</option>
                                                        <option value="Modern Admin Template">Modern Admin Template
                                                        </option>
                                                    </select>
                                                </div>
                                                <div class="col-md-5 col-12 form-group">
                                                    <input type="text" class="form-control" placeholder="0">
                                                </div>
                                                <div class="text-right col-md-1 col-12 d-flex flex-column invoice-icon ">
                      <span class="cursor-pointer" data-repeater-delete>
                        <i class="bx bx-x"></i>
                      </span>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col p-0">
                                        <button class="btn btn-light-primary btn-sm" data-repeater-create type="button">
                                            <i class="bx bx-plus"></i>
                                            <span class="invoice-repeat-btn">Gönderilecek Kişi Ekle</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- invoice action  -->
            <div class="col-xl-3 col-md-4 col-12">
                <div class="card invoice-action-wrapper shadow-none border">
                    <div class="card-body">
                        <div class="invoice-action-btn mb-1">
                            <button class="btn btn-primary btn-block invoice-send-btn">
                                <i class="bx bx-send"></i>
                                <span><a style="text-decoration: none; color: white" href="javascript:$('#ntf-form').submit();">Bildirimi Gönder</a></span>
                            </button>
                        </div>
                    </div>
                </div>
{{--                <div class="invoice-payment">--}}
{{--                    <div class="invoice-payment-option mb-2">--}}
{{--                        <p>Accept payments via</p>--}}
{{--                        <select name="payment" id="paymentOption" class="form-control bg-transparent">--}}
{{--                            <option value="DebitCard">Debit Card</option>--}}
{{--                            <option value="DebitCard">Credit Card</option>--}}
{{--                            <option value="DebitCard">Paypal</option>--}}
{{--                            <option value="DebitCard">Internet Banking</option>--}}
{{--                            <option value="DebitCard">UPI Transfer</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    <div class="invoice-terms">--}}
{{--                        <div class="d-flex justify-content-between py-50">--}}
{{--                            <span class="invoice-terms-title">Payment Terms</span>--}}
{{--                            <div class="custom-control custom-switch custom-switch-glow">--}}
{{--                                <input type="checkbox" class="custom-control-input" checked id="paymentTerm">--}}
{{--                                <label class="custom-control-label" for="paymentTerm">--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between py-50">--}}
{{--                            <span class="invoice-terms-title">Client Notes</span>--}}
{{--                            <div class="custom-control custom-switch custom-switch-glow">--}}
{{--                                <input type="checkbox" class="custom-control-input" checked id="clientNote">--}}
{{--                                <label class="custom-control-label" for="clientNote">--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between py-50">--}}
{{--                            <span class="invoice-terms-title">Payment Stub</span>--}}
{{--                            <div class="custom-control custom-switch custom-switch-glow">--}}
{{--                                <input type="checkbox" class="custom-control-input" id="paymentstub">--}}
{{--                                <label class="custom-control-label" for="paymentstub">--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>
@endsection

{{-- vendor scripts --}}
@section('vendor-scripts')
    <script src="{{asset('vendors/js/pickers/pickadate/picker.js')}}"></script>
    <script src="{{asset('vendors/js/pickers/pickadate/picker.date.js')}}"></script>
    <script src="{{asset('vendors/js/forms/repeater/jquery.repeater.min.js')}}"></script>
@endsection
{{-- page scripts --}}
@section('page-scripts')
    <script src="{{asset('js/scripts/pages/app-invoice.js')}}"></script>
@endsection
