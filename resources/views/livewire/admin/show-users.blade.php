@extends('layouts.admin.dashboard')

@section('content')

    <div class="form-users">
        <div class="content">

            <h1>Listar Usuarios</h1>
            <form action="/admin/dashboard/users" method="get" enctype="multipart/form-data">
                @csrf
                <input type="search" id="search" name="search" placeholder="Digite o nickname"/>
                <button class="button-search" type="submit">Pesquisar</button>
                <a class="button-new" href="/admin/dashboard/users/new">Novo</a>
            </form>
            @if(!$search)
                <table>
                    <thead>
                    <tr>
                        <th>Nickname</th>
                        <th>Email Academico</th>
                        <th>Usuario</th>
                        <th>Ação</th>
                    </tr>
                    </thead>
                    @foreach($users as $u)
                        <tbody>
                        <tr>
                            <td>{{ $u->nickname }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->role_id }}</td>
                            <td>
                                <form method="POST" action="/admin/dashboard/users/delete/{{ $u->id_user }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button-delete" type="submit" >Apagar</button>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            @else
                <table>
                    <thead>
                    <tr>
                        <th>Nickname  </th>
                        <th>Email academico  </th>
                        <th>Usuario  </th>
                    </tr>
                    </thead>
                    @foreach($users as $search)
                        <tbody>
                        <tr>
                            <td>{{ $search->nickname }}</td>
                            <td>{{ $search->email }}</td>
                            <td>{{ $search->role_id }}</td>
                        </tr>
                        </tbody>
                    @endforeach
                </table>
            @endif
        </div>
    </div>

@endsection
