<div class="form-group">
  <div class="form-row">
    <div class="col-sm-4">
      <label for="titulo">Título</label><br>
      <input class='form-control' type="text" id="titulo" name="titulo" value="{{ (isset($info->titulo) ? $info->titulo : old('titulo')) }}">
      @if($errors->has('titulo'))
      @foreach($errors->get('titulo') as $e)
      <span class="error"><span class="error">{{$e}}</span></span>
      @endforeach
      @endif
    </div>
    <div class="col-sm-2">
      <label for="preco">Valor</label><br>
      <input class='form-control' type="text" id="preco" name="preco"  value="{{ (isset($info->preco) ? $info->preco : old('preco')) }}" >
      @if($errors->has('preco'))
      @foreach($errors->get('preco') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-2">
      <label for="icone">Icone</label><br>
      <input class='form-control' type="text" id="icone" name="icone"  value="{{ (isset($info->icone) ? $info->icone : old('icone')) }}" >
      @if($errors->has('icone'))
      @foreach($errors->get('icone') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-2">
      <label for="categoria_id">Categoria</label><br>
      <select class="form-control" name="categoria_id" id="categoria_id">
        <option value="">Escolha uma Categoria</option>
        @foreach($categorias as $cat)
        <option {{ (isset($info->categoria_id) && $info->categoria_id == $cat->id) ? "selected" : "" }} value="{{ $cat->id }}">{{ $cat->nome }}</option>
        @endforeach
      </select>
      @if($errors->has('categoria_id'))
      @foreach($errors->get('categoria_id') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-2">
      <label for="status">Status</label><br>
      <select class="form-control" name="status" id="status">
        <option {{ (isset($info->status) && $info->status == 'ativo' ? "selected" : "") }} value="ativo">Ativo</option>
        <option {{ (isset($info->status) && $info->status == 'inativo' ? "selected" : "") }} value="inativo">Inativo</option>
      </select>
      @if($errors->has('status'))
      @foreach($errors->get('status') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
  <div class="form-row">
    <div class="col-sm-12">
      <label for="previa">Prévia (Usado na página inicial) </label><br>
      <textarea class="form-control" name="previa" id="previa" cols="30" rows="3">{{ (isset($info->previa) ? $info->previa : old('previa')) }}</textarea>
      @if($errors->has('previa'))
      @foreach($errors->get('previa') as $e)
      <span class="error">{{$e}}</span>
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
  
  <div class="form-row">
    <div class="col-sm-8">
      <label for="link">Link Externo</label><br>
      <input class='form-control' type="text" id="link" name="link" value="{{ (isset($info->link) ? $info->link : old('link')) }}">
      @if($errors->has('link'))
      @foreach($errors->get('link') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-4">
      <label for="destaque">Destaque</label><br>
      <select class="form-control" name="destaque" id="destaque">
        <option {{ (isset($info->destaque) && $info->destaque == 'nao' ? "selected" : "") }} value="nao">Não</option>
        <option {{ (isset($info->destaque) && $info->destaque == 'sim' ? "selected" : "") }} value="sim">Sim</option>
      </select>
      @if($errors->has('destaque'))
      @foreach($errors->get('destaque') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>