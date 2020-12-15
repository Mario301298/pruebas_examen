@extends('layouts.master')

@section('content')

    <div class="row">

	    <div class="col-sm-4">

	        <a href="{{ url('/productos/show/' . $id ) }}">
	            <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
	        </a>

	    </div>
	    <div class="col-sm-8">

	    	<h4>Nombre: {{$producto[0]}}</h4>
	    	<h4>Categoria: {{$producto[1]}}</h4>
	    	<h4>Estado: Producto actualmente comprado</h4>

	    	<input type="button" value="Pendiente de compra" style="background-color: red">
	    	<input type="button" value="Editar Producto" style="background-color: yellow">
	    	<input type="button" value="Volver al listado" style="background-color: green">

	    
	    </div>
	</div>

@stop