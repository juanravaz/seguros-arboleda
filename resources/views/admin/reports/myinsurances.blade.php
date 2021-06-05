@extends('admin.layouts.admin')
@section('content')
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">


    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users list start -->
                <section class="app-user-list">
                    <!-- users filter start -->
                    <!-- users filter end -->
                    <!-- list section start -->
                    <div class="card">
                        <div class="card-datatable table-responsive pt-0">
                            <h3 class="text-center mt-2">Seguros de coche</h3>
                            <table class="user-list-table table tabla coche" aria-describedby="table" id="table" >
                                <thead class="thead-light">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Precio</th>
                                    <th>Matrícula</th>
                                    <th>Combustible</th>
                                    <th>Coche</th>
                                    <th>Año</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                                </thead>
                                @foreach($cars as $insurance)
                                    <tr>
                                        <td>{{$insurance->name}}</td>
                                        <td>{{$insurance->price}} &euro;</td>
                                        <td>{{$insurance->carinsurance->plate}}</td>
                                        <td>{{$insurance->carinsurance->fuel}}</td>
                                        <td>{{$insurance->carinsurance->car}}</td>
                                        <td>{{$insurance->carinsurance->year}}</td>

                                        <td style="text-align: center;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <p><a href="{{ route('admin.report.pdf' , $insurance->id)  }}" class="btn btn-xs btn-success">PDF</a></p>
                                                    </div>
                                                    <div class="col">
                                                        <p><a href="{{ route('admin.email' , $insurance->id)  }}" class="btn btn-xs btn-info">Email</a></p>
                                                    </div>
                                                    <div class="col">
                                                        <p><a href="{{ url('/report/create/'.$insurance->id)}}" class="btn btn-xs btn-warning">Avería</a></p>
                                                    </div>
                                                    <div class="col">
                                                        <p><a href="{{ url('/report/create/'.$insurance->id)}}" class="btn btn-xs btn-danger">Baja</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        </div>

                        <!-- Modal to add new user Ends-->
                    </div>
            @if(empty($homes))
            <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <h3 class="text-center mt-2">Seguros de hogar</h3>
                    <table class="user-list-table table tabla" aria-describedby="table" id="table" >
                        <thead class="thead-light">
                        <tr>
                            <th>Nombre</th>
                            <th>Precio</th>
                            <th>Calle</th>
                            <th>Metros Cuadrados</th>
                            <th>Código Postal</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                        </thead>
                        @foreach($homes as $insurance)
                            <tr>
                                <td>{{$insurance->name}}</td>
                                <td>{{$insurance->price}} &euro;</td>
                                <td>{{$insurance->insurance->street}}</td>
                                <td>{{$insurance->insurance->m2}} m<sup>2</sup></td>
                                <td>{{$insurance->insurance->postalCode}}</td>
                                <td style="text-align: center;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col">

                                            </div>
                                            <div class="col">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>

            <!-- Modal to add new user Ends-->
        </div>
        @endif
        @if(empty($lifes))
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <h3 class="text-center mt-2">Seguros de vida</h3>
                <table class="user-list-table table tabla" aria-describedby="table" id="table" >
                    <thead class="thead-light">
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Cumpleaños</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                    </thead>
                    @foreach($lifes as $insurance)
                        <tr>
                            <td>{{$insurance->name}}</td>
                            <td>{{$insurance->price}} &euro;</td>
                            <td>{{$insurance->insurance->DNI}}</td>
                            <td>{{$insurance->insurance->Name}}</td>
                            <td>{{$insurance->insurance->Birth}}</td>

                            <td style="text-align: center;">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">

                                        </div>
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
        @endif

        <!-- Modal to add new user Ends-->
    </div>
                    <!-- list section end -->
                </section>
                <!-- users list ends -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

@endsection
