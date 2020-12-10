@extends('layouts.plantilla')

@section('title', 'Editar Cursos')

@section('content')
    <h1>Bienvenido en esta pagina podrás editar un curso</h1>
    <div class="container">

        <form action="{{ route('cursos.update', $curso) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">
                Nombre
                <br>
                <input type="text" name="name" value="{{ old('name', $curso->name) }}">
                @error('name')
                    <br>
                    <small>
                        *{{ $message }}
                    </small>
                @enderror
                <br><br>
            </label>
            <label for="description">
                Descripción
                <br>
                <textarea name="description" cols="30" rows="5">{{ old('description', $curso->description) }}</textarea>
                @error('description')
                    <br>
                    <small>
                        *{{ $message }}
                    </small>
                @enderror
            </label>
            <br><br>
            <label for="category">
                Caterogía
                <br>
                <input type="text" name="category" value="{{ old('category', $curso->category) }}">
                @error('cateogry')
                    <br>
                    <small>
                        *{{ $message }}
                    </small>
                @enderror
            </label>
            <br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
@endsection
