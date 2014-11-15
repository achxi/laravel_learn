<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Awesome Admin Panel</title>
	{{ HTML::style('css/admin.css') }}
</head>
<body>

<header>
	<div class="container">
		<h1>My Awesome Admin Panel</h1>
	</div>
</header>

<main class="container">
	@yield('content')
</main>

<footer class="container">
	&copy; {{ date('Y') }} My Awesome Company
</footer>

</body>
</html>