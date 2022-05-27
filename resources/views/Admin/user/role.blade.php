@extends('layouts.painel')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="center">Lista de Funções para {{$user->name}}</h3>
    </div>
</div>

<div class="box">
    <div class="box-header">
        <form action="{{route('userRole.store',$user->id)}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
                <select name="role_id" class="form-control">
                    @foreach($roles as $valor)
                    <option value="{{$valor->id}}">{{$valor->name}}</option>
                    @endforeach
                </select>
            </div>
            <button class="btn btn-primary">Adicionar</button>
        </form>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Função</th>
                    <th>Descrição</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user->roles as $papel)
                <tr>
                    <td>{{ $papel->name }}</td>
                    <td>{{ $papel->description }}</td>
                    <td>
                        <form action="{{route('userRole.delete',[$user->id,$papel->id])}}" method="post">
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
