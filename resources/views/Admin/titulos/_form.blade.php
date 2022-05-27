<div class="form-group">
    <div class="form-row">
        <div class="col-sm-8">
            <label for="titulo">Título</label><br>
            <input class='form-control' type="text" id="titulo" name="titulo"
                value="{{ isset($titulo->titulo) ? $titulo->titulo : old('titulo') }}">
            @if ($errors->has('titulo'))
                @foreach ($errors->get('titulo') as $e)
                    <span class="error"><span class="error">{{ $e }}</span></span>
                @endforeach
            @endif
        </div>
        <div class="col-sm-4">
            <label for="referencia">Referencia</label><br>
            <input class='form-control' type="text" id="referencia" name="referencia"
                value="{{ isset($titulo->referencia) ? $titulo->referencia : old('referencia') }}">
            @if ($errors->has('referencia'))
                @foreach ($errors->get('referencia') as $e)
                    <span class="error">{{ $e }}</span>
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-sm-12">
        <label for="descricao">Descrição </label><br>
        <textarea class="form-control" name="descricao"
            rows="3">{{ isset($titulo->descricao) ? $titulo->descricao : old('descricao') }}</textarea>
        @if ($errors->has('descricao'))
            @foreach ($errors->get('descricao') as $e)
                <span class="error">{{ $e }}</span>
            @endforeach
        @endif
    </div>


</div>
