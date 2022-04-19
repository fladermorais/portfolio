@extends('layouts.painel')
@section('content')
<div class="box">
    <div class="box-header">
        <div class="flex-row">
            <h3>Recursos</h3>
            <a class="btn btn-primary" href="{{route('recursos.create')}}">Recursos</a>
        </div>
    </div>
</div>
<div class="box">
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Ícone</th>
                        <th>Titulo</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($recursos as $recurso)
                    <tr>
                        <td><i class="{{ $recurso->icone }}"></i></td>
                        <td>{{ $recurso->titulo }}</td>
                        <td>{{ $recurso->descricao }}</td>
                        <td class="flex-row">
                            <a class="btn btn-primary btn-sm" href="{{route('recursos.edit', $recurso->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('recursos.delete', $recurso->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" title="Excluir" type="submit"><i class="fas fa-edit"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection