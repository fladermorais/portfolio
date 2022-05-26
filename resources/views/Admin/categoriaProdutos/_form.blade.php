<div class="form-group">
  <div class="form-row">
    <div class="col-md-12">
      <label for="nome">Nome</label>
      <input class='form-control' type="text" id="nome" name="nome" value="{{ (isset($categoria->nome) ? $categoria->nome : old('nome') )}}">
      @if($errors->has('nome'))
      @foreach($errors->get('nome') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
  <div class="form-row">
    <div class="col-md-12">
      <label for="previa">Prévia</label>
      <input class='form-control' type="text" id="previa" name="previa" value="{{ (isset($categoria->previa) ? $categoria->previa : old('previa') )}}">
      @if($errors->has('previa'))
      @foreach($errors->get('previa') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  
  <div class="form-row">
    <div class="col-md-12">
      <label for="descricao">Descrição</label>
      <textarea class='form-control' type="text" id="descricao" name="descricao">{{ (isset($categoria->descricao) ? $categoria->descricao : old('descricao') )}}</textarea>
      @if($errors->has('descricao'))
      @foreach($errors->get('descricao') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
</div>