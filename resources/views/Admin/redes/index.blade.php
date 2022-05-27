@extends('layouts.painel')
@section('content')
<div class="box">
    <div class="box-header flex-row">
        <h3>Redes Sociais</h3>
        <a class="btn btn-primary float-right col-sm-2" href="{{route('redes.create')}}">Nova Rede Social</a>
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
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($redes as $rede)
                    <tr>
                        <td><i class="{{ $rede->icone }}"></i></td>
                        <td>{{ $rede->titulo }}</td>
                        <td class="flex-row">
                            <a class="btn btn-primary btn-sm" href="{{route('redes.edit', $rede->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                            <form action="{{ route('redes.delete', $rede->id) }}" method="post">
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