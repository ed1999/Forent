@extends('adminlte::page')

@section('title', 'Adm Renta')

@section('content_header')
    <h1>Observaciones de la propiedad: {{$course->title}}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => ['admin.courses.reject', $course]]) !!}
                <div class="form-group">
                        {!! Form::label('body', 'Observaciones de la propiedad') !!}
                        {!! Form::textarea('body', null) !!}

                        @error('body')
                            <strong class="text-danger">{{$message}}</strong>
                        @enderror
                </div>

                {!! Form::submit('Rechazar propiedad', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#body' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
@stop