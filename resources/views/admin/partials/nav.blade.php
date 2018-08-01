<ul class="sidebar-menu" data-widget="tree">
        <li class="header">Navegacion</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="{{ request()->is('admin') ? 'class=active' : ''}}"> <a href="{{ route('dashboar')}}"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
     
        <li class="treeview {{ request()->is('admin/posts') ? 'active' : ''}}">
          <a href="#"><i class="fa fa-bars"></i> <span>Blog</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('admin/posts') ? 'class=active' : ''}}><a href="{{ route('admin.posts.index')}}">Ver todos los post</a></li>
            <li><a href="#" data-toggle="modal" data-target="#exampleModal">Crear un post</a></li>
            <li><a href="{{url('/tag/create')}}" >Crear un tag</a></li>
            <li><a href="{{url('/Categoria/create')}}" >Crear un categoria</a></li>
       
            
            
          </ul>
        </li>

        <li class="treeview {{ request()->is('admin/posts') ? 'active' : ''}}">
          <a href="#"><i class="fa fa-bars"></i> <span>Usuarios</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li {{ request()->is('clientes') ? 'class=active' : ''}}><a href="{{ route('clientes') }}">Ver todos los usuarios</a></li>
            
          </ul>
        </li>
      </ul>