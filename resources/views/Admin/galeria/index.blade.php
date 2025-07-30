@extends('layouts.painel')
@section('content')
<div class="box">    
    <div class="box-header flex-row">
        <h3>Imagens</h3>
        @can('galeria.create')
        <a class="btn btn-primary" href="{{route('galeria.create')}}">Nova Imagem</a>
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
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                
                @forelse($imagens as $imagem)
                <tr>
                    <td><img class="imagem-noticia" src="{{ asset('storage/galeria/'.$imagem->image) }}"></td>
                    <td>{{$imagem->name}}</td>
                    <td>
                        @can('galeria.delete')
                        <form action="{{ route('galeria.destroy', $imagem) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return(confirm('Deseja realmente remover esta foto?'))" class="btn btn-danger btn-sm" title="Excluir"><i class="fas fa-trash"></i></button>
                        </form>
                        @endcan
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Nenhuma Imagem até o momento</td>
                </tr>
                @endforelse
                
            </tbody>
        </table>
    </div>
</div>
@endsection