@extends('front.layout.master')

@section('content')

	<div class="page">
		<div class="banner banner--image">
			<div class="banner__container">
				<div class="banner__content">
					<div class="banner__icons banner__icons--secondary icons icons--white observe"></div>
					<h1 class="banner__title observe" data-observe-animation="fadeInDown" data-observe-duration="500">Tipografía</h1>
					<p class="banner__desc observe" data-observe-animation="fadeInRight" data-observe-duration="500">Lorem ipsum dolor sit amet consectetur adipiscing elit pulvinar dictum molestie suscipit volutpat metus id, nulla fringilla ullamcorper sapien posuere class erat mus senectus habitasse ornare ac.</p>
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
				<div class="col-xs-12 col-lg-9">
					<div class="content">
						<h3>Gotham</h3>
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
						<h3>Futura Std Condensed</h3>
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
						</div>
					</div>
					<div class="download-cta observe" data-observe-animation="fadeInUp" data-observe-duration="500">
						<div class="download-cta__icons download-cta__icons--1 icons icons--gray"></div>
						<div class="download-cta__content">
							<h3 class="download-cta__title">Descarga de Recursos</h3><a class="download-cta__btn btn btn--primario" href="/recursos-graficos.html">Ir a las Descargas</a>
						</div>
						<div class="download-cta__icons download-cta__icons--2 icons icons--gray"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection