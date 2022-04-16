@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Quem Somos</h3>
        <a class="btn btn-primary" href="{{route('quemsomos.create')}}">Nova Informação</a>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Imagem</th>
                    <th>Titulo</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @if(isset($info))
                <tr>
                    <td><img class="imagem-noticia" src="{{ asset('storage/quemsomos/'.$info->imagem) }}"></td>
                    <td>{{$info->titulo}}</td>
                    <td class="flex-row">
                        @can('config.edit')
                        <a class="btn btn-primary btn-sm" href="{{route('quemsomos.edit', $info->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                        @endcan
                    </td>
                </tr>
                @endif
                
            </tbody>
        </table>
    </div>
</div>
@endsection