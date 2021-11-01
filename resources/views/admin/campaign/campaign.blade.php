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
                            <li class="breadcrumb-item active" aria-current="page">Lista</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <!-- <h6 class="mb-0 text-uppercase">DataTable Example</h6> -->
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="d-lg-flex align-items-center mb-4 gap-3">
                        <div class="position-relative">
                            <input type="text" class="form-control ps-5 radius-30" placeholder="Buscar"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                        </div>
                        <div class="ms-auto">
                            <a href="{{ route("admin_campaign_create") }}" class="btn btn-light radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Agregar Campaña</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Campaña</th>
                                    <th>Product Manager</th>
                                    <th>Fecha Lanzamiento</th>
                                    <th>Estado</th>
                                    <th>Archivos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="recent-product-img">
                                                <img src="{{ asset("admin/assets/images/icons/chair.png") }}" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Especial Muebles</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rodrigo López</td>
                                    <td>2021-10-24</td>
                                    <td>
                                        <div class="d-flex align-items-center text-success">	<i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            <span>Completa</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route("admin_campaign_edit", 1) }}" class=""><i class="bx bxs-edit"></i></a>
                                            <a href="javascript:;" class="ms-4"><i class="bx bxs-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="recent-product-img">
                                                <img src="{{ asset("admin/assets/images/icons/chair.png") }}" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Especial Muebles</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rodrigo López</td>
                                    <td>2021-10-24</td>
                                    <td>
                                        <div class="d-flex align-items-center text-primary">	<i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            <span>Borrador</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route("admin_campaign_edit", 1) }}" class=""><i class="bx bxs-edit"></i></a>
                                            <a href="javascript:;" class="ms-4"><i class="bx bxs-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="recent-product-img">
                                                <img src="{{ asset("admin/assets/images/icons/chair.png") }}" alt="">
                                            </div>
                                            <div class="ms-2">
                                                <h6 class="mb-1 font-14">Especial Muebles</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Rodrigo López</td>
                                    <td>2021-10-24</td>
                                    <td>
                                        <div class="d-flex align-items-center text-danger">	<i class="bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1"></i>
                                            <span>Cancelada</span>
                                        </div>
                                    </td>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex order-actions">
                                            <a href="{{ route("admin_campaign_edit", 1) }}" class=""><i class="bx bxs-edit"></i></a>
                                            <a href="javascript:;" class="ms-4"><i class="bx bxs-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>Campaña</th>
                                    <th>Product Manager</th>
                                    <th>Fecha Lanzamiento</th>
                                    <th>Estado</th>
                                    <th>Archivos</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
