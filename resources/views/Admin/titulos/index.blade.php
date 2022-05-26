@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Títulos</h3>
        @can('titulos.create')
        <a class="btn btn-primary" href="{{route('titulos.create')}}">Novo Título</a>
        @endcan
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Referência</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($titulos as $titulo)
                <tr>
                    <td>{{ $titulo->id }}</td>
                    <td>{{ $titulo->titulo }}</td>
                    <td>{{ $titulo->referencia }}</td>
                    <td class="flex-row">
                        @can('titulos.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('titulos.edit', $titulo->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                        
                        @can('titulos.delete')
                        <form action="{{route('titulos.delete', $titulo->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Excluir"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                    </td>
                    @empty
                    <td>Nenhum título até o momento</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection