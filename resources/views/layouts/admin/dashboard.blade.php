<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/app.js') }}"></script>
    <link href="/css/admDashboard/index.css" rel="stylesheet">

    <title>GCU :: Welcome</title>
</head>

<body>

    <div class="navbar-container">
        <p class="navbar-logo">GCU </p>
        <a href="/admin/dashboard/users">Usuários</a>
        <livewire:logout-link />
    </div>


    @yield('content')


    <footer class="footer">
        GCU &copy; 2021
    </footer>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>
</html>
