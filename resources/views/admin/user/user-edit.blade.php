@extends('admin.layout.master')

@section('content')
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Usuarios</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route("admin_dashboard") }}"><i class="bx bx-home-alt"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ $refer_url }}">{{ $refer_title }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $user->firstname }} {{ $user->lastname }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6> -->
            <hr />
            <div class="row">
                <div class="col-xl-7 mx-auto">
                    <div class="card border-top border-0 border-4 border-white">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-white"></i>
                                </div>
                                <h5 class="mb-0 text-white">Registrar Usuario</h5>
                            </div>
                            <hr>
                            {{ Form::open(array('route' => array('admin_user_edit_put', $user->role_id, $user->id), 'class'=>'row g-3', 'method' => 'put', 'enctype' => 'multipart/form-data', 'autocomplete' => 'off')) }}
                                <div class="col-md-6">
                                    <label for="firstname" class="form-label">Nombre</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
                                        <input type="text" class="form-control border-start-0" id="firstname" name="firstname" placeholder="Juan" value="{{ old('firstname',  $user->firstname) }}" />
                                    </div>
                                    {!! $errors->first('firstname', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
                                        <input type="text" class="form-control border-start-0" id="lastname" name="lastname" placeholder="Perez" value="{{ old('lastname', $user->lastname) }}" />
                                    </div>
                                    {!! $errors->first('lastname', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-6">
                                    <label for="position" class="form-label">Cargo</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-microphone'></i></span>
                                        <input type="text" class="form-control border-start-0" id="position" name="position" placeholder="Web Designer" value="{{ old('position', $user->position) }}" />
                                    </div>
                                    {!! $errors->first('position', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-6">
                                    <label for="inputPhoneNo" class="form-label">Foto Perfil</label>
                                    @if ($user->avatar)
                                    <div class="col-12">
                                        <a href="{{ asset('storage/avatar/'.$user->avatar) }}" target="_blank">
                                            <img src="{{ asset('storage/avatar/'.$user->avatar) }}" width="100" />
                                        </a>
                                    </div>
                                    @endif
                                    <div class="input-group">
                                        <span class="input-group-text"><i class='bx bxs-microphone'></i></span>
                                        <input type="file" class="form-control" id="avatar" name="avatar">
                                    </div>
                                    {!! $errors->first('avatar', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-message'></i></span>
                                        <input type="text" class="form-control border-start-0" id="inputEmailAddress" name="email" placeholder="Email" value="{{ old('email', $user->email) }}" />
                                    </div>
                                    {!! $errors->first('email', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-12">
                                    <label for="inputChoosePassword" class="form-label">Password (dejar en blanco para mantener el password actual)</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-lock-open'></i></span>
                                        <input type="password" class="form-control border-start-0" id="inputChoosePassword" placeholder="Password" name="password" />
                                    </div>
                                    {!! $errors->first('password', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-12">
                                    <label for="inputConfirmPassword" class="form-label">Confirmar Password</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-lock'></i></span>
                                        <input type="password" class="form-control border-start-0" id="inputConfirmPassword" placeholder="Confirmar Password" name="r_password" />
                                    </div>
                                    {!! $errors->first('r_password', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">Empresa</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
                                        <select name="business" class="form-select" id="inputProductType">
                                            <option value="">Seleccione</option>
                                            @foreach($business as $bu)
                                                <option value="{{ $bu->id }}" {{ (old('business', $user->business_id) == $bu->id) ? "selected" : "" }}>{{ $bu->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {!! $errors->first('business', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName2" class="form-label">Rol</label>
                                    <div class="input-group"> <span class="input-group-text"><i class='bx bxs-user'></i></span>
                                        <select name="role" class="form-select" id="inputProductType">
                                            <option value="">Seleccione {{ old('role') }}</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->id }}" {{ (old('role', $user->role_id) == $role->id) ? "selected" : "" }}>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {!! $errors->first('role', '<div class="error error-block">:message</div>') !!}
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck2" name="active" value="1" {{ old('active', $user->active) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="gridCheck2">Activar</label>
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <button type="submit" class="btn btn-light px-5">Modificar</button>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
