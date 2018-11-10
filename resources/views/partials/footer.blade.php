<div class="container" id="contacto">
	<div class="row">
		<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 ml-auto mr-auto">
			<h2 class="title text-center">CONTACTO</h2>

			{!! Form::open(['url' => 'sendmail', 'id'=>'contactForm']) !!}
				<div class="form-group">
					{!! Form::text('nombre', null, ['class'=>'form-control', 'placeholder'=>'*Nombre', 'data-validate'=>'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('correo', null, ['class'=>'form-control', 'placeholder'=>'*Correo', 'data-validate'=>'required']) !!}
				</div>
				<div class="form-group">
					{!! Form::text('telefono', null, ['class'=>'form-control', 'placeholder'=>'Teléfono']) !!}
				</div>
				<div class="form-group">
					{!! Form::textarea('mensaje', null, ['class'=>'form-control', 'placeholder'=>'*Mensaje', 'data-validate'=>'required']) !!}
				</div>
				<div class="form-group text-center">
					{!! Form::submit('ENVIAR', ['class'=>'btn btn-primary kin-btn']) !!}
				</div>
				<div class="sent_mail_alert">¡Gracias!<br>Tu mensaje ha sido enviado exitosamente, nos pondremos en contacto contigo a la brevedad.</div>
			{!! Form::close() !!}
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12 m-top-60 m-bottom-60">
			<h3 class="mayus naranja text-center">Encuentra nuestros productos en:</h3>
			<ul class="shop">
				<li><a target="_blank" href=""><img src="{{ url('images/etsy.svg') }}" alt="Encuentra productos KIN en Etsy"></a></li>
				<li><a target="_blank" href="https://www.facebook.com/pg/kinismexico/shop/"><img src="{{ url('images/facebook.svg') }}" alt="Encuentra productos KIN en Facebook"></a></li>
				<li><a target="_blank" href="https://listado.mercadolibre.com.mx/_CustId_312980885"><img src="{{ url('images/mercadolibre.svg') }}" alt="Encuentra productos KIN en Mercado Libre"></a></li>
			</ul>
		</div>
	</div>

	<div class="row">
		<?php $count = 0; ?>
		@foreach($imgs as $key => $image)
			<?php if($count == 4) break; ?>
			<div class="col-xs-12 col-sm-6 col-md-3 ig-item">
				<div class="inner" style="background: transparent url({{ $image->images->standard_resolution->url }}) no-repeat center center;"></div>
				{{-- <img class="img-100" src="{{ $image->images->standard_resolution->url }}" alt=""> --}}
			</div>
			<?php $count++; ?>
		@endforeach

	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<ul class="social">
				<li><a target="_blank" href="https://www.facebook.com/pg/kinismexico"><img src="{{ url('images/facebook-footer.svg') }}" alt="KIN en Facebook"></a></li>
				<li><a target="_blank" href="https://www.instagram.com/kinismexico/"><img src="{{ url('images/ig.svg') }}" alt="Encuentra KIN en Instagram"></a></li>
			</ul>
			<p class="text-center">
				<a class="blanco" href="#aviso-de-privacidad">AVISO DE PRIVACIDAD</a>
			</p>
			<p class="text-center blanco font-8">
				Desarrollado por <a class="blanco" href="http://blueterrier.mx/">BLUE TERRIER STUDIO</a>
			</p>
		</div>
	</div>
</div>