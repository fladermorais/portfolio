@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Lista de Usuários</h3>
        <a class="btn btn-primary " href="{{route('usuarios.create')}}">Novo Usuário</a>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr class="alert alert-{{isset($user->deleted_at) ? 'danger' : ''}}">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if(isset($user->deleted_at))
                        <a class="btn btn-warning btn-sm" href="{{route('usuarios.active', $user->id)}}" title="Ativar"><i class="fas fa-plus"></i></a>
                        @else
                        <a class="btn btn-info btn-sm" href="{{route('userRole.index', $user->id)}}" title="Funções"><i class="fas fa-tags"></i></a>
                        <a class="btn btn-primary btn-sm" href="{{route('usuarios.edit', $user->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="{{route('usuarios.delete', $user->id)}}" title="Deletar"><i class="fas fa-trash-alt"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<hr>

<div class="box">    
    <div class="box-header flex-row">
        <h3>Lista de Usuários Excluídos</h3>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usersDeletados as $user)
                <tr class="alert alert-{{isset($user->deleted_at) ? 'danger' : ''}}">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        @if(isset($user->deleted_at))
                        <a class="btn btn-warning btn-sm" href="{{route('usuarios.active', $user->id)}}" title="Ativar"><i class="fas fa-plus"></i></a>
                        @else
                        <a class="btn btn-info btn-sm" href="{{route('userRole.index', $user->id)}}" title="Funções"><i class="fas fa-tags"></i></a>
                        <a class="btn btn-primary btn-sm" href="{{route('usuarios.edit', $user->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        <a class="btn btn-danger btn-sm" href="{{route('usuarios.delete', $user->id)}}" title="Deletar"><i class="fas fa-trash-alt"></i></a>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection