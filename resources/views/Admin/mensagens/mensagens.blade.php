@extends('layouts.painel')
@section('content')
    <div class="box">
        <div class="box-header flex-row">
            <h3 class="float-left">Mensagens do Site</h3>
        </div>
    </div>

    <div class="box">
        <div class="box-body">
            <table class="table table-striped table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Data</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Assunto</th>
                        <th class="th_fim">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mensagens as $mensagem)
                        <tr>
                            <td>{{ date('d/m/Y', strtotime($mensagem->created_at)) }}</td>
                            <td>{{ $mensagem->nome }} </td>
                            <td>{{ $mensagem->telefone }}</td>
                            <td>{{ $mensagem->email }}</td>
                            <td>{{ $mensagem->assunto }}</td>
                            <td class="actions">
                                <a data-toggle="modal" data-target="#Modal{{ $mensagem->id }}" class="btn btn-primary btn-sm"
                                    href="" title="Visualizar"><i class="fas fa-eye"></i></a>
                            </td>

                            <div class="modal fade" id="Modal{{ $mensagem->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Detalhes</h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3>Mensagem:</h3>
                                            <p>{{ $mensagem->mensagem }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Fechar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
