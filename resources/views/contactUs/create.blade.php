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
        <form method="POST" action="{{route('contactUs.store')}}">
            @csrf
            <!-- Vertical form options -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title"></h5>
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
                                <label class="col-form-label col-md-2" for="date_available">from</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="date_available" id="date_available">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="date_available">to </label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="date_available" id="date_available">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="title"> title:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="title" id="title" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="details">details:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="details" id="details" cols="3"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status">
                                    Active
                                </label>
                            </div>
                            
                            
                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Store</button>
                            </div>
                        </div>
                    </div>
                    <!-- /basic layout -->
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