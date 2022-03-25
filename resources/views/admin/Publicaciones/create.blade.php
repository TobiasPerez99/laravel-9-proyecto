@extends('adminlte::page')

@section('title', 'Crear Nueva Publicacion')

@section('content_header')
    <h1>Crear Publicacion</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.publicaciones.store']) !!}

                <div class="form-group">
                    {!! Form::label('Codigo', 'Codigo') !!}
                    {!! Form::text('code', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un Codigo']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('modelo', 'Modelo') !!}
                    {!! Form::text('modelo', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un Modelo']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('año', 'Año') !!}
                    {!! Form::text('año', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un año']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Color', 'Color') !!}
                    {!! Form::text('color', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un Color']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Marca', 'Marca') !!}
                    {!! Form::text('marca', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese una Marca']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('kilometros', 'Kilometros') !!}
                    {!! Form::text('kilometros', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un kilometraje']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('precio', 'Precio') !!}
                    {!! Form::text('precio', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un precio']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Motor', 'Motor') !!}
                    {!! Form::text('motor', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un motor']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Transmision', 'Transmision') !!}
                    {!! Form::text('transmision', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un transmision']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Puertas', 'Puertas') !!}
                    {!! Form::text('puertas', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un puertas']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Concesionaria', 'Concesionaria') !!}
                    {!! Form::text('consesionaria', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un puertas']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('Dueños', 'Dueños') !!}
                    {!! Form::text('dueños', null, ['class' => 'form-group' , 'placeholder' => 'Ingrese un puertas']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('destacado', 'Destacado ?') !!}
                    {!! Form::checkbox('destacado', 1, 'destacado', ['class' => 'form-group']) !!}
                </div>
                {!! Form::submit('Crear Publicacion', null) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
