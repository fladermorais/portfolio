<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>Nova mensagem do Site!</title>
    
    
</head>
<body>
  
    <div class="container titulo">
        <div class="row">
            <p>
                Mensagem enviada através do formulário do site!
            </p>
        </div>
    </div>

    <div class="container">
        <p><span>Nome: </span>{{ $contato->nome }}</p>
        <p><span>Telefone: </span>{{ $contato->telefone }}</p>
        <p><span>Email: </span>{{ $contato->email }}</p>
        <p><span>Assunto: </span>{{ $contato->assunto }}</p>
        <p><span>Mensagem: </span>{!! $contato->mensagem !!}</p>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

<style>
    body{
        background: #dcdcdc;
    }
    
    .container {
        border-bottom: 4px solid #183e65;
    }
    
    .navbar{
        background: #fff;
        padding: 20px;
    }
    .topo {
        width: 100%; 
        background: #fff;
    }
    .logo {
        width: 200px;
    }
    .logo img{
        display: block;
        width: 100%;
    }
    
    .titulo {
        border: 1px solid #ccc;
        padding: 20x;
        background: #183e65;
        color: #fff;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .titulo p{
        padding: 10px;
    }
    .corpo{
        border: 2px solid #ccc;
        background: #fff;
        padding: 20px;
    }
    .conteudo {
        border: 1px solid #ccc;
        width: 100%;
        display: flex; width: 95%;
        margin: 0 auto;
        padding: 15px;
    }
    
    .detalhes{
        border: 1px solid #ccc;
        width: 95%;
        padding: 10px;
        font-size: .85em;
        margin: 0 auto;
        margin-top: 60px;
    }
    .detalhes div {
        margin: 5px;
    }
    .detalhes p {text-align: center;}
    .detalhes .box {
        display: flex; flex-wrap: wrap; justify-content: space-between;
    }
    .item {
        flex: 1 1 300px;
        max-width: 300px;
        margin: 0 auto;
    }
</style>