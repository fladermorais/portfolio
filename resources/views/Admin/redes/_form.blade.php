<div class="form-group">
  <div class="form-row">
    <div class="col-md-8">
      <label for="titulo">Título</label>
      <input required class='form-control' type="text" id="titulo" name="titulo" value="{{ isset($rede) ? $rede->titulo : old('titulo')}}">
      @if($errors->has('titulo'))
      @foreach($errors->get('titulo') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-md-4">
      <label for="icone">Ícone</label>
      <select class="form-control" name="icone" id="icone">
        <option value="">Escolha um ícone</option>
        @foreach($icones as $key => $value)
        <option {{ isset($rede) && $rede->icone == $value ? "selected" : "" }} value="{{ $value}}">{{ $key }}</option>
        @endforeach
      </select>
      @if($errors->has('icone'))
      @foreach($errors->get('icone') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-12">
      <label for="link">Link (Ex.: http://facebook.com.br/minhapagina)</label>
      <input required class='form-control' type="text" id="link" name="link" value="{{ isset($rede) ? $rede->link : old('link')}}">
      @if($errors->has('link'))
      @foreach($errors->get('link') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>