@extends('layouts.initialDashboard')

@section('title','GCU :: Cadastro')

@section('content')

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register/index.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>

    <form name="form-register" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="register-container">
            <p class="title-register">Register</p>

            <input type="text" class="input-login" id="nickname" name="nickname" placeholder="nickname">
            <input type="text" class="input-login" id="email" name="email" placeholder="email acadêmico">
            <input type="password" class="input-login" id="password" name="password" placeholder="senha">
            @if(Session::get('fail'))
            <div class="erro_messages">
                {{ Session::get('fail') }}
            </div>
            @endif
            @if($errors->any())
            <div class="erro_messages">
                @foreach($errors->all() as $errors )
                    {{ $errors }}<br/>
                @endforeach
            </div>
            @endif
            <div class="separate">
                <input type="submit" class="neon-register" value="Cadastrar-se">
            </div>
            <a href="/login" class="login-link">fazer o login</a>
        </div>

    </form>
</body>

</html>

@endsection