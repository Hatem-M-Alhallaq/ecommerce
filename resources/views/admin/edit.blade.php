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

        <!-- Vertical form options -->
        <div class="row">
            <div class="col-md-6">

                <!-- Basic layout-->
                <div class="card">
                    <div class="card-header header-elements-inline">
                        <h5 class="card-title">Creat a name</h5>
                        <div class="header-elements">
                            <div class="list-icons">
                                <a class="list-icons-item" data-action="collapse"></a>
                                <a class="list-icons-item" data-action="reload"></a>
                                <a class="list-icons-item" data-action="remove"></a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{route('admin.store')}}">
                            @csrf

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

                            <div class="form-group">
                                <label for="full_name">Full Name:</label>
                                <input type="text" name="full_name" id="full_name" class="form-control"
                                    placeholder="Enter full name" value="{{$admin->full_name}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Enter email" value="{{$admin->email}}">
                            </div>
                            <div class="form-group">
                                <label for="mobile">mobile:</label>
                                <input type="number" name="mobile" id="mobile" class="form-control"
                                    placeholder="Enter mobile number" value="{{$admin->mobile}}">
                            </div>
                            <div class="form-group">
                                <label for="adderss">adderss:</label>
                                <input type="text" name="adderss" id="adderss" class="form-control"
                                    placeholder="Enter adderss" value="{{$admin->address}}">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status"
                                        @if($admin->status)checked
                                    @endif>
                                    Active
                                </label>
                            </div>
                            {{-- <div class="form-group">
                                <label for="permission_id">permission id:</label>
                                <input type="number" name="permission_id" id="permission_id" class="form-control" placeholder="Enter email">
                            </div> --}}

                            {{-- <div class="card-body">
                                <div class="form-group">
                                    <label>category</label>
                                    <select class="form-select" name="category_id">
                                        <option value="">Select a category</option>
                                        @foreach ($categories as $category)
                                        {{-- @if($form->category_id == $category->id)
                                        selected @endif --}}
                            {{-- <option value="{{$category->id}}"> {{$category->name}} </option>
                            @endforeach
                            </select>
                    </div>
                </div> --}}

                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Store</button>
                </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
<!-- /vertical form options -->


</div>
<!-- /content area -->

</div>
<!-- /main content -->
@endsection