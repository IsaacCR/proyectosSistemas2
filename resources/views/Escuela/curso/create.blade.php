@extends('layouts.principal')
@section('content')
    {!!Form::open()!!}
        <h3>Cursos</h3>
    	<div class="form-grup">
    		{!!Form::label('Codigo:')!!}
    		{!!Form::text('codigo',null,['class'=>'form-control','placeholder'=>'Ingrese Codigo'])!!}
    	</div>
    	<div class="form-grup">
    		{!!Form::label('Curso:')!!}
    		{!!Form::text('nombre_curso',null,['class'=>'form-control','placeholder'=>'Ingrese Nombre del Curso'])!!}
    	</div>
    	<div class="form-grup">
    		{!!Form::label('Descripcion:')!!}
    		{!!Form::text('descripcion',null,['class'=>'form-control','placeholder'=>'Ingrese Descripcion'])!!}
    	</div>
    	<div class="form-grup">
    		{!!Form::label('Maximo Estudiantes:')!!}
    		{!!Form::text('max_estudiantes',null,['class'=>'form-control','placeholder'=>'Ingrese Maximo de Estudiantes'])!!}
    	</div>
    	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!form::close()!!}

@stop
