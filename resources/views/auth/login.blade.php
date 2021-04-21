@extends('layouts.initialDashboard')

@section('title','GCU :: Login')

@section('content')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login/index.css">
</head>

<body>

    <form name="form-login" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login-container">
            <p class="title-login">Login</p>

            <input type="text" class="input-login" id="nickname" name="nickname" placeholder="nickname">
            <input type="password" class="input-login" id="password" name="password" placeholder="password">
            
            @if(Session::get('fail'))
            <div class="erro_messages">
                {{ Session::get('fail') }}
            </div>
            @endif

            <button type="submit" class="neon-login">{{ __('Login') }}</button><br />
            <a href="/register" class="register-link">Cadastre-se</a>
        </div>
    </form>
</body>

</html>

@endsection