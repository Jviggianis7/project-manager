@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Gestor de Proyectos</h1>
@stop
@section('content')

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<table id="personas" class="table table-hover">
  <thead>
    <tr>
      <th scope="col" class="text-center">#</th>
      <th scope="col" class="text-center">Nombre</th>
      <th scope="col" class="text-center">Apellidos</th>
      <th scope="col" class="text-center">Dirección</th>
      <th scope="col" class="text-center">Teléfono</th>
      <th scope="col" class="text-center">Sexo</th>
      <th scope="col" class="text-center">Fecha de Nacimiento</th>
      <th scope="col" class="text-center">Profesión</th>
      <th scope="col" class="text-center">Acción</th>

    </tr>
  </thead>
  <tbody>
    @foreach($personas as $persona)
    <tr>
      <th scope="row" class="text-center">{{ $persona->id }}</th>
      <td class="text-center">{{ $persona->Nombre }}</td>
      <td class="text-center">{{ $persona->Apellidos }}</td>
      <td class="text-center">{{ $persona->Direccion }}</td>
      <td class="text-center">{{ $persona->Telefono }}</td>
      <td class="text-center">{{ $persona->Sexo }}</td>
      <td class="text-center">{{ $persona->FechaNacimiento }}</td>
      <td class="text-center">{{ $persona->Profesion }}</td>
      <td>
    <form action="{{ route('dash.destroy', $persona->id) }}" method="POST" class="text-center">
        @csrf
        @method('DELETE')
        <a href="/dash/{{ $persona->id }}/edit" class="btn btn-outline-primary shadow-sm">
            <i class="fas fa-edit"></i> 
        </a>
        <button type="submit" class="btn btn-outline-danger">
            <i class="fas fa-trash"></i> 
        </button>
    </form>
</td>

    </tr>
    @endforeach
  </tbody>
</table>
<a href="dash/create" class="btn btn-outline-success"><i class="bi bi-plus"></i> Registrar nuevo usuario</a>


@endsection

@section('css')
{{-- Add here extra stylesheets --}}
{{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />

@stop
@section('js')
<script>
  console.log("Hi, I'm using the Laravel-AdminLTE package!");
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script>
  $(document).ready(function() {
    $('#personas').DataTable({
        "lengthMenu": [[5, 10, 50, -1], [5, 10, 50, "all"]]
    });
});
</script>
@stop