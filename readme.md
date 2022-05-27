## Sobre este sistema

Sistema de notícias em laravel separado por categorias/ notícias
Este sistema possúi níveis de permissões.
Atualmente as permissões são divididas em:
*Administrador ( Acesso a todo o sistema );
*Editor ( Acesso a listar, criar e editar notícias );

Os níveis podem ser criados no menu Configurações/ Cargos



## Instalação

Após realizar o clone do projeto é necessário criar uma tabela no banco de dados.

Acesse o Mysql de sua máquina
```
mysql -u root -p
```

Entre com a sua senha.

Criar o Banco:
```
create database meu_banco;
```

Saia do Mysql
```
quit;
```

### Configuração do Arquivo .env
Acesse a raiz do seu projeto e copie o arquivo .env.example
```
cp .env.example .env
```

Altere as configurações referente ao banco nas linhas correspondentes ao '''mysql'''
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=meu_banco
DB_USERNAME=meu_user
DB_PASSWORD=minha_senha
```

Agora que o arquivo .env foi criado e configurado o banco de dados é necessário gerar a chave do Laravel através do seguinte comando:
```
php artisan key:generate
```

### Criando as tabelas no Banco de Dados
Para gerar as tabelas no banco execute o seguinte comando
```
php artisan migrate --seed
```
O Comando acima irá gerar todas as tabelas junto com as permissões de usuários, os três cargos/ funções e um usuário Administrador

### Usuário padrão do sistema
```
usuário:    admin@brdsoft.com.br
senha:      Mudar123@
```


## Dando permissão para a pasta storage
É necessário dar permissão para a pasta storage, para o sistema gerar alguns logs e arquivos necessários.
Dentro da pasta raiz do projeto execute o seguinte comando:
```
sudo chmod -R 777 storage
```
