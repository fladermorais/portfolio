<div class="form-group">
  <div class="form-row">
    <div class="col-sm-8">
      <label for="nome">Nome</label><br>
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
  
</div>