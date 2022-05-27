@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Permissões</h3>
        {{-- @can('permissions.create') --}}
        <a class="btn btn-primary float-right col-sm-2" href="{{route('permissions.create')}}">Nova Permissão</a>
        {{-- @endcan --}}
    </div>
</div>

<div class="box">
    <table class="table table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($permissions as $p)
            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
                <td>{{$p->description}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{route('permissions.edit', $p->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection