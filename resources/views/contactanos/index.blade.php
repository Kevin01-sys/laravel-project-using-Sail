@extends('layouts.plantilla')

@section('title','Home')

@section('content')
    <h1>Dejanos un mensaje</h1>
    <form action="{{route('contactanos.store')}}" method="POST">
        @csrf
        <label for="">
            Nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>

        @error('name')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Correo:
            <br>
            <input type="text" name="correo">
        </label>
        <br>

        @error('correo')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <label for="">
            Mensaje:
            <br>
            <textarea name="mensaje" rows="4"></textarea>
        </label>
        <br>

        @error('mensaje')
            <p><strong>{{$message}}</strong></p>
        @enderror

        <button type="submit">Enviar mensaje</button>
    </form>

    @if (session('info'))
        <script>
            	alert("{{session('info')}}")
        </script> 
    @endif
@endsection