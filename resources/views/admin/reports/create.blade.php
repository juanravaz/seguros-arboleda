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
                                    <form method="POST" action=" {{ route('admin.report.store') }} ">
                                        @csrf

                                        <label for="date">Fecha</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ date("Y-m-d") }}" disabled />
                                            </div>

                                            @error('date')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="title">

                                        </label>
                                        <label for="title">Título</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="title" name="title"  class="form-control @error('title') is-invalid @enderror" />
                                            </div>

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="description">Descripción</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" />
                                            </div>

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="status">Estado</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="status" name="status" class="form-control @error('status') is-invalid @enderror" disabled value="Pendiente" />
                                            </div>

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <input type="hidden" name="id" value="{{ $insurance->id }}">
                                        <br>
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Generar parte de avería">
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
