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
</div>