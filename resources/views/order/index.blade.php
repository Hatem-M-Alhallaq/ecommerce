@extends('layouts.index')

@section('styles')

@section('scripts')

    <script src="{{url('/')}}/js/crud.js"></script>

    <script>
        function performDestroy(id, reference){
            let url = '/order/'+id;
            confirmDestroy(url, reference);
        }
    </script>
@endsection

@section('content')

    <div class="content">
        <div class="content-wrapper">

            <!-- Page header -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Form </span> -
                            Products</h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                    <div class="header-elements d-none">
                        <div class="d-flex justify-content-center">
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calculator text-primary"></i>
                                <span>Invoices</span></a>
                            <a href="#" class="btn btn-link btn-float text-default"><i
                                    class="icon-calendar5 text-primary"></i>
                                <span>Schedule</span></a>
                        </div>
                    </div>
                </div>

                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                            <a href="form_layout_vertical.html" class="breadcrumb-item">Admin layouts</a>
                            <span class="breadcrumb-item active">index</span>
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

            <!-- Table with togglable columns -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Orders</h5>
                    <div class="header-elements">
                        <a href="{{route('order.create')}}" class="btn btn-success" >
                            Create
                        </a>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                    <tr class="bg-teal-400">
                        <th>ID</th>
                        <th>store_id</th>
                        <th>Currency</th>
                        <th>customer_id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Shipping Method</th>
                        <th>Order Date</th>
                        <th>Payment Method</th>
                        <th>Shipping Address</th>
                        <th>sub_totle</th>
                        <th>shipping_amount</th>
                        <th>VAT</th>
                        <th>Total</th>
                        <th>affiliate_value</th>
                        <th>affiliate_id</th>

                    </tr>
                    </thead>
                    <tbody>

{{--                    @foreach ($orders as $order)--}}
{{--                        <tr>--}}

{{--                            <td>{{$order->id}}</td>--}}
{{--                            <td>{{$order->store_id}}</td>--}}
{{--                            <td>{{$order->currency}}</td>--}}
{{--                            <td>{{$order->customer_id}}</td>--}}
{{--                            <td>{{$order->first_name}}</td>--}}
{{--                            <td>{{$order->last_name}}</td>--}}
{{--                            <td>{{$order->phone}}</td>--}}
{{--                            <td>{{$order->date}}</td>--}}
{{--                            <td>{{$order->shipping_method}}</td>--}}
{{--                            <td>{{$order->order_date}}</td>--}}
{{--                            <td>{{$order->payment_method}}</td>--}}
{{--                            <td>{{$order->shipping_address}}</td>--}}
{{--                            <td>{{$order->sub_totle}}</td>--}}
{{--                            <td>{{$order->shipping_amount}}</td>--}}
{{--                            <td>{{$order->VAT}}</td>--}}
{{--                            <td>{{$order->total}}</td>--}}
{{--                            <td>{{$order->affiliate_value}}</td>--}}
{{--                            <td>{{$order->affiliate_id}}</td>--}}

{{--                            --}}{{--                            <td>@if(!empty($product->vendor)){{$product->vendor->display_name}} @endif</td>--}}

{{--                        </tr>--}}
{{--                    @endforeach--}}
                    </tbody>
                </table>
            </div>
            <!-- /table with togglable columns -->
        </div>
    </div>
@endsection
