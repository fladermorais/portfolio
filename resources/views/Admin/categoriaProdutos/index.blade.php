@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Categorias de Produtos</h3>
        <a class="btn btn-primary" href="{{route('categoriasProdutos.create')}}">Nova Categoria</a>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th class="coluna-acao">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->nome}}</td>
                    <td class="flex-row">
                        <a class="btn btn-primary btn-sm" href="{{route('categoriasProdutos.edit', $cat->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        
                        <form action="{{ route('categoriasProdutos.delete', $cat->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Deletar"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection