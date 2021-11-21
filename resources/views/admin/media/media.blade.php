@extends('admin.layout.master')

@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Medios</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">File Manager</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-grid mb-3"> <a href="javascript:;" class="btn btn-light">+ Agregar medio</a></div>
                        <h5 class="mb-0 font-weight-bold ">
                          {{ bytesToHuman($sizeTotal) }}
                          {{-- <span class="float-end">50 GB</span> --}}
                        </h5>
                        {{-- <p class="mb-0 mt-2"><span class="">Uso</span><span class="float-end">Tamaño</span> --}}
                        </p>
                        {{-- <div class="progress mt-3" style="height:7px;">
                            <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15"
                                aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%"
                                aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div> --}}
                        @foreach ($categories as $category)
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box {{ $category["class"] }}"><i class='bx {{ $category["icon"] }}'></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">{{ $category["title"] }}</h6>
                                <p class="mb-0 text-secondary">{{ $category["qty"] }} archivos</p>
                            </div>
                            <h6 class="mb-0">{{ bytesToHuman($category["size"]) }}</h6>
                        </div>
                        @endforeach
                        {{-- <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-success text-success"><i class='bx bxs-file-doc'></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Documentos</h6>
                                <p class="mb-0 text-secondary">123 archivos</p>
                            </div>
                            <h6 class="mb-0">256 MB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-danger text-danger"><i class='bx bx-video'></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Multimedia</h6>
                                <p class="mb-0 text-secondary">24 archivos</p>
                            </div>
                            <h6 class="mb-0">3.4 GB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-warning text-warning"><i class='bx bx-vector'></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Illustrator</h6>
                                <p class="mb-0 text-secondary">458 archivos</p>
                            </div>
                            <h6 class="mb-0">3 GB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-info text-info">
                                <i class='bx bx-brush'></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Photoshop</h6>
                                <p class="mb-0 text-secondary">458 archivos</p>
                            </div>
                            <h6 class="mb-0">3 GB</h6>
                        </div>
                        <div class="d-flex align-items-center mt-3">
                            <div class="fm-file-box bg-light-dark text-dark">
                                <i class='bx bx-image'></i>
                            </div>
                            <div class="flex-grow-1 ms-2">
                                <h6 class="mb-0">Unknown Files</h6>
                                <p class="mb-0 text-secondary">57 archivos</p>
                            </div>
                            <h6 class="mb-0">178 GB</h6>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <div class="fm-search">
                            <div class="mb-0">
                                <div class="input-group input-group-lg"> <span
                                        class="input-group-text bg-transparent"><i class='bx bx-search'></i></span>
                                    <input type="text" class="form-control" placeholder="Buscar Medio">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            {{-- <div class="col-12 col-lg-6">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="fm-icon-box radius-15"><i class='bx bxs-folder'></i>
                                            </div>
                                            <div class="ms-auto font-24"><i class='bx bx-dots-horizontal-rounded'></i>
                                            </div>
                                        </div>
                                        <h5 class="mt-3 mb-0">Repositorio General</h5>
                                        <p class="mb-1 mt-4">
                                          <span>45.5 GB</span>
                                          <span class="float-end">50 GB</span>
                                        </p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;"
                                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-12 col-lg-12">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="fm-icon-box radius-15"><i class='bx bxs-folder'></i>
                                            </div>
                                            {{-- <div class="ms-auto font-24"><i class='bx bx-dots-horizontal-rounded'></i>
                                            </div> --}}
                                        </div>
                                        <h5 class="mt-3 mb-0">Campañas</h5>
                                        <p class="mb-1 mt-4">
                                          <span>{{ bytesToHuman($sizeCampaign) }}</span>
                                          {{-- <span class="float-end">3 GB</span> --}}
                                        </p>
                                        {{-- <div class="progress" style="height: 7px;">
                                            <div class="progress-bar" role="progressbar" style="width: 45%;"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="col-12 col-lg-4">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="fm-icon-box radius-15"><i class='bx bxs-folder'></i>
                                            </div>
                                            <div class="ms-auto font-24"><i class='bx bx-dots-horizontal-rounded'></i>
                                            </div>
                                        </div>
                                        <h5 class="mt-3 mb-0">Marketing</h5>
                                        <p class="mb-1 mt-4">
                                          <span>2,5 GB</span>
                                          <span class="float-end">3 GB</span>
                                        </p>
                                        <div class="progress" style="height: 7px;">
                                            <div class="progress-bar" role="progressbar" style="width: 65%;"
                                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!--end row-->
                        <h5>Folders</h5>
                        <div class="row mt-3">
                            <div class="col-12 col-lg-4">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30"><i class='bx bxs-folder'></i>
                                            </div>
                                            <div class="user-groups ms-auto">
                                                <img src="https://via.placeholder.com/110x110" width="35" height="35"
                                                    class="rounded-circle" alt="" />
                                                <img src="https://via.placeholder.com/110x110" width="35" height="35"
                                                    class="rounded-circle" alt="" />
                                            </div>
                                            <div class="user-plus">+</div>
                                        </div>
                                        <h6 class="mb-0">Especial Baño</h6>
                                        <small>15 archivos</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30"><i class='bx bxs-folder'></i>
                                            </div>
                                            <div class="user-groups ms-auto">
                                                <img src="https://via.placeholder.com/110x110" width="35" height="35"
                                                    class="rounded-circle" alt="" />
                                            </div>
                                        </div>
                                        <h6 class="mb-0">Assets</h6>
                                        <small>345 archivos</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card shadow-none border radius-15">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="font-30"><i class='bx bxs-folder'></i>
                                            </div>
                                            <div class="user-groups ms-auto">
                                                <img src="https://via.placeholder.com/110x110" width="35" height="35"
                                                    class="rounded-circle" alt="" />
                                                <img src="https://via.placeholder.com/110x110" width="35" height="35"
                                                    class="rounded-circle" alt="" />
                                            </div>
                                        </div>
                                        <h6 class="mb-0">Especial Muebles</h6>
                                        <small>143 archivos</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="mb-0">Archivos recientes</h5>
                            </div>
                            {{-- <div class="ms-auto"><a href="javascript:;" class="btn btn-sm btn-light">Ver todo</a></div> --}}
                        </div>
                        <div class="table-responsive mt-3">
                            <table class="table table-striped table-hover table-sm mb-0">
                                <thead>
                                    <tr>
                                        <th>Nombre<i class='bx bx-up-arrow-alt ms-2'></i>
                                        </th>
                                        <th>Cargado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($files as $file)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div><i class='bx bxs-file-pdf me-2 font-24'></i>
                                                </div>
                                                <div class="font-weight-bold">{{ $file->name }}</div>
                                            </div>
                                        </td>
                                        <td>{{ $file->created_at->format("d-m-Y H:i:s") }}</td>
                                        {{-- <td><i class='bx bx-dots-horizontal-rounded font-24'></i></td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end row-->
    </div>
</div>
@endsection
