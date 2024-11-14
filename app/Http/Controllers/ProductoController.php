<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Exception;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function create(){
        return view('productos.create');
    }

    public  function store(Request $request){
        try {
            $producto = new Producto();
            $producto->name = $request-> name;
            $producto->description = $request-> description;
            $producto->price = $request-> price;
            $producto->save();

            return redirect(route('producto.create'));

        } catch (Exception $exception) {
            return $exception ->getMessage();
        }
    }
}
