@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.update', $producto) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio:</label>
            <input type="number" name="precio" id="precio" class="form-control" step="0.01" value="{{ $producto->precio }}" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $producto->cantidad }}" required>
        </div>
        <div class="form-group">
            <label for="fecha_ingreso">Fecha de Ingreso:</label>
            <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" value="{{ $producto->fecha_ingreso }}" required>
        </div>
        <div class="form-group">
            <label for="estado">Estado:</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{ $producto->estado }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
@endsection

