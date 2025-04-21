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
    
    <div class="col-sm-4">
      <label for="arquivo">Imagem</label><br>
      <input class='form-control' type="file" id="arquivo" name="arquivo" >
      @if($errors->has('arquivo'))
      @foreach($errors->get('arquivo') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-2">
      <label for="">Orden</label>
      <input type="number" class="form-control" id="ordem" name="ordem" value="{{ (isset($info->ordem) ? $info->ordem : old('ordem')) }}">
      @if($errors->has('ordemm'))
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