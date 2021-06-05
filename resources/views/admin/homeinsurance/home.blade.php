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
                                @foreach($homeinsurances as $homeinsurance)
                                    <tr>
                                        <td>{{$homeinsurance->insurance->name}}</td>
                                        <td>{{$homeinsurance->insurance->price}} &euro;</td>
                                        <td>{{$homeinsurance->street}}</td>
                                        <td>{{$homeinsurance->m2}} m<sup>2</sup></td>
                                        <td>{{$homeinsurance->postalCode}}</td>
                                        <td style="text-align: center;">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <a href="{{ url('/home/insurances/edit/'.$homeinsurance->insurance->id)}}" class="btn btn-xs btn-warning">Editar</a>
                                                    </div>
                                                    <div class="col">
                                                        <form method="POST" action="{{ route('admin.homeinsurance.destroy') }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="home" value="{{ $homeinsurance->insurance->id }}">
                                                            <input type="submit" class="btn btn-xs btn-danger" value="Eliminar"/>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- Modal to add new user starts-->
                        <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
                            <div class="modal-dialog">
                                <form class="add-new-user modal-content pt-0">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
                                    <div class="modal-header mb-1">
                                        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
                                    </div>
                                    <div class="modal-body flex-grow-1">
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                            <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" name="user-fullname" aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-uname">Username</label>
                                            <input type="text" id="basic-icon-default-uname" class="form-control dt-uname" placeholder="Web Developer" aria-label="jdoe1" aria-describedby="basic-icon-default-uname2" name="user-name" />
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="basic-icon-default-email">Email</label>
                                            <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" aria-describedby="basic-icon-default-email2" name="user-email" />
                                            <small class="form-text text-muted"> You can use letters, numbers & periods </small>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="user-role">User Role</label>
                                            <select id="user-role" class="form-control">
                                                <option value="subscriber">Subscriber</option>
                                                <option value="editor">Editor</option>
                                                <option value="maintainer">Maintainer</option>
                                                <option value="author">Author</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label class="form-label" for="user-plan">Select Plan</label>
                                            <select id="user-plan" class="form-control">
                                                <option value="basic">Basic</option>
                                                <option value="enterprise">Enterprise</option>
                                                <option value="company">Company</option>
                                                <option value="team">Team</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
