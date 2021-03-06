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
                                    <form method="POST" action=" {{ route('admin.carinsurance.update') }} ">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="home" value="{{ $insurance->id }}">

                                        <label for="name">Nombre</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="name" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $insurance->name }}"/>
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
                                                <input type="number" id="price" name="price"  class="form-control @error('price') is-invalid @enderror" value="{{ $insurance->price }}" />
                                            </div>

                                            @error('price')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="plate">Matr??cula</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="plate" name="plate" class="form-control @error('plate') is-invalid @enderror" value="{{ $insurance->CarInsurance->plate }}"/>
                                            </div>

                                            @error('plate')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="fuel">Combustible</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="fuel" name="fuel" class="form-control @error('fuel') is-invalid @enderror" value="{{ $insurance->CarInsurance->fuel }}"/>
                                            </div>

                                            @error('plate')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="car">Coche</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="car" name="car" class="form-control @error('car') is-invalid @enderror" value="{{ $insurance->CarInsurance->car }}"/>
                                            </div>

                                            @error('car')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="postalCode">A??o</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="date" id="year" name="year" class="form-control @error('year') is-invalid @enderror" value="{{ $insurance->CarInsurance->year }}" />
                                            </div>
                                                <input type="hidden" id="id" name="id" value="{{ $insurance->CarInsurance->insurance_id }}">
                                            @error('year')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>

                                        <br>
                                        <input type="submit" class="btn btn-warning m-t-15 waves-effect" value="Editar seguro de hogar">
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
