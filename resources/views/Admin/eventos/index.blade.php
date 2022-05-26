@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Eentos</h3>
        {{-- @can('eventos.create') --}}
        <a class="btn btn-primary" href="{{route('eventos.create')}}">Novo Evento</a>
        {{-- @endcan --}}
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Titulo</th>
                    <th>Data</th>
                    <th>Link</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($eventos as $value)
                <tr>
                    <td>{{ $value->titulo }}</td>
                    <td>{{ date('d-m-Y', strtotime($value->dia)) }}</td>
                    <td>{{ $value->link }}</td>
                    <td><span class="status {{ $value->status }}"></span> {{ $value->status }}</td>
                    <td class="flex-row">
                        @can('eventos.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('eventos.edit', $value->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                        
                        @can('eventos.delete')
                        <form action="{{route('eventos.destroy', $value->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button onclick="return(confirm('Deseja realmente excluir este evento?'))" class="btn btn-danger btn-sm" title="Excluir"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                    </td>
                    @empty
                    <td>Nenhum evento até o momento</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection