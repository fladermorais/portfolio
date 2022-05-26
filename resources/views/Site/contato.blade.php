@extends('layouts.site')
@section('content')

    <section id="contact-page">
        <div id="top-content" class="container-fluid inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="page-title">Envie-nos uma mensagem</div>
                        <div class="page-subtitle">Entre em contato conosco preenchendo o formulário abaixo para tirar
                            dúvidas,
                            enviar sugestões, opniões ou críticas</div>
                    </div>
                </div>
            </div>
        </div>

        <div id="details" class="container-fluid">
            <div class="container">
                @include('flash::message')
                <div class="row contact-wrap">
                    <div class="status alert alert-success" style="display: none"></div>
                    <form id="main-contact-form" class="contact-form" name="contact-form" method="POST"
                        action="{{ route('contatoForm') }}">
                        @csrf
                        <div class="col-sm-5 col-sm-offset-1 form-items-holder">
                            <div class="form-text">
                                <label>Nome *</label>
                                <input type="text" name="nome" required="required" value="{{ old('nome') }}">
                                @if ($errors->has('nome'))
                                    @foreach ($errors->get('nome') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-text">
                                <label>Email *</label>
                                <input type="email" name="email" required="required" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                    @foreach ($errors->get('email') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-text">
                                <label>Telefone *</label>
                                <input type="number" name="telefone" required="required" value="{{ old('telefone') }}">
                                @if ($errors->has('telefone'))
                                    @foreach ($errors->get('telefone') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-text">
                                <label>Whatsapp</label>
                                <input type="whatsapp" name="whatsapp" value="{{ old('whatsapp') }}">
                                @if ($errors->has('whatsapp'))
                                    @foreach ($errors->get('whatsapp') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                        <div class="col-sm-5 form-items-holder">
                            <div class="form-text">
                                <label>Assunto *</label>
                                <input type="text" name="assunto" required="required" value="{{ old('assunto') }}">
                                @if ($errors->has('assunto'))
                                    @foreach ($errors->get('assunto') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>

                            <div class="form-text">
                                <label>Mensagem *</label>
                                <textarea name="mensagem" id="mensagem" required="required" rows="8">{{ old('mensagem') }}</textarea>
                                @if ($errors->has('mensagem'))
                                    @foreach ($errors->get('mensagem') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-text">
                                {!! htmlFormSnippet() !!}
                                @if ($errors->has('g-recaptcha-response'))
                                    @foreach ($errors->get('g-recaptcha-response') as $e)
                                        <span class="error">{{ $e }}</span>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-button "><input id="submit" type="submit"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="contact">
    <div class="overlay">
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d1910.355955197016!2d-44.872419064056125!3d-22.28090436829139!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d-22.2807888!2d-44.8718528!4m0!5e0!3m2!1sen!2sus!4v1591290831173!5m2!1sen!2sus"></iframe>
                        </div>
                    </div>
                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5>Endereço</h5>
                                    <p>Avenida Inspetor Jonas Pezzo Costa, 823<br>Centro<br>Itamonte/ MG<br></p>
                                    <p>Telefone: 35 3363-3362<br>Email: contato@esfai.com.br</p>
                                </address>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection
