@extends('layouts.plantilla')

@section('title', 'Crear nuevo curso')

@section('content')
<div class="container">
    <h1>Aqui puedes crear tus cursos</h1>

<form action="{{route('cursos.store')}}" method="POST">
    @csrf

    <label for="" >
        Nombre
        <br><input type="text" value="{{old('nombre')}}" name="nombre">
    </label>
    @error('nombre')
    <br>
    <small>*{{$message}} </small>
    <br>
    @enderror
    
    <br>
    <label for="">
        Descripcion
        <br><textarea name="description" id="" cols="30" rows="5">{{old('description')}}</textarea>
    </label>

    @error('description')
    <br>
    <small>*{{$message}} </small>
    <br>
    @enderror
<br>
    <label for="">
        Categoria
        <br><input name="categoria" type="text" value="{{old('categoria')}}" >
    </label>

    @error('categoria')
    <br>
    <small>*{{$message}} </small>
    <br>
    @enderror

    <br><br><button class="btn btn-primary" type="submit">Enviar formulario</button>
</form>
</div>


@endsection