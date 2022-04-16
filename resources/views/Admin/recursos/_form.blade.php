<div class="form-group">
  <div class="form-row">
    <div class="col-md-6">
      <label for="titulo">Título</label>
      <input class='form-control' type="text" id="titulo" name="titulo" value="{{ (isset($info->titulo) ? $info->titulo : old('titulo') )}}">
      @if($errors->has('titulo'))
      @foreach($errors->get('titulo') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-md-3">
      <label for="produto_id">Produto</label>
      <select class="form-control" name="produto_id" id="produto_id">
        <option value="">Escolha um Produto</option>
        @foreach($produtos as $produto)
        <option {{ (isset($info->produto_id) && $info->produto_id == $produto->id ? "selected" : "") }} value="{{ $produto->id }}">{{ $produto->titulo }}</option>
        @endforeach
      </select>
      @if($errors->has('produto_id'))
      @foreach($errors->get('produto_id') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-md-3">
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
      <textarea name="descricao" id="descricao" name="descricao" cols="30" rows="5">{{ isset($info) ? $info->descricao : old('descricao')}}</textarea>
      @if($errors->has('descricao'))
      @foreach($errors->get('descricao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
</div>

{{-- <div class="col-md-12">
  <p><i>Link para visualização de icones <a href="https://fontawesome.com/icons" target="_blank">Clique aqui</a></i></p>
</div> --}}