<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
{
    $productos = Producto::all();
    return view('productos.index', compact('productos'));
}

    public function create()
{
    return view('productos.create');
}


public function store(Request $request)
{
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
        'cantidad' => 'required|integer',
        'fecha_ingreso' => 'required|date',
        'estado' => 'required',
    ]);

    Producto::create([
        'nombre' => $request->nombre,
        'precio' => $request->precio,
        'cantidad' => $request->cantidad,
        'fecha_ingreso' => $request->fecha_ingreso,
        'estado' => $request->estado,
    ]);

    return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
}

    

    public function edit(Producto $producto)
{
    return view('productos.edit', compact('producto'));
}


    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'cantidad' => 'required|integer',
            'fecha_ingreso' => 'required|date',
            'estado' => 'required',
        ]);
    
        $producto->update($request->all());
    
        return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
    }
    
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
    }
}
