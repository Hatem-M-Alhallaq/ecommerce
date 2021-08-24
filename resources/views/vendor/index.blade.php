@extends('layouts.index')

@section('styles')

@section('scripts')

<script src="{{url('/')}}/js/crud.js"></script>

<script>
    function performDestroy(id, reference){
    let url = '/vendors/'+id;
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
                        vendors</h4>
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
                <h5 class="card-title">vendors</h5>
                <a href="{{route('vendors.create')}}" class="btn btn-success">
                    Create
                </a>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-teal-400">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>display name</th>
                        <th>email</th>
                        <th>phone</th>
                        {{-- <th>fax</th> --}}
                        <th>company</th>
                        {{-- <th>address1</th>
                        <th>address2</th> --}}
                        <th>status</th>
                        {{-- <th>product status</th> --}}
                        {{-- <th>about us</th> --}}
                        {{-- <th>country</th>
                        <th>city</th> --}}
                        {{-- <th>postal code</th>
                        <th>state</th>
                        <th> password</th> --}}
                        <th>image</th>
                        {{-- <th>payment method</th>
                        <th>bank name</th>
                        <th>branch number</th>
                        <th> swift code</th>
                        <th>account name</th>
                        <th>iban number</th>
                        <th>bank country</th> --}}
                        <th>setting</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <span hidden>{{$counter = 0}}</span> --}}
                    @foreach ($vendors as $vendor)
                    <tr>
                        <td>{{$vendor->id}}</td>
                        <td>{{$vendor->first_name}}</td>
                        <td>{{$vendor->last_name}}</td>
                        <td>{{$vendor->display_name}}</td>
                        <td>{{$vendor->email}}</td>
                        <td>{{$vendor->phone}}</td>
                        {{-- <td>{{$vendor->fax}}</td> --}}
                        <td>{{$vendor->company}}</td>
                        {{-- <td>{{$vendor->address1}}</td>
                        <td>{{$vendor->address2}}</td> --}}
                        <td>
                            @if($vendor->status)
                            <span class="badge bg-success">{{$vendor->activity_status}}</span>
                            @else
                            <span class="badge badge-danger">{{$vendor->activity_status}}</span>
                            @endif
                        </td>
                        {{-- <td>{{$vendor->product_status}}</td>
                        <td>{{$vendor->about_us}}</td> --}}
                        {{-- <td>@if(!empty($vendor->country)) {{$vendor->country->name}} @endif</td>
                        <td>@if(!empty($vendor->city)) {{$vendor->city->name}} @endif</td> --}}
                        {{-- <td>{{$vendor->postal_code}}</td>
                        <td>{{$vendor->state}}</td>
                        <td>{{$vendor->password}}</td> --}}
                        <td>{{$vendor->image}}</td>
                        {{-- <td>{{$vendor->payment_method}}</td>
                        <td>{{$vendor->bank_name}}</td>
                        <td>{{$vendor->branch_number}}</td>
                        <td>{{$vendor->swift_code}}</td>
                        <td>{{$vendor->account_name}}</td>
                        <td>{{$vendor->iban_number}}</td>
                        <td>{{$vendor->bank_country}}</td> --}}
                        <td>
                            <div class="btn-group">
                                {{-- class="badge badge-flat border-success text-success-600 ml-2" --}}
                                <a href="{{route('vendors.edit',$vendor->id)}}" class="badge btn-info">
                                    Edit
                                </a>
                                <a href="#" onclick="performDestroy({{$vendor->id}}, this)" class="badge badge-danger">
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