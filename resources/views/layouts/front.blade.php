<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
	@vite(['resources/css/app.scss', 'resources/js/app.js'])
	<title>{{ env('APP_TITLE') }}</title>
</head>

<body class="bg-body-tertiary">
	@include('layouts.partials.header')
	@include('layouts.partials.main')
	@include('layouts.partials.footer')
</body>

</html>