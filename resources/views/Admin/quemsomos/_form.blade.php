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
    <div class="col-sm-4">
      <label for="objetivos">Objetivo</label><br>
      <textarea class="form-control" name="objetivos" id="objetivos" cols="30" rows="5">{{ (isset($info->objetivos) ? $info->objetivos : old('objetivos')) }}</textarea>
      @if($errors->has('objetivos'))
      @foreach($errors->get('objetivos') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  
    <div class="col-sm-4">
      <label for="missao">Missão</label><br>
      <textarea class="form-control" name="missao" id="missao" cols="30" rows="5">{{ (isset($info->missao) ? $info->missao : old('missao')) }}</textarea>
      @if($errors->has('missao'))
      @foreach($errors->get('missao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  
    <div class="col-sm-4">
      <label for="valores">Valores</label><br>
      <textarea class="form-control" name="valores" id="valores" cols="30" rows="5">{{ (isset($info->valores) ? $info->valores : old('valores')) }}</textarea>
      @if($errors->has('valores'))
      @foreach($errors->get('valores') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>