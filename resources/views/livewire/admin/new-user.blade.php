@extends('layouts.admin.dashboard')

@section('content')
    <div class="form-users">
        <div class="content">
            <h1>Criar Usuario</h1>
            <form action="/admin/dashboard/users/new" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" id="nickname" name="nickname" placeholder="nickname"/>
                <input type="text" id="email" name="email" placeholder="email academico"/>
                <input type="password" id="password" name="password" placeholder="password"/>
                <label>Tipo Usuario</label>
                <select id="role_id" name="role_id">
                    <option value="1">Administrador</option>
                    <option value="3">Usuario</option>
                </select>
                <input type="submit" value="Criar Usuario" class="button-new"/>
            </form>
        </div>
    </div>
@endsection
