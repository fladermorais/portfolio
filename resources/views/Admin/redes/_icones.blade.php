<div class="box">
  <div class="box-header">
    <h2>Ícones</h2>
  </div>
  <div class="box-body">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Titulo</th>
          <th>Ícone</th>
        </tr>
      </thead>
      <tbody>
        @foreach($icones as $key => $value)
        <tr>
        <td>{{ $key }}</td>
        <td><i class="{{ $value }}"></i></td>
        </tr>
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>