<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ asset('favicon-tars.png') }}">

	<title inertia>{{ config('app.name', 'TARS') }}</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

	<!-- Scripts -->
	@routes
	@vite(['resources/js/app.js', "resources/sass/app.scss", "resources/js/Pages/{$page['component']}.vue"])
	@inertiaHead
</head>

<body class="font-sans antialiased flex h-full flex-col">
	@inertia
</body>

</html>
