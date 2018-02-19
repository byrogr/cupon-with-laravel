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
	                    <h3>Accede a tu cuenta</h3>
	                    <form action="">
	                        <div class="form-group">
	                            <label for="txtEmail">Email</label>
	                            <input type="email" class="form-control" id="txtEmail" name="email" placeholder="Ingrese su email">
	                        </div>
	                        <div class="form-group">
	                            <label for="txtPassword">Password</label>
	                            <input type="password" class="form-control" id="txtPassword" placeholder="Ingrese su password">
	                        </div>
	                        <button type="submit" class="btn btn-primary">Acceder</button>
	                    </form>
	                </div><!-- end of .col -->
	            </div><!-- end of .row -->
	        @show                
	    </aside>
	</div><!-- end of .row -->
@endsection