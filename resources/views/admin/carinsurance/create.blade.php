@extends('admin.layouts.admin')
@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="app-user-edit">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- Account Tab starts -->
                                <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                    <!-- users edit media object start -->
                                    <div class="media mb-2">
                                        <img src="../../../app-assets/images/avatars/7.png" alt="users avatar" class="user-avatar users-avatar-shadow rounded mr-2 my-25 cursor-pointer" height="90" width="90" />
                                        <div class="media-body mt-50">
                                            <h4>Eleanor Aguilar</h4>
                                            <div class="col-12 d-flex mt-1 px-0">
                                                <label class="btn btn-primary mr-75 mb-0" for="change-picture">
                                                    <span class="d-none d-sm-block">Change</span>
                                                    <input class="form-control" type="file" id="change-picture" hidden accept="image/png, image/jpeg, image/jpg" />
                                                    <span class="d-block d-sm-none">
                                                        <i class="mr-0" data-feather="edit"></i>
                                                    </span>
                                                </label>
                                                <button class="btn btn-outline-secondary d-none d-sm-block">Remove</button>
                                                <button class="btn btn-outline-secondary d-block d-sm-none">
                                                    <i class="mr-0" data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- users edit media object ends -->
                                    <!-- users edit account form start -->
                                    <form method="POST" action=" {{ route('admin.homeinsurance.store') }} ">
                                        @csrf

                                        <label for="name">Nombre</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" />
                                            </div>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="user">

                                        </label>
                                        <label for="price">Precio</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="number" id="price" name="price"  class="form-control @error('price') is-invalid @enderror" />
                                            </div>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="street">Plate</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="street" name="street" class="form-control @error('street') is-invalid @enderror" />
                                            </div>

                                            @error('street')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="m2">Metros cuadrados</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="number" id="m2" name="m2" class="form-control @error('m2') is-invalid @enderror" />
                                            </div>

                                            @error('m2')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="postalCode">Código postal</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="postalCode" name="postalCode" class="form-control @error('postalCode') is-invalid @enderror" />
                                            </div>

                                            @error('postalCode')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="User">Usuarios</label>
                                            <select class="form-control show-tick" name="user" id="user">
                                                @foreach ($users as  $user)
                                                    <option value="{{ $user->id }}"> {{$user->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <br>
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Crear seguro de hogar">
                                    </form>
                                </div>
                                <!-- Information Tab ends -->
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
    </div>
@endsection
