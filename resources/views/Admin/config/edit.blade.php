@extends('layouts.painel')
@section('content')

    <div class="box">
        <div class="box-header">
            <h3>Editar Empresa</h3>
        </div>
    </div>

    <form action="{{ route('configs.update', $info->id) }}" method="POST" id="formulario" enctype="multipart/form-data">
        {{ csrf_field() }}
        @method('PUT')

        <div class="box">
            <div class="box-body">
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-sm-8">
                            <label for="nome">Nome</label><br>
                            <input class='form-control' type="text" id="nome" name="nome" value="{{ $info->nome }}">
                            @if ($errors->has('nome'))
                                @foreach ($errors->get('nome') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-4">
                            <label for="arquivo">Logo</label><br>
                            <input class='form-control' type="file" id="arquivo" name="arquivo">
                            @if ($errors->has('arquivo'))
                                @foreach ($errors->get('arquivo') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-3">
                            <label for="telefone">Telefone</label><br>
                            <input class='form-control' type="text" id="telefone" name="telefone"
                                value="{{ $info->telefone }}">
                            @if ($errors->has('telefone'))
                                @foreach ($errors->get('telefone') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-3">
                            <label for="whatsapp">Celular</label><br>
                            <input class='form-control' type="text" id="whatsapp" name="whatsapp"
                                value="{{ $info->whatsapp }}">
                            @if ($errors->has('whatsapp'))
                                @foreach ($errors->get('whatsapp') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-3">
                            <label for="telefone2">Telefone</label><br>
                            <input class='form-control' type="text" id="telefone2" name="telefone2"
                                value="{{ $info->telefone2 }}">
                            @if ($errors->has('telefone2'))
                                @foreach ($errors->get('telefone2') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-3">
                            <label for="email">E-mail</label><br>
                            <input class='form-control' type="email" id="email" name="email" value="{{ $info->email }}">
                            @if ($errors->has('email'))
                                @foreach ($errors->get('email') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-3">
                            <label for="endereco">Endereço</label><br>
                            <input class='form-control' type="text" id="endereco" name="endereco"
                                value="{{ $info->endereco }}">
                            @if ($errors->has('endereco'))
                                @foreach ($errors->get('endereco') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-2">
                            <label for="numero">Número</label><br>
                            <input class='form-control' type="text" id="numero" name="numero"
                                value="{{ $info->numero }}">
                            @if ($errors->has('numero'))
                                @foreach ($errors->get('numero') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-3">
                            <label for="bairro">Bairro</label><br>
                            <input class='form-control' type="text" id="bairro" name="bairro"
                                value="{{ $info->bairro }}">
                            @if ($errors->has('bairro'))
                                @foreach ($errors->get('bairro') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-2">
                            <label for="cidade">Cidade</label><br>
                            <input class='form-control' type="text" id="cidade" name="cidade"
                                value="{{ $info->cidade }}">
                            @if ($errors->has('cidade'))
                                @foreach ($errors->get('cidade') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                        <div class="col-sm-2">
                            <label for="pais">País</label><br>
                            <input class='form-control' type="text" id="pais" name="pais" value="{{ $info->pais }}">
                            @if ($errors->has('pais'))
                                @foreach ($errors->get('pais') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-sm-6">
                            <label for="slogan">Título(banner hospedagem)</label><br>
                            <input class='form-control' type="text" id="slogan" name="slogan"
                                value="{{ $info->slogan }}">
                            @if ($errors->has('slogan'))
                                @foreach ($errors->get('slogan') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>
                        <div class="col-sm-6">
                            <label for="subtitulo">Subtítulo(banner hospedagem)</label><br>
                            <input class='form-control' type="text" id="subtitulo" name="subtitulo"
                                value="{{ $info->subtitulo }}">
                            @if ($errors->has('subtitulo'))
                                @foreach ($errors->get('subtitulo') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-sm-4">
                            <label for="ativaBlog">Exibir Blog no Menu?</label><br>
                            <select name="ativaBlog" id="ativaBlog" class="form-control">
                                <option
                                    {{ isset($info['ativaBlog']) && $info['ativaBlog'] == 'sim' ? 'selected' : '' }}
                                    value="sim">Sim</option>
                                <option
                                    {{ isset($info['ativaBlog']) && $info['ativaBlog'] == 'nao' ? 'selected' : '' }}
                                    value="nao">Não</option>
                            </select>
                            @if ($errors->has('ativaBlog'))
                                @foreach ($errors->get('ativaBlog') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col-sm-12">
                            <label for="descricao">Descrição</label><br>
                            <textarea class="form-control" name="descricao" id="descricao" cols="30"
                                rows="10">{{ $info->descricao }}</textarea>
                            @if ($errors->has('descricao'))
                                @foreach ($errors->get('descricao') as $e)
                                    <span class="error">{{ $e }}</span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="box">
            <div class="box-body">
                <h3>Informações de SEO</h3>
                @include('Admin._formSeo')
            </div>
        </div>

        <div class="box">
            <div class="box-footer">
                <input class="btn btn-primary btn-cadastro" type="submit" value="Atualizar">
            </div>
        </div>
    </form>
@endsection
