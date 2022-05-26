<div class="form-group">
  <div class="form-row">
    <div class="col-md-8">
      <label for="titulo">Título</label>
      <input class='form-control' type="text" id="titulo" name="titulo" value="{{ (isset($info->titulo) ? $info->titulo : old('titulo') )}}">
      @if($errors->has('titulo'))
      @foreach($errors->get('titulo') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-md-4">
      <label for="icone">Ícone (Ex.: fas fa-edit)</label>
      <input class='form-control' type="text" id="icone" name="icone" value="{{ isset($info) ? $info->icone : old('icone')}}">
      @if($errors->has('icone'))
      @foreach($errors->get('icone') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-12">
      <label for="descricao">Descrição</label>
      <input type="text" name="descricao" value="{{ isset($info) ? $info->descricao : old('descricao')}}" class="form-control">
      {{-- <textarea name="descricao" id="descricao" name="descricao" cols="30" rows="5">{{ isset($info) ? $info->descricao : old('descricao')}}</textarea> --}}
      @if($errors->has('descricao'))
      @foreach($errors->get('descricao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>

<div class="col-md-12">
  <p><i>Link para visualização de icones <a href="https://fontawesome.com/v5/search" target="_blank">Clique aqui</a></i></p>
</div>