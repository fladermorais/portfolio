@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Clientes</h3>
        @can('clientes.create')
        <a class="btn btn-primary" href="{{route('clientes.create')}}">Novo Cliente</a>
        @endcan
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Status</th>
                    <th>Home</th>
                    <th>Páginas</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($clientes as $produto)
                <tr>
                    <td><img class="imagem-noticia" src="{{ asset('storage/clientes/'.$produto->imagem) }}"></td>
                    <td>{{$produto->nome}}</td>
                    <td><span class="status {{ $produto->status == "ativo" ? "ativo" : "inativo" }}"></span>     {{$produto->status}}</td>
                    <td>{{$produto->home}}</td>
                    <td>{{$produto->paginas}}</td>
                    <td class="flex-row">
                        @can('clientes.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('clientes.edit', $produto->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                        
                        @can('clientes.delete')
                        <form action="{{route('clientes.delete', $produto->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Excluir"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                    </td>
                    @empty
                    <td>Nenhum Produto até o momento</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection