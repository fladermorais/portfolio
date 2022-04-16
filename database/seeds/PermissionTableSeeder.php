<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        // Administradores
        // Usuários
        Permission::firstOrCreate([
            "name"  =>  "usuarios.create",
            "description"   =>  "Usuários - Criar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "usuarios.delete",
            "description"   =>  "Usuários - Deletar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "usuarios.edit",
            "description"   =>  "Usuários - Editar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "usuarios.index",
            "description"   =>  "Usuários - Listar",
            ]
        );
        
        // Relacionamento entre Usuário e Cargos
        Permission::firstOrCreate([
            "name"  =>  "userRole.store",
            "description"   =>  "Relacionamento entre Usuário e Cargos - Criar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "userRole.delete",
            "description"   =>  "Relacionamento entre Usuário e Cargos - Deletar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "userRole.index",
            "description"   =>  "Relacionamento entre Usuário e Cargos - Listar",
            ]
        );
        
        // Cargos
        Permission::firstOrCreate([
            "name"  =>  "roles.create",
            "description"   =>  "Cargos - Criar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "roles.edit",
            "description"   =>  "Cargos - Editar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "roles.index",
            "description"   =>  "Cargos - Listar",
            ]
        );

         // Categorias
         Permission::firstOrCreate([
            "name"  =>  "categorias.create",
            "description"   =>  "Categorias - Criar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "categorias.edit",
            "description"   =>  "Categorias - Editar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "categorias.index",
            "description"   =>  "Categorias - Listar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "categorias.delete",
            "description"   =>  "Categorias - Excluir",
            ]
        );

        // Noticias
        Permission::firstOrCreate([
            "name"  =>  "noticias.create",
            "description"   =>  "Notícias - Criar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "noticias.edit",
            "description"   =>  "Notícias - Editar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "noticias.index",
            "description"   =>  "Notícias - Listar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "noticias.delete",
            "description"   =>  "Notícias - Excluir",
            ]
        );

        // Configurações
        Permission::firstOrCreate([
            "name"  =>  "config.edit",
            "description"   =>  "Info do Site - Editar",
            ]
        );
        Permission::firstOrCreate([
            "name"  =>  "config.index",
            "description"   =>  "Info do Site - Listar",
            ]
        );

         // Mensagens
         Permission::firstOrCreate([
            "name"  =>  "mensagens",
            "description"   =>  "Listar mensagens recebidas do site",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "titulos.index",
            "description"   =>  "Listar títulos do site",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "titulos.edit",
            "description"   =>  "Editar títulos do site",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "titulos.store",
            "description"   =>  "Cadastrar títulos do site",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "titulos.delete",
            "description"   =>  "excluir títulos do site",
            ]
        );

        Permission::firstOrCreate([
            "name"  =>  "titulos.create",
            "description"   =>  "excluir títulos do site",
            ]
        );
    }
}
