@extends('layouts.index')

@section('styles')

@section('scripts')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Form Layouts</span> -
                        Vertical</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn-link btn-float text-default"><i
                                class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calculator text-primary"></i>
                            <span>Invoices</span></a>
                        <a href="#" class="btn btn-link btn-float text-default"><i class="icon-calendar5 text-primary"></i>
                            <span>Schedule</span></a>
                    </div>
                </div>
            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <a href="form_layout_vertical.html" class="breadcrumb-item">Form layouts</a>
                        <span class="breadcrumb-item active">Vertical</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">
                        <a href="#" class="breadcrumb-elements-item">
                            <i class="icon-comment-discussion mr-2"></i>
                            Support
                        </a>

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            <form method="POST" action="{{route('order.store')}}" enctype="multipart/form-data">
            @csrf
            <!-- Vertical form options -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- Basic layout-->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title">Creat an Order</h5>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                @if (session()->has('message'))
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                                        {{session('message')}}
                                    </div>
                                @endif

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Order Name</label>
                                            <select class="form-select" name="order_id">
                                                <option value=""></option>
                                                <option value="">  </option>
                                                {{--                                               @foreach ($orders as $order)--}}
                                                {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Store Name</label>
                                            <select class="form-select" name="store_id">
                                                <option value=""></option>
                                                <option value="">  </option>
                                                {{--                                               @foreach ($orders as $order)--}}
                                                {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Customer Name</label>
                                            <select class="form-select" name="customer_id">
                                                <option value=""></option>
                                                <option value="">  </option>
                                                {{--                                               @foreach ($orders as $order)--}}
                                                {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                                {{--                                                @endforeach--}}
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="firstname">First Name:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="firstname" id="firstname" class="form-control"
                                               placeholder="Enter First Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="lastname">Last Name:</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="lastname" id="lastname" class="form-control"
                                               placeholder="Enter last Name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="currency">Currency</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="currency" id="currency" class="form-control h-auto">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label " for="phone">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="phone">Date</label>
                                    <div class="col-lg-10">
                                            <input type="text" name="phone" id="phone" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label " for="shipping_method">Shipping Method</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="shipping_method" id="shipping_method" class="form-control">
                                    </div>
                                </div>
{{--                                <div class="card-body">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <label>category</label>--}}
{{--                                        <select class="form-select" name="category_id">--}}
{{--                                            <option value="">Select a category</option>--}}
{{--                                            @foreach ($orders as $order)--}}
{{--                                                <option value="{{$order->id}}"> {{$order->name}} </option>--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="order_date">Order Date</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="order_date" id="order_date" class="form-control">
                                    </div>
                                </div>
                                  <div class="card-body">
                                      <div class="form-group">
                                         <label>category</label>
                                           <select class="form-select" name="category_id">
                                              <option value="">Select a Payment Method</option>
                                               <option value="Paypal">  </option>
{{--                                               @foreach ($orders as $order)--}}
{{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
{{--                                                @endforeach--}}
                                                      </select>
                                               </div>
                                      </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="shipping_address">Shipping Address</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="shipping_address" id="shipping_address" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="sub_total">Sub Total</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="sub_total" id="sub_total" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="shipping_amount">Shipping Amount</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="shipping_amount" id="shipping_amount" class="form-control">
                                    </div>
                                </div>
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2" for="vat">VAT</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="vat" id="vat" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2" for="total">Total</label>
                                        <div class="col-lg-10">
                                            <input type="text" name="total" id="total" class="form-control">
                                        </div>
                                    </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="affiliate_value">Affiliate Value</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="affiliate_value" id="affiliate_value" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="affiliate_name">Affiliate Name </label>
                                    <div class="col-lg-10">
                                        <input type="text" name="affiliate_name" id="affiliate_name" class="form-control touchspin-no-mousewheel">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /basic layout -->
                    </div>
                    <div class="col-md-6">

                        <!-- Basic layout-->
                        <div class="card">
                            <div class="card-header header-elements-inline">
                                <h5 class="card-title"></h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="stock_status">stock status: </label>
                                    <div class="col-lg-10">
                                        <input type="text" name="stock_status" id="stock_status" class="form-control touchspin-no-mousewheel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="requir_shipping">requir shipping: </label>
                                    <div class="col-lg-10">
                                        <input type="text" name="requir_shipping" id="requir_shipping"
                                               class="form-control touchspin-no-mousewheel">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-md-2" for="date_available">date available</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" name="date_available" id="date_available">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="dimensions">dimension:</label>
                                    <div class="col-lg-10">
                                    <textarea rows="3" name="dimensions" id="dimensions" cols="3" class="form-control"
                                              placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lenght_class" class="col-form-label col-lg-2">lenght class</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="lenght_class" id="lenght_class"
                                               class="form-control form-control-sm touchspin-vertical">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="weight" class="col-form-label col-lg-2">weight</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="weight" id="weight"
                                               class="form-control form-control-sm touchspin-vertical">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="weight_class" class="col-form-label col-lg-2">weight class</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="weight_class" id="weight_class"
                                               class="form-control form-control-sm touchspin-vertical">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="sort_order">sort order:</label>
                                    <div class="col-lg-10">
                                    <textarea rows="3" name="sort_order" id="sort_order" cols="3" class="form-control"
                                              placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="status">
                                        <input type="checkbox" class="form-check-input" name="status"
                                               id="status">
                                        Active
                                    </label>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>vendor</label>
                                        <select class="form-select" name="vendor_id">
                                            <option value="">Select a vendor</option>
{{--                                            @foreach ($vendors as $vendor)--}}
{{--                                                <option value="{{$vendor->id}}"> {{$vendor->display_name}} </option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>store id</label>
                                        <select class="form-select" name="store_id">
                                            <option value="">Select a store</option>
{{--                                            @foreach ($stores as $store)--}}
{{--                                                <option value="{{$store->id}}"> {{$store->store_name}} </option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="model">model:</label>
                                    <div class="col-lg-10">
                                    <textarea rows="3" name="model" id="model" cols="3" class="form-control"
                                              placeholder="Enter your message here"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-6">
                                        <label for="old_price">old price: </label>
                                        <input type="text" name="old_price" id="old_price"
                                               class="form-control touchspin-no-mousewheel">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="price">price: </label>
                                        <input type="text" name="price" id="price"
                                               class="form-control touchspin-no-mousewheel">
                                    </div>
                                </div>

                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Store</button>
                                </div>
                            </div>
                        </div>
                        <!-- /basic layout -->
                    </div>
                </div>
            </form>
            <!-- /vertical form options -->


        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#country_id').on('change', function () {--}}
{{--                var idCountry = this.value;--}}
{{--                $("#city_id").html('');--}}
{{--                $.ajax({--}}
{{--                    url: "{{url('getCities')}}",--}}
{{--                    type: "POST",--}}
{{--                    data: {--}}
{{--                        country_id: idCountry,--}}
{{--                        _token: '{{csrf_token()}}'--}}
{{--                    },--}}
{{--                    dataType: 'json',--}}
{{--                    success: function (result) {--}}
{{--                        $('#city_id').html('<option value="">select city</option>');--}}
{{--                        $.each(result.cities, function (key, value) {--}}
{{--                            $("#city_id").append('<option value="' + value--}}
{{--                                .id + '">' + value.name + '</option>');--}}
{{--                        });--}}
{{--                    }--}}
{{--                });--}}
{{--            });--}}

{{--        });--}}

{{--    </script>--}}
@endsection
