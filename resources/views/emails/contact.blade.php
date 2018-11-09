<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Email KIN</title>
</head>
<body>
	Hola,
	<p>{{ $nombre }} ha escrito un mensaje:</p>
	 
	<div>
		<p>
			<b>Datos de contacto:</b> <br> <br>
			Email: {{ $email }} <br>
			Telefono: {{ $telefono }} <br>
			Comentario: {{ $comentario }}
		</p>
	</div>
</body>
</html>