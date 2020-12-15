@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-4">

	        <a href="{{ url('/productos/show/' . $producto->id ) }}">
	            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
	        </a>

	    </div>
	    <div class="col-sm-8">

	    	<h4>Nombre: {{$producto->nombre}}</h4>
	    	<h4>Categoria: {{$producto->categoria}}</h4>
	    	<h4>Estado: 
	    					@if($producto->pendiente)
			                    Producto actualmente comprado.
			                @else
			                    Producto actualmente no comprado.
			                @endif
	    	</h4>

	    	@if($producto->pendiente)
                <a class="btn btn-danger" href="#">Comprar</a>
            @else
                <a class="btn btn-primary" href="#">Comprado</a>
            @endif
            <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar Producto</a>
            <a class="btn btn-outline-info" href="{{ url('/productos') }}">Volver al listado</a>

	    
	    </div>
	</div>

@stop