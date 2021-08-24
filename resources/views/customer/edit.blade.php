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
            <form method="POST" action="{{route('customers.update', $customers->id)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="first_name">First Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="first_name" id="first_name" value="{{$customers->first_name}}" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="last_name">Last Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="last_name" id="last_name" value="{{$customers->last_name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="email">Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="email" id="email" value="{{$customers->email}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="phone">Phone</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="password">Password</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="password" id="password" value="{{$customers->password}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="image">Image</label>
                                    <div class="col-lg-10">
                                        <input type="file" name="image" id="image" value="{{$customers->image}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="identity">Identity</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="identity" id="identity" value="{{$customers->identity}}" class="form-control">
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-select" name="status" value="{{$customers->status}}">
                                            {{--                                               @foreach ($orders as $order)--}}
                                            {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                            {{--                                                @endforeach--}}
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-select" name="two_factor" value="{{$customers->two_factor}}">
                                            {{--                                               @foreach ($orders as $order)--}}
                                            {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                            {{--                                                @endforeach--}}
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Group</label>
                                        <select class="form-select" name="group" value="{{$customers->group}}">
                                            {{--                                               @foreach ($orders as $order)--}}
                                            {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                            {{--                                                @endforeach--}}
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="affiliate">Affiliate</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="affiliate" id="affiliate" value="{{$customers->affiliate}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="news_letter">News Letter</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="news_letter" id="news_letter" value="{{$customers->news_letter}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="company">Company</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="company" id="company" value="{{$customers->company}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="website">Website</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="website" id="website" value="{{$customers->website}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="tracking_code">Tracking Code</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="tracking_code" id="tracking_code" value="{{$customers->tracking_code}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="commission">Commission</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="commission" id="commission" value="{{$customers->commission}}" class="form-control">
                                    </div>
                                </div>


                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Group</label>
                                        <select class="form-select" name="payment_method" value="{{$customers->payment_method}}">
                                            {{--                                               @foreach ($orders as $order)--}}
                                            {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                            {{--                                                @endforeach--}}
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="paypal_email">Paypal Email</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="paypal_email" id="paypal_email" value="{{$customers->paypal_email}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="bank_name">Bank Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="bank_name" id="bank_name" value="{{$customers->bank_name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="swift_code">Swift Code</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="swift_code" id="swift_code" value="{{$customers->swift_code}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="account_name">Accoun Name</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="account_name" id="account_name" value="{{$customers->account_name}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="account_number">Account Number</label>
                                    <div class="col-lg-10">
                                        <input type="text" name="account_number" id="account_number"  value="{{$customers->account_number}}" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-form-label col-lg-2" for="iban">iban </label>
                                    <div class="col-lg-10">
                                        <input type="text" name="iban" id="iban" value="{{$customers->iban}}" class="form-control">
                                    </div>
                                </div>


                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Group</label>
                                        <select class="form-select" name="country_id" value="{{$customers->country_id}}">
                                            {{--                                               @foreach ($orders as $order)--}}
                                            {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                            {{--                                                @endforeach--}}
                                        </select>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Group</label>
                                        <select class="form-select" name="city_id" value="{{$customers->city_id}}">
                                            {{--                                               @foreach ($orders as $order)--}}
                                            {{--                                                      <option value="{{$order->id}}"> {{$order->name}} </option>--}}
                                            {{--                                                @endforeach--}}
                                        </select>
                                    </div>
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
