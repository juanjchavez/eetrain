@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                <div class="float-left">Lista de Roles</div>
                <button class="btn btn-sm btn-primary float-right">Nuevo Rol</button>
            </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th class="col-sm-6">Nombre</th>
                                <th class="col-sm-2">Usuarios</th>
                                <th class="col-sm-4 justify-content-center">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->Role_Name }}</td>
                                    <td>{{ count($role->users) }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary col-sm-3">Ver</button>
                                        <button class="btn btn-sm btn-secondary col-sm-3">Editar</button>
                                        <button class="btn btn-sm btn-danger col-sm-3" onclick="confirm('Seguro?')">Borrar</button>
                                    </td>
                                    <td></td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
