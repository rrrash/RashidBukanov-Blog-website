<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-dark">
<header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark text-white bg-body border-bottom shadow-sm">
    <p class="h5 my-0 me-md-auto fw-normal">Rashid's Blog</p>
    <nav class="my-2 my-md-0 me-md-3">
        <a class="p-2 text-white" href="/about">About Me</a>
        <a class="p-2 text-white" href="/">My Blog</a>
    </nav>
    <a class="btn btn-warning" href="/contact">contact</a>
</header>
<div class="container">@yield('main_content')</div>


<footer class="text-muted py-5 ">
    <div class="container">
        <p class="float-end mb-1">
            <a href="#">Back to top</a>
        </p>
        <p class="mb-1">This is a footer, this is not a very important info!</p>
        <p class="mb-0">Return to the homepage <a href="/">Visit the homepage</a> </p>
    </div>
</footer>

<!--Helllo world -->
</body>
</html>

