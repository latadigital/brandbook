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
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="border border-3 p-4 rounded">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Fecha Lanzamiento</label>
                                        <input type="text" class="form-control datepicker" />
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Fecha Término</label>
                                        <input type="text" class="form-control datepicker" />
                                    </div>
                                    <div class="col-md-12">
                                        <label for="inputVendor" class="form-label">Estado</label>
                                        <select class="form-select" id="inputVendor">
                                            <option value="1">Pública</option>
                                            <option value="2" selected>Borrador</option>
                                            <option value="3">Caducada</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputProductType" class="form-label">Product Manager</label>
                                        <select class="form-select" id="inputProductType">
                                            <option value="1">Carlitos Lechuga</option>
                                            <option value="2">Carlitos Lechuga</option>
                                            <option value="3">Carlitos Lechuga</option>
                                        </select>
                                        <a href="" class="form-label mt-1">+ Agregar</a>
                                    </div>

                                    <div class="col-12">
                                        <label for="basic-url" class="form-label">Url Campaña</label>
                                        <div class="input-group"> <span class="input-group-text" id="basic-addon3">https://easy.cl/tienda/</span>
                                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="basic-url" class="form-label">Ícono Campaña</label>
                                        <input type="file" class="form-control" id="inputGroupFile01">
                                    </div>
                                    <div class="col-12">
                                        <label for="basic-url" class="form-label">Screenshot Campaña</label>
                                        <input type="file" class="form-control" id="inputGroupFile02">
                                    </div>
                                    <div class="col-12">
                                        <label for="inputProductType" class="form-label">Categorías</label>
                                        <select class="form-select" id="inputProductType">
                                            <option value="1">Muebles</option>
                                            <option value="2">Línea Blanca</option>
                                            <option value="3">Terminaciones</option>
                                        </select>
                                        <a href="" class="form-label mt-1">+ Agregar</a>
                                    </div>
                                    <div class="col-12 mt-5">
                                        <div class="d-grid">
                                            <button type="button" class="btn btn-light">Guardar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Nombre de Campaña</label>
                                    <input type="email" class="form-control" id="inputProductTitle" placeholder="Ingresa un nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Descripción</label>
                                        <textarea class="form-control" id="inputProductDescription" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Agregar Archivos</label>
                                    <input id="image-uploadify" type="file" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf,.xd,.ai,.psd" multiple>
                                </div>
                            </div>
                        </div>

                    </div><!--end row-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
