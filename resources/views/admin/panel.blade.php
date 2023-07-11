@extends('layout.index')

@section('acceso')
    <ul class="sidebar-menu">
    <li class="menu-header">Administrador</li>
        <li>
            <a href="#" class="menu-toggle nav-link has-dropdown"><i
                    data-feather="command"></i><span>Parámetros</span></a>
            <ul class="dropdown-menu">
                <li><a class="nav-link" href="">Sedes</a></li>
                <li><a class="nav-link" href="">Escuelas</a></li>
                <li><a class="nav-link" href="">Carreras</a></li>
                <li><a class="nav-link" href="">Ambitos de Contribución</a></li>
                <li><a class="nav-link" href="">Programas</a></li>
                <li><a class="nav-link" href="">Convenios</a></li>
            </ul>
        </li>
        <li>
            <a href="javascript:void(0)" class="menu-toggle nav-link has-dropdown"><i data-feather="users"></i><span>Usuarios</span></a>
            <ul class="dropdown-menu">
                <li><a href="">Usuarios creados</a></li>
            </ul>
        </li>        
    </ul>
    </aside>
    </div>
@endsection

@section('contenido')
