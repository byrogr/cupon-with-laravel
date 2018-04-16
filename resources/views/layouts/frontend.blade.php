@extends('layouts.template')

@section('container')
	<div class="row">
	    <div class="col-md-9">
	        @yield('content')
	    </div>
	    <aside id="sidebar-der" class="col-md-3 pull-rigth">
	        @section('aside')
	            <div class="row">
	                <div class="col-md-12">
						@if (Auth::guard('store')->check())
							<h3>Conectado como</h3>
                            <p><b>{{ Auth::guard('store')->user()->name }}</b></p>

                            <p>
                                <a href="{{ route('dashboard.stores', ['usuario' => Auth::guard('store')->user()->slug]) }}">
                                    Panel
                                </a>
                            </p>
                            <a href="{{ route('logout.stores') }}"
                               class="btn btn-danger btn-block"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Cerrar sesion
                            </a>

                            <form id="logout-form"
                                  action="{{ route('logout.stores') }}"
                                  method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
						@else
							<h3>Accede a tu cuenta</h3>
							<form action="{{ route('login.stores') }}" method="post">
								{{ csrf_field() }}
								<div class="form-group">
									<label for="txtLogin">Usuario</label>
									<input type="text"
										   class="form-control"
										   id="txtLogin"
										   name="login"
										   placeholder="Ingrese su usuario">
								</div>
								<div class="form-group">
									<label for="txtPassword">Contrasena</label>
									<input type="password"
										   class="form-control"
										   id="txtPassword"
										   name="password"
										   placeholder="Ingrese su password">
								</div>
								<button type="submit" class="btn btn-primary btn-block">Acceder</button>
							</form>
						@endif
	                </div><!-- end of .col -->
	            </div><!-- end of .row -->
	        @show                
	    </aside>
	</div><!-- end of .row -->
@endsection