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
        <form method="POST" action="{{route('store.store')}}" enctype="multipart/form-data">
            @csrf
            <!-- Vertical form options -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Creat a store</h5>
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
                                <label class="col-form-label col-lg-2" for="store_name">store name:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="store_name" id="store_name" class="form-control"
                                        placeholder="Enter store_name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="description">description:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="description" id="description" cols="3" class="form-control"
                                        placeholder="Enter your message here"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="shipping_policy">shipping policy:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="shipping_policy" id="shipping_policy" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="return_privacy">return_privacy:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="return_privacy" id="return_privacy" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="keyword">keyword:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="keyword" id="keyword" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="meta_description">meta description:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="meta_description" id="meta_description" cols="3"
                                        class="form-control" placeholder="Enter description here"></textarea>
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
                                <label class="col-form-label col-lg-2" for="tax_number">tax number:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="tax_number" id="tax_number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="mapLngLat">mapLngLat</label>
                                <div class="col-lg-9">
                                    <input type="text" name="mapLngLat" id="mapLngLat" class="form-control" value="http://">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="logo">logo</label>
                                <div class="col-lg-10">
                                    <input type="file" name="logo" id="logo" class="form-control h-auto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="banner">banner</label>
                                <div class="col-lg-10">
                                    <input type="file" name="banner" id="banner" class="form-control h-auto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="about_us">about us:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="about_us" id="about_us" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="shipping_charges">shipping charges:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="shipping_charges" id="shipping_charges" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="category">category:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="category" id="category" class="form-control">
                                </div>
                            </div>
                            {{-- <div class="card-body">
                                <div class="form-group">
                                    <label>category</label>
                                    <select class="form-select" name="category">
                                        <option value="">Select a category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}"> {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> --}}

                        </div>
                        <div class="text-center">
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
@endsection