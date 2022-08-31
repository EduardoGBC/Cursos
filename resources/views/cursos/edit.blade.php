@extends('layouts.plantilla')

@section('title', 'Edit')

@section('content')
<div class="container">
    <h1>Aqui puedes editar tus cursos</h1>

<form action="{{route('cursos.update', $curso)}}" method="POST">
    @csrf
    @method('put')
    <label for="" >
        Nombre
        <br><input type="text" value="{{old('nombre',$curso->nombre )}}" name="nombre">
    </label><br>

    @error('nombre')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <label for="">
        Descripcion
        <br><textarea name="description" id="" cols="30" rows="5">{{old('description', $curso->descripcion)}}</textarea>
    </label><br>

    @error('description')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror



    <label for="">
        Categoria
        <br><input type="text" value="{{old('categoria', $curso->categoria)}}" name="categoria">
    </label><br>

    @error('categoria')
    <br>
    <small>*{{$message}}</small>
    <br>
    @enderror

    <br>
    <button class="btn btn-primary" type="submit">Editar</button>
</form>
</div>


@endsection