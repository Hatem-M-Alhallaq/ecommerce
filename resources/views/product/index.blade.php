@extends('layouts.index')

@section('styles')

@section('scripts')

<script src="{{url('/')}}/js/crud.js"></script>

<script>
    function performDestroy(id, reference){
    let url = '/products/'+id;
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
                <h5 class="card-title">products</h5>
                <div class="header-elements">
                    <a href="{{route('products.create')}}" class="btn btn-success" >
                        Create
                    </a>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-teal-400">
                        <th>ID</th>
                        <th>Name</th>
                        {{-- <th>details</th> --}}
                        <th>image</th>
                        {{-- <th>meta tags</th>
                        <th>meta description</th>
                        <th>product tags</th> --}}
                        {{-- <th>product id</th> --}}
                        {{-- <th>sku</th>
                        <th>upc</th>
                        <th>EAN</th>
                        <th>JAN</th>
                        <th>MPN</th>
                        <th>country</th>
                        <th>city</th>
                        <th>tax</th> 
                        <th>minimum qntity</th> --}}
                        {{-- <th>stock status</th>
                        <th>requir shipping</th>
                        <th>date available</th>
                        <th>dimensions</th>
                        <th>lenght class</th>
                        <th>weight</th>
                        <th>weight class</th>
                        <th>sort order</th> --}}
                        <th>status</th>
                        <th>vendor_id</th>
                        <th>store_id</th>
                        <th>model</th>
                        {{-- <th>old_price</th> --}}
                        <th>price</th>
                        <th>setting</th>
                    </tr>
                </thead>
                <tbody>

                    {{-- <span hidden>{{$counter = 0}}</span> --}}
                    @foreach ($products as $product)
                    <tr>
                        {{-- <span class="tag tag-success">Approved</span>s --}}
                        {{-- <td><span class="badge bg-info">#{{++$counter}}</span></td> --}}
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        {{-- <td>{{$product->details}}</td> --}}
                        <td>{{$product->image}}</td>
                        {{-- <td>{{$product->meta_tags}}</td> --}}
                        {{-- <td>{{$product->meta_description}}</td>
                        <td>{{$product->product_tags}}</td> --}}
                        {{-- <td>{{$product->category->name}}</td> --}}
                        {{-- <td>{{$product->sku}}</td>
                        <td>{{$product->upc}}</td>
                        <td>{{$product->EAN}}</td>
                        <td>{{$product->JAN}}</td>
                        <td>{{$product->MPN}}</td>
                        <td>{{$product->country}}</td>
                        <td>{{$product->city}}</td>
                        <td>{{$product->tax}}</td>
                        <td>{{$product->minimum_qnty}}</td>
                        <td>{{$product->stock_status}}</td>
                        <td>{{$product->requir_shipping}}</td>
                        <td>{{$product->date_available}}</td>
                        <td>{{$product->dimensions}}</td>
                        <td>{{$product->lenght_class}}</td>
                        <td>{{$product->weight}}</td>
                        <td>{{$product->weight_class}}</td>
                        <td>{{$product->sort_order}}</td> --}}
                        <td>
                            @if($product->status)
                            <span class="badge bg-success">{{$product->activity_status}}</span>
                            @else
                            <span class="badge badge-danger">{{$product->activity_status}}</span>
                            @endif
                        </td>
                        <td>@if(!empty($product->vendor)){{$product->vendor->display_name}} @endif</td>
                        <td>@if(!empty($product->vendor_store)) {{$product->vendor_store->store_name}} @endif</td>
                        <td>{{$product->model}}</td>
                        <td>
                            <span style="text-decoration: line-through;">old price :{{$product->old_price}}</span><br>
                            <div class="text-danger">new price:{{$product->price}}</div>
                        </td>

                        <td>
                            <div class="btn-group">
                                {{-- class="badge badge-flat border-success text-success-600 ml-2" --}}
                                <a href="{{route('products.edit',$product->id)}}" class="badge btn-info">
                                    Edit
                                </a>
                                <a href="#" onclick="performDestroy({{$product->id}}, this)" class="badge badge-danger">
                                    Delete </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /table with togglable columns -->
    </div>
</div>
@endsection