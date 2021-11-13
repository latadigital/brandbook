@extends('admin.layout.master')

@section('content')
<div class="page-wrapper">
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Campañas</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Agregar Campaña</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Agregar Campaña</h5>
                <hr/>
                <div class="form-body mt-4">
                    {{ Form::open(array('route' => 'admin_campaign_create_uploads', 'method' => 'post', 'autocomplete' => 'off')) }}
                    {!! Form::hidden('campaign_id', $campaign_id) !!}
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Agregar Archivos</label>
                                    <multi-uploader />
                                </div>
                            </div>
                        </div>
                    </div><!--end row-->
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
