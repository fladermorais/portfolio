@php
$config = DB::table('configs')->first();
@endphp

@extends('layouts.painel')

@section('content')
<div class="login-box">
    <div class="login-logo">
        @if(isset($config->logo))
        <img src="{{ asset('/storage/logo/logo.png')}}" alt="">
        @else
        <img src="{{ asset('/logo/logo.png')}}" alt="">
        @endif
    </div>
    
    <div class="login-box-body">
        <p class="login-box-msg">Digite suas credenciais para acessar o sistema!</p>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Senha">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox"> Lembre-me
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                    </div>
                </div>
            </div>
        </form>  
    </div>
</div>
@endsection
