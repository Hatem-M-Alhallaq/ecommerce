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
        <form method="POST" action="{{route('vendors.update',$vendor->id)}}">
            @csrf
            @method('PUT')
            <!-- Vertical form options -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Creat a vendor</h5>
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
                                <label class="col-lg-3 col-form-label">Your name:</label>
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="first_name" id="first_name"
                                                placeholder="First name" class="form-control" value="{{$vendor->first_name}}">
                                        </div>

                                        <div class="col-md-6">
                                            <input type="text" name="last_name" id="last_name" placeholder="Last name"
                                                class="form-control" value="{{$vendor->last_name}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="display_name">display name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="display_name" id="display_name" class="form-control" value="{{$vendor->display_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="email">Email:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="email" id="email" 
                                        class="form-control" value="{{$vendor->email}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="phone">Phone :</label>
                                <div class="col-lg-9">
                                    <input type="text" name="phone" id="phone" value="{{$vendor->phone}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="fax">fax:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="fax" id="fax" class="form-control" value="{{$vendor->fax}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="company">company:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="company" id="company" value="{{$vendor->company}}"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="address1">Address 1:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="address1" id="address1"
                                        value="{{$vendor->address1}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="address2">Address 2:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="address2" id="address2"
                                        value="{{$vendor->address2}}" class="form-control">
                                </div>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status" @if($vendor->status)checked
                                    @endif>
                                    Active
                                </label>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label" for="product_status">product status:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="product_status" id="product_status" class="form-control" value="{{$vendor->product_status}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="about_us">about us:</label>
                                <div class="col-lg-9">
                                    <textarea rows="3" name="about_us" id="about_us" cols="3"
                                        class="form-control" value="{{$vendor->about_us}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>country</label>
                                <select class="form-select" name="country_id">
                                    <option value="">Select country</option>
                                    <option> </option>
                                    @endforeach
                                </select>
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
                                <label class="col-form-label col-lg-3" for="postal_code">postal_code:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="postal_code" id="postal_code" value="{{$vendor->postal_code}}"
                                        class="form-control"> </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="state">state:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="state" id="state" class="form-control" value="{{$vendor->state}}">
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-lg-3 col-form-label" for="password">Password:</label>
                                <div class="col-lg-9">
                                    <input type="password" class="form-control" name="password" id="password"
                                       value="{{$vendor->password}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-lg-3">image:</label>
                                <div class="col-lg-9">
                                    <input type="file" name="image" id="image" class="form-control" value="{{$vendor->image}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="payment_method">payment method:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="payment_method" id="payment_method" class="form-control" value="{{$vendor->payment_method}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="bank_name">bank_name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="bank_name" id="bank_name" class="form-control" value="{{$vendor->bank_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="branch_number">branch_number:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="branch_number" id="branch_number" class="form-control" value="{{$vendor->branch_number}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="swift_code">swift_code:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="swift_code" id="swift_code" class="form-control" value="{{$vendor->swift_code}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="account_name">account_name:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="account_name" id="account_name" class="form-control" value="{{$vendor->account_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="iban_number">iban_number:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="iban_number" id="iban_number" class="form-control" value="{{$vendor->iban_number}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-3" for="bank_country">bank_country:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="bank_country" id="bank_country" class="form-control" value="{{$vendor->bank_country}}">
                                </div>
                            </div>

                            <div class="text-right">
                                <button type="submit" class="btn btn-primary">Update</button>
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