<div class="form-group">
  <div class="form-row">
    <div class="col-sm-8">
      <label for="nome">Título</label><br>
      <input class='form-control' type="text" id="nome" name="nome" value="{{ (isset($info->nome) ? $info->nome : old('nome')) }}">
      @if($errors->has('nome'))
      @foreach($errors->get('nome') as $e)
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
    
  </div>  
  
  <div class="form-row">
    <div class="col-sm-12">
      <label for="link">Link Externo</label><br>
      <input class='form-control' type="text" id="link" name="link" value="{{ (isset($info->link) ? $info->link : old('link')) }}">
      @if($errors->has('link'))
      @foreach($errors->get('link') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
  <div class="form-row">
    <div class="col-sm-12">
      <label for="descricao">Descrição</label><br>
      <textarea name="descricao" id="descricao" class="form-control" cols="30" rows="10">{{ (isset($info->descricao) ? $info->descricao : old('descricao')) }}</textarea>
      @if($errors->has('descricao'))
      @foreach($errors->get('descricao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
  
</div>