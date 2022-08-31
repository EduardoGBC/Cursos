@extends('layouts.plantilla')

@section('title', 'Show | '. $curso->nombre)


@section('content')
<div class="container">
        <h1>Bienvenido a tu curso: {{$curso->nombre}}</h1>
            <p>Categoria: {{$curso->categoria}}</p>
            <p>Descripcion: {{$curso->descripcion}}</p>
            <button class="btn btn-primary"> <a href="{{route('cursos.index')}}">Volver a cursos</a><br> </button>
            <br> <br>
            <button class="btn btn-primary"><a href="{{route('cursos.edit', $curso)}}">Editar curso</a> </button>
            

            <form action="{{Route('cursos.destroy', $curso)}}" method="POST">
                @csrf
                @method('delete')
                <br><button class=" btn btn-danger" type="submit">Eliminar</button>
            </form>
</div>

@endsection