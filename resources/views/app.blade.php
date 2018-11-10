<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		@include('partials.metas')
		@include('partials.styles')
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84802922-12"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());
		  gtag('config', 'UA-84802922-12');
		</script>
	</head>
	<body>
		<header>@include('partials.nav')</header>
		<section>@yield('content')</section>
		<footer>@include('partials.footer')</footer>
		<script src="http://code.jquery.com/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.js"></script>
		<script src="js/validate.js"></script>
		<script src="{{ url('js/app.js') }}"></script>
	</body>
</html>