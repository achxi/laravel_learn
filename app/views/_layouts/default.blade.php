<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My Awesome Blog</title>
	{{ HTML::style('css/style.css') }}
</head>
<body>

<header>
	<div class="container">
		<h1>My Blog</h1>
		<p>By achxi</p>
	</div>
</header>

<main class="container">
	@yield('content')
</main>

<footer class="container">
	&copy; {{ date('Y') }} My Awesome Company |
	{{ link_to_route('admin.posts.index', 'Admin') }}
</footer>

</body>
</html>