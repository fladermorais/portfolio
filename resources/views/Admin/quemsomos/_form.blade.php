<div class="form-group">
  <div class="form-row">
    <div class="col-sm-6">
      <label for="titulo">Título</label><br>
      <input class='form-control' type="text" id="titulo" name="titulo" value="{{ (isset($info->titulo) ? $info->titulo : old('titulo')) }}">
      @if($errors->has('titulo'))
      @foreach($errors->get('titulo') as $e)
      <span class="error"><span class="error">{{$e}}</span></span>
      @endforeach
      @endif
    </div>

    <div class="col-sm-6">
      <label for="subtitulo">Sub-Título</label><br>
      <input class='form-control' type="text" id="subtitulo" name="subtitulo" value="{{ (isset($info->subtitulo) ? $info->subtitulo : old('subtitulo')) }}">
      @if($errors->has('subtitulo'))
      @foreach($errors->get('subtitulo') as $e)
      <span class="error"><span class="error">{{$e}}</span></span>
      @endforeach
      @endif
    </div>
  </div>

  <div class="form-row">
    <div class="col-sm-5">
      <label for="arquivo">Imagem</label><br>
      <input class='form-control' type="file" id="arquivo" name="arquivo" >
      @if($errors->has('arquivo'))
      @foreach($errors->get('arquivo') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>

    <div class="col-sm-5">
      <label for="menu">Menu</label><br>
      <input class='form-control' type="text" id="menu" name="menu" >
      @if($errors->has('menu'))
      @foreach($errors->get('menu') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-2">
      <label for="">Ordem</label>
      <input type="number" class="form-control" id="ordem" name="ordem" value="{{ (isset($info->ordem) ? $info->ordem : old('ordem')) }}">
      @if($errors->has('ordem'))
      @foreach($errors->get('ordem') as $e)
      <span class="error"><span class="error">{{$e}}</span></span>
      @endforeach
      @endif
    </div>
  </div>
  
  <div class="form-row">
    <div class="col-sm-12">
      <label for="descricao">Descrição</label><br>
      <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10">{{ (isset($info->descricao) ? $info->descricao : old('descricao')) }}</textarea>
      @if($errors->has('descricao'))
      @foreach($errors->get('descricao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>