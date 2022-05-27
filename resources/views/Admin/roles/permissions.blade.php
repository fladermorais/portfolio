@extends('layouts.painel')

@section('content')
<div class="box">
    <div class="box-header">
        <h2 class="center">Lista de Permissões para {{$role->name}}</h2>
    </div>
</div>

<div class="box">
    <form action="{{route('rolePermission.store',$role->id)}}" method="post">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <select class="form-control" name="permission_id">
                    <option value="">Escolha uma permissão</option>
                    @foreach($permissions as $value)
                    <option value="{{$value->id}}">{!! $value->description !!}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button class="btn btn-primary btn-sm btn-margin">Adicionar</button>
        </div>
    </form>
</div>

<div class="box">
    <div class="body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>Permissão</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($role->permissions as $permission)
                <tr>
                    <td>{{ $permission->description }}</td>
                    <td>{{ $permission->name }}</td>
                    <td>
                        
                        <form action="{{route('rolePermission.delete',[$role->id, $permission->id])}}" method="post">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button title="Deletar" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection