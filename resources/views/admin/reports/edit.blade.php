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
                                    <form method="POST" action=" {{ route('admin.report.update') }} " enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="date" value="{{ $report->date }}">

                                        <div class="{{ auth()->user()->role == "admin" ? '' : 'hidden' }}">
                                        <label for="date">Fecha</label>
                                        <div class="form-group">

                                            <div class="form-line">

                                                <input type="date" id="date" name="date" class="form-control @error('date') is-invalid @enderror" value="{{ $report->date }}" disabled />
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
                                                <input type="text" id="title" name="title"  class="form-control @error('title') is-invalid @enderror" value="{{ $report->title }}" />
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
                                                <input type="text" id="description" name="description" class="form-control @error('description') is-invalid @enderror" value="{{ $report->description }}" />
                                            </div>

                                            @error('description')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        </div>

                                        <label for="intervention">Intervención</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="text" id="intervention" name="intervention" class="form-control @error('intervention') is-invalid @enderror" value="{{ $report->intervention }}"/>
                                            </div>

                                            @error('intervention')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                            @enderror
                                        </div>
                                        <label for="status">Estado</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <select class="form-control show-tick" name="status" id="status">
                                                    <option value="Pendiente" {{ $report->status == "Pendiente" ? 'selected': ''  }}> Pendiente</option>
                                                    <option value="Cerrado" {{ $report->status == "Cerrado" ? 'selected': ''  }} > Cerrado</option>
                                                </select>
                                            </div>

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <label for="user_id">Técnico</label>
                                        <div class="form-group">

                                            <div class="form-line">

                                                <select class="form-control show-tick" name="user_id" id="user_id">
                                                    @if(auth()->user()->role == "technician")
                                                    <option value="{{ auth()->user()->id }}"> {{ ucfirst(auth()->user()->name) }}</option>
                                                    @endif
                                                        @if(auth()->user()->role == "admin")
                                                            @foreach($users as $user)
                                                            <option value="{{ auth()->user()->id }}"> {{ ucfirst(auth()->user()->name) }}</option>
                                                                @endforeach
                                                        @endif
                                                </select>

                                            </div>

                                            @error('user_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <label for="user_id">Resolución</label>
                                        <div class="form-group">

                                            <div class="form-line">

                                                <select class="form-control show-tick" name="resolution" id="resolution">
                                                    <option value="En Tramite" {{ $report->resolution == "En Tramite" ? 'selected': ''  }}> En Tramite</option>
                                                    <option value="Favorable" {{ $report->resolution == "Favorable" ? 'selected': ''  }} > Favorable</option>
                                                    <option value="Desfavorable" {{ $report->resolution == "Desfavorable" ? 'selected': ''  }} > Desfavorable</option>
                                                </select>
                                            </div>

                                            @error('resolution')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <label for="photos">Fotos</label>
                                        <div class="form-group">

                                            <div class="form-line">
                                                <input type="file" class="form-control" name="photos[]" multiple>
                                            </div>

                                        </div>

                                        <input type="hidden" name="id" value="{{ $report->id }}">
                                        <br>
                                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" value="Actualizar estado">
                                    </form>
                                </div>
                                <!-- Information Tab ends -->
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->
                <section>
                    <h1>Imágenes del reporte  {{ $report->title }}: </h1>
                    <div class="row">
                        @foreach ( $report->reportimages as $image)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img class="card-img-top rounded" src="{{ $image->imagen }}" alt="{{ $image->name }}">
                                <div class="card-footer">
                                    <form method="POST" action="{{ route('admin.image.destroy' , $image->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="imagen" value="{{ $image->id }}" />
                                        <input type="submit" class="form-control" value="Eliminar Imagen" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection
