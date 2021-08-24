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
        <form method="POST" action="{{route('products.update', $prodact->id)}}">
            @csrf
            @method('PUT')
            <!-- Vertical form options -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Basic layout-->
                    <div class="card">
                        <div class="card-header header-elements-inline">
                            <h5 class="card-title">Creat a product</h5>
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
                                <label class="col-form-label col-lg-2" for="name">name:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="name" id="name" class="form-control"
                                        placeholder="Enter name" value="{{$prodact->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="details">Details:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="details" id="details" cols="3" class="form-control"
                                        placeholder="Enter your message here" value="{{$prodact->details}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="image">image</label>
                                <div class="col-lg-10">
                                    <input type="file" name="image" id="image" class="form-control h-auto"
                                        value="{{$prodact->image}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label " for="meta_tags">meta tags:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="meta_tags" id="meta_tags" class="form-control"
                                        value="{{$prodact->meta_tags}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="meta_description">meta description:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="meta_description" id="meta_description" cols="3"
                                        class="form-control" placeholder="Enter description here"
                                        value="{{$prodact->meta_description}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label " for="product_tags">product tags:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="product_tags" id="product_tags" class="form-control"
                                        value="{{$prodact->product_tags}}">
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>category</label>
                                    <select class="form-select" name="category_id">
                                        <option value="">Select a category</option>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if($prodact->category_id == $category->id)
                                            selected @endif> {{$category->name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="sku">sku:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="sku" id="sku" class="form-control"
                                        value="{{$prodact->sku}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="upc">upc:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="upc" id="upc" class="form-control"
                                        value="{{$prodact->upc}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="EAN">EAN:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="EAN" id="EAN" class="form-control"
                                        value="{{$prodact->EAN}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="JAN">JAN:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="JAN" id="JAN" class="form-control"
                                        value="{{$prodact->JAN}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="MPN">MPN:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="MPN" id="MPN" class="form-control"
                                        value="{{$prodact->MPN}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="country">country:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="country" id="country" class="form-control"
                                        value="{{$prodact->country}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="city">city:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="city" id="city" class="form-control"
                                        value="{{$prodact->city}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="tax">tax:</label>
                                <div class="col-lg-10">
                                    <input type="text" name="tax" id="tax" class="form-control"
                                        value="{{$prodact->tax}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="minimum_qnty">minimum qntity: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="minimum_qnty" id="minimum_qnty"
                                        class="form-control touchspin-no-mousewheel" value="{{$prodact->minimum_qnty}}">
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
                                    <input type="text" name="stock_status" id="stock_status"
                                        class="form-control touchspin-no-mousewheel" value="{{$prodact->stock_status}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="requir_shipping">requir shipping: </label>
                                <div class="col-lg-10">
                                    <input type="text" name="requir_shipping" id="requir_shipping"
                                        class="form-control touchspin-no-mousewheel"
                                        value="{{$prodact->requir_shipping}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-2" for="date_available">date available</label>
                                <div class="col-md-10">
                                    <input class="form-control" type="date" name="date_available" id="date_available"
                                        value="{{$prodact->date_available}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="dimensions">dimension:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="dimensions" id="dimensions" cols="3" class="form-control"
                                        placeholder="Enter your message here"
                                        value="{{$prodact->dimensions}}"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lenght_class" class="col-form-label col-lg-2">lenght class</label>
                                <div class="col-lg-10">
                                    <input type="text" name="lenght_class" id="lenght_class"
                                        class="form-control form-control-sm touchspin-vertical"
                                        value="{{$prodact->lenght_class}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="weight" class="col-form-label col-lg-2">weight</label>
                                <div class="col-lg-10">
                                    <input type="text" name="weight" id="weight"
                                        class="form-control form-control-sm touchspin-vertical"
                                        value="{{$prodact->weight}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="weight_class" class="col-form-label col-lg-2">weight class</label>
                                <div class="col-lg-10">
                                    <input type="text" name="weight_class" id="weight_class"
                                        class="form-control form-control-sm touchspin-vertical"
                                        value="{{$prodact->weight_class}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="sort_order">sort order:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="sort_order" id="sort_order" cols="3" class="form-control"
                                        placeholder="Enter your message here"
                                        value="{{$prodact->sort_order}}"></textarea>
                                </div>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" class="form-check-input" name="status" id="status"
                                        @if($prodact->status)checked
                                    @endif>
                                    Active
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>vendor</label>
                                    <select class="form-select" name="vendor_id">
                                        <option value="">Select a vendor</option>
                                        @foreach ($vendors as $vendor)
                                        <option value="{{$vendor->id}}" @if($prodact->vendor_id == $vendor->id)
                                            selected @endif> {{$vendor->display_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>store id</label>
                                    <select class="form-select" name="store_id">
                                        <option value="">Select a store</option>
                                        @foreach ($stores as $store)
                                        <option value="{{$store->id}}" @if($prodact->store_id == $store->id)
                                            selected @endif> {{$store->store_name}} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2" for="model">model:</label>
                                <div class="col-lg-10">
                                    <textarea rows="3" name="model" id="model" cols="3" class="form-control"
                                        placeholder="Enter your message here" value="{{$prodact->model}}"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label for="old_price">old price: </label>
                                    <input type="text" name="old_price" id="old_price"
                                        class="form-control touchspin-no-mousewheel" value="{{$prodact->old_price}}">
                                </div>
                                <div class="form-group col-6">
                                    <label for="price">price: </label>
                                    <input type="text" name="price" id="price"
                                        class="form-control touchspin-no-mousewheel" value="{{$prodact->price}}">
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