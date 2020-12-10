@extends('layouts.plantilla')

@section('title', 'Contactanos')

@section('content')
    <h1>Dejanos un mensaje</h1>

    <form action="{{ route('contactanos.store') }}" method="POST">
        @csrf
        <label for="name">Nombre</label>
        <br>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <br>
            <small>
                *{{ $message }}
            </small>
        @enderror
        <br><br>
        <label for="email">Correo</label>
        <br>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <br>
            <small>
                *{{ $message }}
            </small>
        @enderror
        <br><br>
        <label for="message">Mensaje</label>
        <br>
        <textarea name="message" id="message" rows="4">{{ old('message') }}</textarea>
        @error('message')
            <br>
            <small>
                *{{ $message }}
            </small>
        @enderror
        <br><br>
        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            alert("{{ session('info') }}");

        </script>
    @endif
    
@endsection
