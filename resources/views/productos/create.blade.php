@extends('layouts.app')

@section('content')
    <h1>Crear Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="activo">activo</option>
                <option value="inactivo">inactivo</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
@endsection

