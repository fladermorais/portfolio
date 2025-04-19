<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
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
            <li>
                <a href="{{ route('usuarios.index') }}"><i class="fa fa-users"></i> <span>Usuários</span></a>
            </li>
            @endcan
            
            @can('config.index')
            <li>
                <a href="{{ route('configs.index') }}"><i class="fa fa-building"></i> <span>Empresa</span></a>
            </li>
            @endcan
            
            @can('config.index')
            <li>
                <a href="{{ route('quemsomos.index') }}"><i class="fa fa-address-card"></i> <span>Quem Somos</span></a>
            </li>
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
            
            @can('redes.index')
            <li><a href="{{ route('redes.index') }}"><i class="fa fa-share-alt"></i> <span>Redes Sociais</span></a></li>
            @endcan
            
            <li><a href="{{ route('mensagens') }}"><i class="fa fa-comments"></i> <span>Mensagens</span></a></li>
            
            <li><a target="_blank" href="{{ route('home') }}"><i class="fa fa-link"></i> <span>Visualizar Site</span></a></li>
            
        </ul>
    </section>
</aside>