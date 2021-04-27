@extends('layouts.admin.dashboard')

@section('content')

    <div class="form-users">
        <div class="content">

            <h1>Listar Usuarios</h1>
            <form action="/admin/dashboard/allUsers" method="get" enctype="multipart/form-data">
                @csrf
                <input type="search" id="search" name="search" placeholder="pesquisa pelo nickname"/>
                <button type="submit">Pesquisar</button>
            </form>
            @if(!$search)
                <table>
                    <thead>
                    <tr>
                        <th>Nickname</th>
                        <th>Email Academico</th>
                        <th>Senha</th>
                        <th>Usuario</th>
                    </tr>
                    </thead>
                    @foreach($users as $u)
                        <tbody>
                        <tr>
                            <td>{{ $u->nickname }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->password }}</td>
                            <td>{{ $u->role_id }}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            @else
                <table>
                    <thead>
                    <tr>
                        <th>Nickname</th>
                        <th>Email academico</th>
                    </tr>
                    </thead>
                    @foreach($users as $search)
                        <tbody>
                        <tr>
                            <td>{{ $search->nickname }}</td>
                            <td>{{ $search->email }}</td>
                            <td>{{ $search->password }}</td>
                            <td>{{ $search->role_id }}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection
