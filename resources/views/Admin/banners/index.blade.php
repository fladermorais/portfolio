@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Banners</h3>
        @can('clientes.create')
        <a class="btn btn-primary" href="{{route('banners.create')}}">Novo Banner</a>
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
                    <th>Link</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($banners as $banner)
                <tr>
                    <td><img class="imagem-noticia" src="{{ asset('storage/banners/'.$banner->imagem) }}"></td>
                    <td>{{$banner->nome}}</td>
                    <td>{{$banner->link}}</td>
                    <td class="flex-row">
                        @can('banners.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('banners.edit', $banner->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                        
                        @can('banners.delete')
                        <form action="{{route('banners.delete', $banner->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" title="Excluir"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                    </td>
                    @empty
                    <td>Nenhum Banner até o momento</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection