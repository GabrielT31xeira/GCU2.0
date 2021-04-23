<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/admDashboard/index.css" rel="stylesheet">
    @livewireStyles

    <title>GCU :: Welcome</title>
</head>

<body>

    <div class="navbar-container">
        <p class="navbar-logo">GCU </p>
        <livewire:logout-link /> 
    </div>


    <footer class="footer">
        <p class="footer-p">GCU &copy; 2021</p>
    </footer>

    @livewireScripts
</body>

</html>