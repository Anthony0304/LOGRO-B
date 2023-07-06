@extends('layouts.app')

@section('content')
    <h1>Lista de productos</h1>
    <a href="{{ route('productos.create') }}" class="btn btn-success">Crear Producto</a>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Fecha de Ingreso</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->fecha_ingreso }}</td>
                    <td>{{ $producto->estado }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
