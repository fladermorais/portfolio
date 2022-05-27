@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Cargos</h3>
        @can('roles.index')
        <a class="btn btn-primary" href="{{route('roles.create')}}">Novo Cargo</a>
        @endcan
    </div>
</div>

<div class="box">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($roles as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->name}}</td>
                <td>{{$r->description}}</td>
                <td>
                    @if($r->id == 1)
                    
                    @else
                    {{-- @can('rolePermission.index') --}}
                    <a class="btn btn-default btn-sm" href="{{route('rolePermission.index', $r->id)}}" title="Permissões"><i class="fas fa-tags"></i></a>
                    {{-- @endcan --}}

                    @can('roles.edit')
                    <a class="btn btn-primary btn-sm" href="{{route('roles.edit', $r->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                    @endcan
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
</div>
@endsection