@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvendio a la pagina cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show',$curso) }}">
                    {{ $curso->name }} - {{ $curso->category }}
                </a>
                <p>
                    {{ $curso->description }}
                </p>
            </li>
        @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
