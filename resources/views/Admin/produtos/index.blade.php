@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Produtos</h3>
        @can('produtos.create')
        <a class="btn btn-primary" href="{{route('produtos.create')}}">Novo Produto</a>
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
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($produtos as $produto)
                <tr>
                    <td><img class="logo-info" src="{{ asset('/storage/produtos/' . $produto->imagem) }}" alt=""></td>
                    <td>{{$produto->titulo}}</td>
                    <td>{{$produto->categorias->nome}}</td>
                    <td class="flex-row">
                        @can('produtos.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('produtos.edit', $produto->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                        
                        @can('produtos.delete')
                        <form action="{{route('produtos.delete', $produto->id)}}" method="post">
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