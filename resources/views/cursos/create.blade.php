@extends('layouts.plantilla')

@section('title', 'Crear Cursos')

@section('content')
    <h1>Bienvenido en esta pagina podrás crear un curso</h1>
    <div class="container">

        <form action="{{ route('cursos.store') }}" method="POST">
            @csrf
            <label for="name">
                Nombre
                <br>
                <input type="text" name="name" value="{{ old('name') }}">
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
                <textarea name="description" cols="30" rows="5">{{ old('description') }}</textarea>
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
                <input type="text" name="category" value="{{ old('category') }}">
                @error('category')
                    <br>
                    <small>
                        *{{ $message }}
                    </small>
                @enderror
            </label>
            <br><br>
            <button type="submit">Crear Curso</button>
        </form>
    </div>
@endsection
