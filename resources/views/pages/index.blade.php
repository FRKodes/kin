@extends('app')

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="main-banner">
				<img src="{{ url('images/logo-kin.svg') }}">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12">
				<div class="main-info-container">
					<div class="carousel">
						
						<div class="item">
							<div class="image-container"><img src="{{ url('images/kin-banner-stand-top.png') }}"></div>
							<div class="info">
								<h2 class="title">LOREM IPSUM</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fugiat, eveniet, perferendis quis ea obcaecati dolorem optio temporibus, totam tenetur ipsa asperiores voluptatem qui sit nulla quia. Nobis, id quos.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nihil eos accusantium, aut saepe incidunt blanditiis placeat, perferendis tenetur vitae veniam quos, neque repellendus ut eius odio, obcaecati sunt impedit!</p>
							</div>
						</div>

						<div class="item">
							<div class="image-container"><img src="{{ url('images/kin-banner-stand-top.png') }}"></div>
							<div class="info">
								<h2 class="title">LOREM IPSUM</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fugiat, eveniet, perferendis quis ea obcaecati dolorem optio temporibus, totam tenetur ipsa asperiores voluptatem qui sit nulla quia. Nobis, id quos.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est nihil eos accusantium, aut saepe incidunt blanditiis placeat, perferendis tenetur vitae veniam quos, neque repellendus ut eius odio, obcaecati sunt impedit!</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid back-print">
		<div class="row">
			<div class="col-xs-12 col-md-12">
				<h2 class="title">PRODUCTOS</h2>
				<div class="products-container">
					<div class="item"><img src="{{ url('images/cabo-shelf-a.png') }}" alt="cabo shelf"></div>
					<div class="item"><img src="{{ url('images/canvas-head-board.png') }}" alt="canvas head board"></div>
					<div class="item"><img src="{{ url('images/ki-hex-stool-a.png') }}" alt="ki hex stool"></div>
					<div class="item"><img src="{{ url('images/kin-king-chair-b.png') }}" alt="kin king chair"></div>
					<div class="item"><img src="{{ url('images/mulix-chair.png') }}" alt="mulix chair"></div>
					<div class="item"><img src="{{ url('images/paax-lamp.png') }}" alt="paax lamp"></div>
					<div class="item"><img src="{{ url('images/pattern-head-board.png') }}" alt="pattern head board"></div>
					<div class="item"><img src="{{ url('images/san-blas-stool.png') }}" alt="san blas stool"></div>
					<div class="item"><img src="{{ url('images/taana-stool.png') }}" alt="taana stool"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-12 m-top-30 text-center">
				<h2 class="title">COLECCIONES</h2>
				<select name="" id="">
					<option value="">Uno</option>
					<option value="">Dos</option>
					<option value="">Tres</option>
				</select>
				<div class="colection-container sanmiguel"></div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-md-10 ml-auto mr-auto image-container m-top-60 m-bottom-60"><img class="img-100" src="{{ url('images/kin-banner-stand-top.png') }}"></div>
		</div>
	</div>
@stop