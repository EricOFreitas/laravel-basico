<DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Estudo: Laravel básico</title>
</head>
<body>
	<h1>Olá Mundo!!</h1>
	@foreach($customers as $customer)
		<p>{{ $customer->name }}</p>
	@endforeach
</body>
</html>