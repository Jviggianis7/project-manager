@extends('adminlte::page')

@section('title', 'Editar Persona')

@section('content_header')
    <h1>Editar Persona</h1>
@stop

@section('content')
    <form action="/dash/{{ $persona->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="Nombre" class="form-label">Nombre</label>
            <input id="Nombre" name="Nombre" type="text" class="form-control" value="{{ $persona->Nombre }}" tabindex="1">
        </div>
        <div class="mb-3">
            <label for="Apellidos" class="form-label">Apellidos</label>
            <input id="Apellidos" name="Apellidos" type="text" class="form-control" value="{{ $persona->Apellidos }}" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="Direccion" class="form-label">Dirección</label>
            <input id="Direccion" name="Direccion" type="text" class="form-control" value="{{ $persona->Direccion }}" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="Telefono" class="form-label">Teléfono</label>
            <input id="Telefono" name="Telefono" type="text" class="form-control" value="{{ $persona->Telefono }}" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="Sexo" class="form-label">Sexo</label>
            <select id="Sexo" name="Sexo" class="form-control" tabindex="5">
                <option value="Masculino" {{ $persona->Sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $persona->Sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="FechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input id="FechaNacimiento" name="FechaNacimiento" type="date" class="form-control" value="{{ $persona->FechaNacimiento }}" tabindex="6">
        </div>
        <div class="mb-3">
            <label for="Profesion" class="form-label">Profesión</label>
            <input id="Profesion" name="Profesion" type="text" class="form-control" value="{{ $persona->Profesion }}" tabindex="7">
        </div>
        <a href="/dash" class="btn btn-outline-danger" tabindex="8">Cancelar</a>
        <button type="submit" class="btn btn-outline-success" tabindex="9">Guardar</button>
    </form>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
@stop
