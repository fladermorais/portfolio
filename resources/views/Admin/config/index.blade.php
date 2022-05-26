@extends('layouts.painel')
@section('content')
<div class="box">
    <div class="box-header">
        <h3>Informações do Site</h3>
    </div>
</div>

<div class="box">
    <div class="box-body">
        <table class="table table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Logo</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img class="logo-info" src="{{ (isset($config->logo) && $config->logo != "" ? asset('storage/logo/'.$config->logo) : asset('/img/logo.png') )}}" alt="{{ $config->nome}}"></td>
                    <td>{{$config->nome}}</td>
                    <td>{{$config->telefone}}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="{{route('configs.edit', $config->id)}}" title="Editar"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection