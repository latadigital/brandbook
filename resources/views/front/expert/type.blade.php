@extends('front.layout.master')

@section('content')

	<div class="page">
		<div class="banner banner--image">
			<div class="banner__container">
				<div class="banner__content">
					<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
					<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Tipografía</h1>
					<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Para lograr una identidad visual consistente en el tiempo, es fundamental ser fiel a lineamientos establecidos y dar uso correcto a ellos.</p>
				</div>
				<div class="banner__image observe" data-observe-animation="fadeInRight">
					<div class="banner__image__cover"><img class="image lozad image--cover image--block image--width-full image--height-full" alt="Tipografía" title="Tipografía" data-src="https://easy--brandbook.s3.us-west-2.amazonaws.com/img/banners/mundo-experto--tipografia.jpg" /></div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="breadcrumbs"><a class="breadcrumbs__item breadcrumbs__item--link" href="/"><span class="breadcrumbs__home"><div class="fa fa-home"></div></span><span>Inicio</span></a>
				<div class="breadcrumbs__item breadcrumbs__item--separator">
					<div class="fa fa-chevron-right"> </div>
				</div><a class="breadcrumbs__item breadcrumbs__item--link" href="/mundo-experto.html"><span>Mundo Experto</span></a>
				<div class="breadcrumbs__item breadcrumbs__item--separator">
					<div class="fa fa-chevron-right"> </div>
				</div>
				<div class="breadcrumbs__item breadcrumbs__item--current">Tipografía</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-lg-3">
					@include('front.expert.sidemenu')  
				</div>
				<div class="col-xs-12 col-lg-9 preview__title">
					<div class="content">
						<h3>
							Roboto Slab
							<a href="{{ asset('/front/assets/types/Roboto_Slab.zip') }}" download>
								<span>
									<img src="https://brandbook.easy.cl/front/assets/img/dowload.svg" alt="">
								</span>
							</a>
						
						</h3>
						<p>La tipografía corporativa principal es la Roboto Slab. Se usa para todos los textos generales de la marca y en todas sus variaciones según lo amerite.</p>
						<div class="preview font-preview" style="font-family:Roboto Slab">
							<div class="preview__header">
								<div class="preview__color-selector">
									<div class="preview__color-selector__label">Background</div>
									<div class="preview__color-selector__items">
										<div class="preview__color-selector__item active" style="background:#2e2e36" data-scheme="dark" data-background="#2E2E36"></div>
										<div class="preview__color-selector__item" style="background:#e00111" data-scheme="dark" data-background="#E00111"></div>
										<div class="preview__color-selector__item" style="background:#ffef00" data-scheme="light" data-background="#FFEF00"></div>
										<div class="preview__color-selector__item" style="background:#f6f6f6" data-scheme="light" data-background="#F6F6F6"></div>
										<div class="preview__color-selector__item" style="background:#fff" data-scheme="light" data-background="#FFFFFF"></div>
									</div>
								</div>
								<div class="preview__variations">
									<div class="preview__variations__item form__group preview__variations__item--size" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="1" selected="selected">1x</option>
												<option value="2">2x</option>
												<option value="3">3x</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Tamaño</label>
									</div>
									<div class="preview__variations__item form__group preview__variations__item--weight" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="300">300</option>
												<option value="400" selected="selected">400</option>
												<option value="600">600</option>
												<option value="700">700</option>
												<option value="800">800</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Peso</label>
									</div>
								</div>
							</div>
							<div class="preview__body">
								<div class="preview__area" style="background:#2e2e36">
									<div class="preview__area__item">ABCDEFGHIJKLMNÑOPQRSTUVWXYZ</div>
									<div class="preview__area__item">abcdefghijklmnñopqrstuvwxyz</div>
									<div class="preview__area__item">0123456789</div>
									<div class="preview__area__item preview__area__item--preview" style="display:none"></div>
								</div><input class="preview__custom" type="text" placeholder="Escribe algo aquí para probar Roboto Slab" />
							</div>
						</div>
						<h3>
							Simplon BP
							<a href="{{ asset('/front/assets/types/Simplon[4396].zip') }}" download>
								<span>
									<img src="https://brandbook.easy.cl/front/assets/img/dowload.svg" alt="">
								</span>
							</a>
						</h3>
						<p>La tipografía complementaria es la Simplon Norm. Se usa para escribir el cierre institucional de la marca, bajadas de texto online y textos en catálogos. Puede convivir con la tipografía principal Roboto.</p>
						<div class="preview font-preview" style="font-family:Simplon BP">
							<div class="preview__header">
								<div class="preview__color-selector">
									<div class="preview__color-selector__label">Background</div>
									<div class="preview__color-selector__items">
										<div class="preview__color-selector__item active" style="background:#ffef00" data-scheme="light" data-background="#FFEF00"></div>
										<div class="preview__color-selector__item" style="background:#e00111" data-scheme="dark" data-background="#E00111"></div>
										<div class="preview__color-selector__item" style="background:#2e2e36" data-scheme="dark" data-background="#2E2E36"></div>
										<div class="preview__color-selector__item" style="background:#f6f6f6" data-scheme="light" data-background="#F6F6F6"></div>
										<div class="preview__color-selector__item" style="background:#fff" data-scheme="light" data-background="#FFFFFF"></div>
									</div>
								</div>
								<div class="preview__variations">
									<div class="preview__variations__item form__group preview__variations__item--size" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="1" selected="selected">1x</option>
												<option value="2">2x</option>
												<option value="3">3x</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Tamaño</label>
									</div>
									<div class="preview__variations__item form__group preview__variations__item--weight" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="300">300</option>
												<option value="400" selected="selected">400</option>
												<option value="600">600</option>
												<option value="700">700</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Peso</label>
									</div>
								</div>
							</div>
							<div class="preview__body">
								<div class="preview__area" style="background:#e00111">
									<div class="preview__area__item">ABCDEFGHIJKLMNÑOPQRSTUVWXYZ</div>
									<div class="preview__area__item">abcdefghijklmnñopqrstuvwxyz</div>
									<div class="preview__area__item">0123456789</div>
									<div class="preview__area__item preview__area__item--preview" style="display:none"></div>
								</div><input class="preview__custom" type="text" placeholder="Escribe algo aquí para probar Simplon BP" />
							</div>
						</div>
						<h3>
							ASAP
							<a href="{{ asset('/front/assets/types/Asap.zip') }}" download>
								<span>
									<img src="https://brandbook.easy.cl/front/assets/img/dowload.svg" alt="">
								</span>
							</a>
						</h3>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, lacus leo tempor feugiat aptent auctor condimentum, risus habitant nam vitae bibendum vivamus. </p>
							<div class="preview font-preview" style="font-family:Lato,sans-serif">
							<div class="preview__header">
								<div class="preview__color-selector">
									<div class="preview__color-selector__label">Background</div>
									<div class="preview__color-selector__items">
										<div class="preview__color-selector__item active" style="background:#f6f6f6" data-scheme="light" data-background="#F6F6F6"></div>
										<div class="preview__color-selector__item" style="background:#ffef00" data-scheme="light" data-background="#FFEF00"></div>
										<div class="preview__color-selector__item" style="background:#e00111" data-scheme="dark" data-background="#E00111"></div>
										<div class="preview__color-selector__item" style="background:#2e2e36" data-scheme="dark" data-background="#2E2E36"></div>
										<div class="preview__color-selector__item" style="background:#f6f6f6" data-scheme="light" data-background="#F6F6F6"></div>
										<div class="preview__color-selector__item" style="background:#fff" data-scheme="light" data-background="#FFFFFF"></div>
									</div>
								</div>
								<div class="preview__variations">
									<div class="preview__variations__item form__group preview__variations__item--size" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="1" selected="selected">1x</option>
												<option value="2">2x</option>
												<option value="3">3x</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Tamaño</label>
									</div>
									<div class="preview__variations__item form__group preview__variations__item--weight" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="300">300</option>
												<option value="400" selected="selected">400</option>
												<option value="600">600</option>
												<option value="700">700</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Peso</label>
									</div>
								</div>
							</div>
							<div class="preview__body">
								<div class="preview__area" style="background:#e00111">
									<div class="preview__area__item">ABCDEFGHIJKLMNÑOPQRSTUVWXYZ</div>
									<div class="preview__area__item">abcdefghijklmnñopqrstuvwxyz</div>
									<div class="preview__area__item">0123456789</div>
									<div class="preview__area__item preview__area__item--preview" style="display:none"></div>
								</div><input class="preview__custom" type="text" placeholder="Escribe algo aquí para probar Asap" />
							</div>
						</div>
						<h3>
							Gotham
							<a href="{{ asset('/front/assets/types/Simplon[4396].zip') }}" download>
								<span>
									<img src="https://brandbook.easy.cl/front/assets/img/dowload.svg" alt="">
								</span>
							</a>
						</h3>
						<p>La tipografía principal para Mundo Experto es la Gotham. Principalmente se usa para la comunicación en avisos y catálogos.</p>
						<div class="preview font-preview" style="font-family:Gotham">
							<div class="preview__header">
								<div class="preview__color-selector">
									<div class="preview__color-selector__label">Background</div>
									<div class="preview__color-selector__items">
										<div class="preview__color-selector__item active" style="background:#000" data-scheme="dark" data-background="#000000"></div>
										<div class="preview__color-selector__item" style="background:#db0812" data-scheme="dark" data-background="#DB0812"></div>
										<div class="preview__color-selector__item" style="background:#f6f6f6" data-scheme="light" data-background="#F6F6F6"></div>
										<div class="preview__color-selector__item" style="background:#fff" data-scheme="light" data-background="#FFFFFF"></div>
									</div>
								</div>
								<div class="preview__variations">
									<div class="preview__variations__item form__group preview__variations__item--size" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="1">1x</option>
												<option value="2" selected="selected">2x</option>
												<option value="3">3x</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Tamaño</label>
									</div>
									<div class="preview__variations__item form__group preview__variations__item--weight" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="400">400</option>
												<option value="500" selected="selected">500</option>
												<option value="700">700</option>
												<option value="900">900</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Peso</label>
									</div>
								</div>
							</div>
							<div class="preview__body">
								<div class="preview__area" style="background:#000">
									<div class="preview__area__item">ABCDEFGHIJKLMNÑOPQRSTUVWXYZ</div>
									<div class="preview__area__item">abcdefghijklmnñopqrstuvwxyz</div>
									<div class="preview__area__item">0123456789</div>
									<div class="preview__area__item preview__area__item--preview" style="display:none"></div>
								</div><input class="preview__custom" type="text" placeholder="Escribe algo aquí para probar Gotham" />
							</div>
						</div>
						{{-- <h3>Futura Std Condensed</h3>
						<p>La tipografía principal para Mundo Experto es la Gotham. Principalmente se usa para la comunicación en avisos y catálogos.</p>
						<div class="preview font-preview" style="font-family:Futura Std Condensed">
							<div class="preview__header">
								<div class="preview__color-selector">
									<div class="preview__color-selector__label">Background</div>
									<div class="preview__color-selector__items">
										<div class="preview__color-selector__item active" style="background:#000" data-scheme="dark" data-background="#000000"></div>
										<div class="preview__color-selector__item" style="background:#db0812" data-scheme="dark" data-background="#DB0812"></div>
										<div class="preview__color-selector__item" style="background:#f6f6f6" data-scheme="light" data-background="#F6F6F6"></div>
										<div class="preview__color-selector__item" style="background:#fff" data-scheme="light" data-background="#FFFFFF"></div>
									</div>
								</div>
								<div class="preview__variations">
									<div class="preview__variations__item form__group preview__variations__item--size" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="1">1x</option>
												<option value="2" selected="selected">2x</option>
												<option value="3">3x</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Tamaño</label>
									</div>
									<div class="preview__variations__item form__group preview__variations__item--weight" style="width:90px">
										<div class="form__icon"><select class="form__input">
												<option value="300">300</option>
												<option value="400" selected="selected">400</option>
												<option value="700">700</option>
												<option value="900">900</option>
											</select><span class="form__icon__item"><i class="fa fa-chevron-down"></i></span></div><label class="form__label">Peso</label>
									</div>
								</div>
							</div>
							<div class="preview__body">
								<div class="preview__area" style="background:#000">
									<div class="preview__area__item">ABCDEFGHIJKLMNÑOPQRSTUVWXYZ</div>
									<div class="preview__area__item">abcdefghijklmnñopqrstuvwxyz</div>
									<div class="preview__area__item">0123456789</div>
									<div class="preview__area__item preview__area__item--preview" style="display:none"></div>
								</div><input class="preview__custom" type="text" placeholder="Escribe algo aquí para probar Futura Std Condensed" />
							</div>
						</div> --}}
					</div>
					<div class="download-cta observe" data-observe-animation="fadeInUp" data-observe-duration="500">
                        <div class="download-cta__icons download-cta__icons--1 icons icons--gray"></div>
                        <div class="download-cta__content">
                            <h3 class="download-cta__title">Descarga de Recursos</h3><a class="download-cta__btn btn btn--primario" href="{{ route('graphic-resources') }}">Ir a las Descargas</a>
                        </div>
                        <div class="download-cta__icons download-cta__icons--2 icons icons--gray"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>

@endsection