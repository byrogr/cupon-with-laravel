@extends('layouts.template')

@section('css')
<link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
@stop

@section('container')
	<header>
        <h1><a href="{{ route('portada') }}">CUPON</a></h1>
        <nav>
            <ul>
                <li><a href="{{ route('portada') }}">Oferta del día</a></li>
                <li><a href="#">Ofertas recientes</a></li>
                <li><a href="#">Mis ofertas</a></li>
                {{-- <li>{{ render(controller('AppBundle:Ciudad:listaCiudades', { ciudad: ciudadSeleccionada })) }}</li> --}}
            </ul>
        </nav>
    </header>
    <article class="oferta">
         @yield('content')
    </article>
	<aside>
        @section('aside')
            @if (Auth::guard('store')->check())
                <p>Conectado como <b>{{ Auth::guard('store')->user()->name }}</b></p>

                <a href="{{ route('dashboard.stores', ['usuario' => Auth::guard('store')->user()->slug]) }}">
                        Panel
                    </a>
                <a href="#">Ver mi perfil</a>
                <a href="{{ route('logout.stores') }}" 
                	onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                    Cerrar sesion
                </a>

                <form id="logout-form"
                      action="{{ route('logout.stores') }}"
                      method="POST"
                      style="display: none;">
                    {{ csrf_field() }}
                </form>
			@else
				<a id="registrate" class="boton" href="#">Regístrate</a>
				<section id="login">
					<h2>Accede a tu cuenta</h2>
					<form action="{{ route('login.stores') }}" method="post">
						{{ csrf_field() }}
						<label for="txtLogin">Usuario</label>
						<input type="text" id="txtLogin" name="login">
						<label for="txtPassword">Contrase&ntilde;a</label>
						<input type="password" id="txtPassword" name="password">
						<input type="submit" value="Entrar">
					</form>
				</section>
			@endif
        @show                
    </aside>
@endsection