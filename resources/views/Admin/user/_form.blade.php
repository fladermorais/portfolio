<div class="form-group">
  <div class="form-row">
    <div class="col-sm-12">
      <label for="name">Nome * </label><br>
      <input required class='form-control' type="text" id="name" name="name" value="{{ (isset($user->name) ? $user->name : old('name')) }}">
      @if($errors->has('name'))
      @foreach($errors->get('name') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">
      <label for="email">Email</label>
      <input class='form-control' type="text" id="email" name="email" value="{{ (isset($user->email) ? $user->email : old('email')) }}">
      @if($errors->has('email'))
      @foreach($errors->get('email') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-md-4">
      <label for="password">Senha</label>
      <input class='form-control' type="password" id="password" name="password" value="{{ old('password') }}">
      @if($errors->has('password'))
      @foreach($errors->get('password') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
    
    <div class="col-md-4">
      <label for="password_confirmation">Confirmar Senha:</label>
      <input class='form-control' type="password" id="password_confirmation" name="password_confirmation">
      @if($errors->has('password_confirmation'))
      @foreach($errors->get('password_confirmation') as $e)
      <span class="error">{{$e}}</span>
      @endforeach
      @endif
    </div>
  </div>
</div>