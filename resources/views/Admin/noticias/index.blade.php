@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Notícias</h3>
        @can('noticias.create')
        <a class="btn btn-primary" href="{{route('noticias.create')}}">Nova Notícia</a>
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
                    <th>Visualizações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($noticias as $noticia)
                <tr>
                    <td><img class="imagem-noticia" src="{{ asset('storage/noticias/'.$noticia->imagem) }}"></td>
                    <td>{{$noticia->nome}}</td>
                    <td>{{$noticia->categorias->nome}}</td>
                    <td>{{$noticia->view }}</td>
                    <td>
                        @can('noticias.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('noticias.edit', $noticia->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                        
                        @can('noticias.delete')
                        <a class="btn btn-danger btn-sm" href="{{route('noticias.delete', $noticia->id)}}" title="Excluir"><i class="fas fa-trash"></i></a>
                        @endcan
                    </td>
                    @empty
                    <td>Nenhuma Notícia até o momento</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection