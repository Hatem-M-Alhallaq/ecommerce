@extends('layouts.index')

@section('styles')

@section('scripts')

<script src="{{url('/')}}/js/crud.js"></script>

<script>
    function performDestroy(id, reference){
    let url = '/admin/'+id;
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
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Form Layouts</span> -
                        Vertical</h4>
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
                <h5 class="card-title">Main</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>
            <table class="table table-togglable table-hover">
                <thead>
                    <tr class="bg-teal-400">
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>email</th>
                        <th>mobile</th>
                        <th>adderss</th>
                        <th>permission id</th>
                        <th>status</th>
                        <th>created at</th>
                        <th>updated at</th>
                        <th>Setting</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <span hidden>{{$counter = 0}}</span> --}}
                    @foreach ($admins as $admin)
                    <tr>
                        {{-- <span class="tag tag-success">Approved</span>s --}}
                        {{-- <td><span class="badge bg-info">#{{++$counter}}</span></td> --}}
                        <td>{{$admin->id}}</td>
                        <td>{{$admin->full_name}}</td>
                        <td>{{$admin->email}}</td>
                        <td>{{$admin->mobile}}</td>
                        <td>{{$admin->adderss}}</td>
                        <td>{{$admin->permission_id}}</td>
                        <td>
                            @if($admin->status)
                            <span class="badge bg-success">{{$admin->activity_status}}</span>
                            @else
                            <span class="badge badge-danger">{{$admin->activity_status}}</span>
                            @endif
                        </td>
                        <td>{{$admin->created_at}}</td>
                        <td>{{$admin->updated_at}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('admin.edit',$admin->id)}}" class="btn btn-info">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" onclick="performDestroy({{$admin->id}}, this)" class="btn btn-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
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