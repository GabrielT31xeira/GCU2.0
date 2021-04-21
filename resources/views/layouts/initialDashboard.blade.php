<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/login/index.css" rel="stylesheet">

    <title>@yield('title')</title>

</head>

<body>
    <!-- navbar -->
    <div class="navbar-container">
        <p class="navbar-logo">GCU</p>
    </div>

    @yield('content')

    <!-- footer -->
    <footer class="footer">
        <p class="footer-p">GCU &copy; 2021</p>
    </footer>
</body>

</html>