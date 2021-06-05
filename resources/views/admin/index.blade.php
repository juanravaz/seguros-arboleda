@extends('admin.layouts.admin')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Home</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Index
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="javascript:void(0);"><i class="mr-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="javascript:void(0);"><i class="mr-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Kick start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Bienvenid@ a seguros arboleda <b>{{ ucfirst(Auth::user()->name) }} </b>🚀</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            <p>
                                Esta es la zona de administración, aquí podrá controlar sus seguros contratados y averías
                            </p>
                            <ul>
                                <li>
                                    Vuexy Admin provides you getting start pages with different layouts, use the layout as per your custom
                                    requirements and just change the branding, menu &amp; content.
                                </li>
                                <li>
                                    Every components in Vuexy Admin are decoupled, it means use use only components you actually need! Remove
                                    unnecessary and extra code easily just by excluding the path to specific SCSS, JS file.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/ Kick start -->


            </div>
        </div>
    </div>
    @endsection
