

<li class="{{ Request::is('tModelos*') ? 'active' : '' }}">
    <a href="{{ route('tModelos.index') }}"><i class="fa fa-edit"></i><span>Modelos</span></a>
</li>

<li class="{{ Request::is('estados*') ? 'active' : '' }}">
    <a href="{{ route('estados.index') }}"><i class="fa fa-edit"></i><span>Estados</span></a>
</li>

<li class="{{ Request::is('aliados*') ? 'active' : '' }}">
    <a href="{{ route('aliados.index') }}"><i class="fa fa-edit"></i><span>Aliados</span></a>
</li>

<li class="{{ Request::is('clientes*') ? 'active' : '' }}">
    <a href="{{ route('clientes.index') }}"><i class="fa fa-edit"></i><span>Clientes</span></a>
</li>

<li class="{{ Request::is('categorias*') ? 'active' : '' }}">
    <a href="{{ route('categorias.index') }}"><i class="fa fa-edit"></i><span>Categorias</span></a>
</li>

<li class="{{ Request::is('servicios*') ? 'active' : '' }}">
    <a href="{{ route('servicios.index') }}"><i class="fa fa-edit"></i><span>Servicios</span></a>
</li>

<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{{ route('productos.index') }}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('posts*') ? 'active' : '' }}">
    <a href="{{ route('posts.index') }}"><i class="fa fa-edit"></i><span>Posts</span></a>
</li>

<li class="{{ Request::is('rols*') ? 'active' : '' }}">
    <a href="{{ route('rols.index') }}"><i class="fa fa-edit"></i><span>Rols</span></a>
</li>

<li class="{{ Request::is('ilustrables*') ? 'active' : '' }}">
    <a href="{{ route('ilustrables.index') }}"><i class="fa fa-edit"></i><span>Ilustrables</span></a>
</li>




