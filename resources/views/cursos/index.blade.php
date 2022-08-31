@extends('layouts.plantilla')
@section('title', 'Index')
@section('nabvar')
@section('content')

<div class="container">
    <h1>Bienvenido a tu pagina principal de cursos</h1>

    <button type="button" class="btn btn-primary float-end"><a href="{{route('cursos.create')}}">Crear un nuevo curso</a></button>
    

    <div class="container">
        <br>
        <h3>Lista de cursos</h3>
    <ul>
            @foreach ($cursos as $curso)
                <li><a href="{{route('cursos.show', $curso->id)}}">{{$curso->nombre}}</a></li>
            @endforeach
    </ul>
    {{$cursos->links();}}
    </div>

</div>

@endsection
