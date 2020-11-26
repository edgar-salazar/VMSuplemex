<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //Admin
    public function Index()
    {
        $products = Product::all();

        return view('admin.Productos.Index', compact('products'));
    }

    public function Create(){
        return view('admin.Productos.Create');
    }

    public function Store(Request $request){
       $product = new Product();

       $product->codigo_barra = $request->codigo_barra;
       $product->nombre = $request->nombre;
       $product->marca = $request->marca;
       $product->categoria = $request->categoria;
       $product->descripcion = $request->descripcion;
       $product->cantidad = $request->cantidad;
       $product->precio_compra = $request->precio_compra;
       $product->precio_venta = $request->precio_venta;
       
       $product->save();

       return redirect()->route('Productos.Show', $product->id); 
    }

    public function Show(Product $product){

       return view('admin.Productos.Show', compact('product'));
   }

   public function Edit(Product $product){
       return view('admin.Productos.Edit', compact('product'));
   }

   public function Update(Request $request, Product $product){
    
    $product->codigo_barra = $request->codigo_barra;
    $product->nombre = $request->nombre;
    $product->marca = $request->marca;
    $product->categoria = $request->categoria;
    $product->descripcion = $request->descripcion;
    $product->cantidad = $request->cantidad;
    $product->precio_compra = $request->precio_compra;
    $product->precio_venta = $request->precio_venta;

       $product->save();

       return redirect()->route('Productos.Show', $product->id);
   }

   public function Delete(Product $product){
       return view('admin.Productos.Delete', compact('product'));
   }

   public function Destroy(Product $product){
       $product->delete();

       return redirect()->route('Productos.Index');
   }
}
