@extends('layouts.painel')
@section('content')
<div class="box">
    <div class="box-header">
        <h3>Informações sobre menus do site</h3>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nome</th>
                    <th>Alias</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menus as $menu)
                <tr>
                    <td>{{$menu->nome}}</td>
                    <td>{{$menu->alias}}</td>
                    <td>{{$menu->status}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('menus.edit', $menu)}}" title="Editar"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection