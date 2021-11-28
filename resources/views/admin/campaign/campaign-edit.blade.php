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
                    <hr />
                    <div class="form-body mt-4">
                    {{ Form::open(array('route' => ['admin_campaign_edit_uploads', $campaign->id], 'method' => 'post', 'autocomplete' => 'off', 'enctype' => "multipart/form-data")) }}
                    <div class="row">
                      <div class="col-lg-4">
                        <div class="border border-3 p-4 rounded">
                          <div class="row g-3">
                            <div class="col-md-6">
                              <label class="form-label">Fecha Lanzamiento</label>
                              <input type="text" name="release_date" class="form-control datepicker" value="{{ old('release_date', $campaign->release_date) }}" />
                              {!! $errors->first('release_date', '<div class="error error-block">:message</div>') !!}
                            </div>
                            <div class="col-md-6">
                              <label class="form-label">Fecha Término</label>
                              <input type="text" name="end_date" class="form-control datepicker" value="{{ old('end_date', $campaign->end_date) }}" />
                              {!! $errors->first('end_date', '<div class="error error-block">:message</div>') !!}
                            </div>
                            <div class="col-md-12">
                              <label for="inputVendor" class="form-label">Estado</label>
                              <select class="form-select" name="status" id="inputVendor">
                                <option value="">Seleccione</option>
                                  @foreach($statuses as $status)
                                    <option value="{{ $status->id }}" {{ (old('status', $campaign->status_id) == $status->id) ? "selected" : "" }}>{{ $status->name }}</option>
                                  @endforeach
                              </select>
                              {!! $errors->first('status', '<div class="error error-block">:message</div>') !!}
                            </div>
                            <div class="col-12">
                              <label for="inputProductType" class="form-label">Product Manager</label>
                              @if (count($campaign->productManagers))
                                @foreach($campaign->productManagers as $key => $user)
                                <div class="select-group overflow-hidden">
                                  <select class="form-select" name="product_manager[]" id="inputProductOwner">
                                    <option value="">Seleccione</option>
                                    @foreach($productManagers as $productManager)
                                      <option value="{{ $productManager->id }}" {{ (collect(old('product_manager', $user->id))->contains($productManager->id)) ? "selected" : "" }}>{{ $productManager->firstname }} {{ $productManager->lastname }}</option>
                                    @endforeach
                                  </select>
                                  @if ($key > 0)
                                    <div class="col-12">
                                      <a href="javascript:void(0)" title="" class="btn-delete float-end">Eliminar</a>
                                    </div>
                                  @endif
                                </div>
                                @endforeach
                              @else
                                <div class="select-group overflow-hidden">
                                  <select class="form-select" name="product_manager[]" id="inputProductOwner">
                                    <option value="">Seleccione</option>
                                    @foreach($productManagers as $productManager)
                                      <option value="{{ $productManager->id }}" {{ (collect(old('product_manager'))->contains($productManager->id)) ? "selected" : "" }}>{{ $productManager->firstname }} {{ $productManager->lastname }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              @endif
                              {!! $errors->first('product_manager', '<div class="error error-block">:message</div>') !!}
                              <a href="javascript:void(0)" class="form-label mt-1 clone-btn">+ Agregar</a>
                            </div>
                            <div class="col-12">
                              <label for="basic-url" class="form-label">Url Campaña</label>
                              <div class="input-group"> <span class="input-group-text" id="basic-addon3">{{ $base_url_campaign_easy }}</span>
                                <input type="text" name="url" class="form-control" id="basic-url" aria-describedby="basic-addon3" value="{{ old('url', $campaign->url) }}">
                              </div>
                              {!! $errors->first('url', '<div class="error error-block">:message</div>') !!}
                            </div>
                            <div class="col-12">
                              <label for="basic-url" class="form-label">Ícono Campaña</label>
                              <input type="file" name="icon" class="form-control" id="inputGroupFile01" accept="image/png, image/jpeg, image/jpg, image/gif">
                              {!! $errors->first('icon', '<div class="error error-block">:message</div>') !!}
                              @if ($campaign->icon)
                              <div class="col-12">
                                  <a href="{{ asset('storage/icon/'.$campaign->icon) }}" target="_blank">
                                    <img src="{{ asset('storage/icon/'.$campaign->icon) }}" width="100" />
                                  </a>
                              </div>
                              @endif
                            </div>
                            <div class="col-12">
                              <label for="basic-url" class="form-label">Screenshot Campaña</label>
                              <input type="file" name="screenshot" class="form-control" id="inputGroupFile02" accept="image/png, image/jpeg, image/jpg, image/gif">
                              {!! $errors->first('screenshot', '<div class="error error-block">:message</div>') !!}
                              @if ($campaign->screenshot)
                              <div class="col-12">
                                  <a href="{{ asset('storage/screenshot/'.$campaign->screenshot) }}" target="_blank">
                                    <img src="{{ asset('storage/screenshot/'.$campaign->screenshot) }}" width="100" />
                                  </a>
                              </div>
                              @endif
                            </div>
                            <div class="col-12">
                              <label for="inputProductType" class="form-label">Categorías</label>
                                @if (count($campaign->categories))
                                  @foreach($campaign->categories as $key => $categoriesCampaign)
                                    <div class="select-group overflow-hidden">
                                      <select class="form-select" name="category[]" id="inputCategories">
                                        <option value="">Seleccione</option>
                                        @foreach($categories as $category)
                                          <option value="{{ $category->id }}" {{ (collect(old('category', $categoriesCampaign->id))->contains($category->id)) ? "selected" : "" }}>{{ $category->name }}</option>
                                        @endforeach
                                      </select>
                                      @if ($key > 0)
                                        <div class="col-12">
                                          <a href="javascript:void(0)" title="" class="btn-delete float-end">Eliminar</a>
                                        </div>
                                      @endif
                                    </div>
                                @endforeach
                                @else
                                  <div class="select-group overflow-hidden">
                                    <select class="form-select" name="category[]" id="inputCategories">
                                      <option value="">Seleccione</option>
                                      @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ (collect(old('category'))->contains($category->id)) ? "selected" : "" }}>{{ $category->name }}</option>
                                      @endforeach
                                    </select>
                                  </div>
                                @endif
                              {!! $errors->first('category', '<div class="error error-block">:message</div>') !!}
                              <a href="javascript:void(0)" class="form-label mt-1 clone-btn">+ Agregar</a>
                            </div>
                            <div class="col-12 mt-5">
                              <div class="d-grid">
                                  <button type="submit" class="btn btn-light">Siguiente</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-8">
                        <div class="border border-3 p-4 rounded">
                          <div class="mb-3">
                            <label for="inputProductTitle" class="form-label">Nombre de Campaña</label>
                            <input type="text" name="name" class="form-control" id="inputProductTitle" placeholder="Ingresa un nombre" value="{{ old('name', $campaign->name) }}">
                            {!! $errors->first('name', '<div class="error error-block">:message</div>') !!}
                          </div>
                          <div class="mb-3">
                            <label for="inputProductDescription" class="form-label">Descripción</label>
                            <textarea class="form-control" id="inputProductDescription" rows="15" name="description">{{ old('description', $campaign->description) }}</textarea>
                            {!! $errors->first('description', '<div class="error error-block">:message</div>') !!}
                          </div>
                        </div>
                      </div>
                  </div>
                  <!--end row-->
                  </div>
                  {{ Form::close() }}
                  </div>
            </div>
        </div>
    </div>
@endsection
