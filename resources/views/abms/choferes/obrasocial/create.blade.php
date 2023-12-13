@extends('layouts.admin')
@section('contenido')
	<div class="row">
		<div class="col-lg-6 col-lg-6 col-lg-6 col-xs-12">
			<h3>Nuevo Registro Obra Social</h3>

			@if(count($errors)>0)
			<div class="alert alert-danger" role="alert">
				<ul>
					
					@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
			@endif	
 			{!!Form::open(array('url'=>'abms/obrasocial','method'=>'POST','autocomplete'=>'off','enctype'=>'multipart/form-data'))!!} 
			{{Form::token()}}

			<div class="Form-group">
				<!-- <label for="nombre">Dominio</label> -->
				{{Form::label('codigo', 'Codigo')}}
				<input type="text" class="form-control {{$errors->has('codigo')?'is-invalid':''}}" placeholder="Codigo..." name="codigo" id="descripcion"  value="{{old('codigo')}}">
				{!! $errors->first('codigo','<div class="invalid-feedback">:message</div>')!!}

			</div>
			<div class="Form-group">
				<!-- <label for="nombre">Dominio</label> -->
				{{Form::label('nombre', 'Denominación')}}
				<input type="text" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" placeholder="Denominacion..." name="nombre" id="descripcion"  value="{{old('nombre')}}">
				{!! $errors->first('nombre','<div class="invalid-feedback">:message</div>')!!}

			</div>

			<br>
			<div class="Form-group">
				<button class="btn btn-primary" type="submit">Guardar</button>
				<button class="btn btn-danger" type="reset">Cancelar</button>
			</div>

			
			{!!Form::close()!!}
			
			<div class="Form-group">
				<br/>
				<a href="/abms/obrasocial"><button class="btn btn-success">Regresar</button></a>
			</div>

		</div>
	</div> 
@endsection