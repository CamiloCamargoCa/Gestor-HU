
<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-user"></i><span>Registrados</span></a>
</li>

<li class="{{ Request::is('usuarios*') ? 'active' : '' }}">
    <a href="{!! route('usuarios.index') !!}"><i class="fa fa-address-card-o"></i><span>Usuarios</span></a>
</li>

<li class="{{ Request::is('proyectos*') ? 'active' : '' }}">
    <a href="{!! route('proyectos.index') !!}"><i class="fa fa-product-hunt"></i><span>Proyectos</span></a>
</li>

<li class="{{ Request::is('rolles*') ? 'active' : '' }}">
    <a href="{!! route('rolles.index') !!}"><i class="fa fa-users"></i><span>Rolles</span></a>
</li>

<li class="{{ Request::is('historiasUsuarios*') ? 'active' : '' }}">
    <a href="{!! route('historiasUsuarios.index') !!}"><i class="fa fa-history"></i><span>Historias Usuarios</span></a>
</li>

<li class="{{ Request::is('criterios*') ? 'active' : '' }}">
    <a href="{!! route('criterios.index') !!}"><i class="fa fa-list-ul"></i><span>Criterios</span></a>
</li>

<li class="{{ Request::is('historiasDetalles*') ? 'active' : '' }}">
    <a href="{!! route('historiasDetalles.index') !!}"><i class="fa fa-edit"></i><span>Planeación</span></a>
</li>



<li class="{{ Request::is('empleados*') ? 'active' : '' }}">
    <a href="{!! route('empleados.index') !!}"><i class="fa fa-edit"></i><span>Empleados</span></a>
</li>

