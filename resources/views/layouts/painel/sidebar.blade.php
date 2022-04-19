<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> --}}
            </div>
            <div class="pull-left info">
                <p>{{ auth()->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
            <br>
        </div>
        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">Menu de Navegação</li>
            @can('usuarios.index')
            <li><a href="{{ route('usuarios.index') }}"><i class="fa fa-users"></i> <span>Usuários</span></a></li>
            @endcan
            
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-rss-square"></i> <span>Notícias</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('categorias.index')
                    <li><a href="{{ route('categorias.index') }}"><i class="fa fa-folder"></i> Categorias</a></li>
                    @endcan
                    
                    @can('noticias.index')
                    <li><a href="{{ route('noticias.index') }}"><i class="fa fa-rss-square"></i> Notícias</a></li>
                    @endcan
                </ul>
            </li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i> <span>Produtos</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    @can('categoriasProdutos.index')
                    <li><a href="{{ route('categoriasProdutos.index') }}"><i class="fa fa-folder"></i>
                        Categorias</a></li>
                        @endcan
                        
                        @can('produtos.index')
                        <li><a href="{{ route('produtos.index') }}"><i class="fa fa-shopping-cart"></i> Produtos</a></li>
                        @endcan
                    </ul>
                </li>
                
                @can('recursos.index')
                <li><a href="{{ route('recursos.index') }}"><i class="fa fa-puzzle-piece"></i> Recursos</a></li>
                @endcan
                
                @can('clientes.index')
                <li><a href="{{ route('clientes.index') }}"><i class="fa fa-users"></i> <span>Clientes</span></a></li>
                @endcan
                
                @can('banners.index')
                <li><a href="{{ route('banners.index') }}"><i class="fa fa-image"></i> <span>Banners</span></a></li>
                @endcan
                
                @can('redes.index')
                <li><a href="{{ route('redes.index') }}"><i class="fa fa-share-alt"></i> <span>Redes Sociais</span></a></li>
                @endcan
                
                @can('config.index')
                <li><a href="{{ route('configs.index') }}"><i class="fa fa-building"></i> <span>Minha Empresa</span></a>
                </li>
                @endcan
                
                @can('config.index')
                <li><a href="{{ route('quemsomos.index') }}"><i class="fa fa-address-card"></i> <span>Quem Somos</span></a>
                </li>
                @endcan
                
                {{-- @can('mensagens')
                <li><a href="{{route('mensagens')}}"><i class="fa fa-envelope"></i> <span>Mensagens</span></a></li>
                @endcan --}}
                
                @can('roles.index')
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-cogs"></i> <span>Configurações</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="{{ route('roles.index') }}"><i class="fa fa-user-tag"></i> Cargos</a></li>
                        <li><a href="{{ route('permissions.index') }}"><i class="fa fa-tags"></i> Permissões</a></li>
                    </ul>
                </li>
                @endcan
                
                <li><a target="_blank" href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Visualizar
                    Site</span></a></li>
                    <li><a href="{{ route('mensagens') }}"><i class="fa fa-comments"></i> <span>Mensagens</span></a></li>
                    <li><a href="{{ route('titulos.index') }}"><i class="fa fa-comments"></i> <span>Títulos</span></a></li>
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>
        