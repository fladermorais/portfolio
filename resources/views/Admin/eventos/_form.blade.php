<div class="form-group">
  <div class="form-row">
    <div class="col-sm-8">
      <label for="titulo">Título</label><br>
      <input class='form-control' type="text" id="titulo" name="titulo" value="{{ (isset($info->titulo) ? $info->titulo : old('titulo')) }}">
      @if($errors->has('titulo'))
      @foreach($errors->get('titulo') as $e)
      <span class="error"><span class="error">{{$e}}</span></span>
      @endforeach
      @endif
    </div>
    
    <div class="col-sm-4">
      <label for="dia">Data</label><br>
      <input class='form-control' type="date" id="dia" name="dia"  value="{{ (isset($info->dia) ? date('Y-m-d', strtotime($info->dia)) : old('dia')) }}">
      @if($errors->has('dia'))
      @foreach($errors->get('dia') as $e)
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
  </div>
  
  <div class="form-row">
    <div class="col-sm-4">
      <label for="status">Statuso</label><br>
      <select name="status" id="status" class="form-control">
        <option {{ (isset($info->status) && $info->status == "ativo" ? "selected" : "") }} value="ativo">Ativo</option>
        <option {{ (isset($info->status) && $info->status == "inativo" ? "selected" : "") }} value="inativo">Inativo</option>
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
      <label for="descricao">Descrição</label><br>
      <input class='form-control' type="text" name="descricao" value="{{ (isset($info->descricao) ? $info->descricao : old('descricao')) }}">
      @if($errors->has('descricao'))
      @foreach($errors->get('descricao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>