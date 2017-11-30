<?php

namespace crud\Http\Controllers;

use Illuminate\Http\Request;
use crud\Product;
use crud\Http\Requests\ProductRequest;

class ProductController extends Controller
{   //paginacion de las ordenes
    public function index(Request $request){
        $products = Product::orderBy('id', 'DESC')->paginate(8);
      return view('products.index', compact('products'));


        
        $s = $request->input('s');
        $product = Product::latest()->paginate(3);
        return view ('products.index',compact('products'));

    	
    }




       //creacion de ordenes
    public function create(){
         
         return view('products.create');
       }
        
        public function store(ProductRequest $request){
            $product = new Product;
              //Crear por cada cosa que se manda en el form
               $product->name = $request->name;
               $product->short = $request->short;
               $product->body = $request->body;
               $product->save();

               return redirect()->route('products.index')
                                ->with('info', 'La orden fue Guardada');
        }

        //edit ordenes
      public function edit($id){
         $product = Product::find($id);
         return view('products.edit', compact('product'));
       }

          //actualizar las ordenes
       public function update(ProductRequest $request, $id){
               $product = Product::find($id);
     //Actualizar por cada cosa que se manda en el form
               $product->name = $request->name;
               $product->short = $request->short;
               $product->body = $request->body;
               $product->save();

               return redirect()->route('products.index')
                                ->with('info', 'La orden fue Actualizada');

        }

       //mostrar ordenes
    public function show($id){
         $product = Product::find($id);
         return view('products.show', compact('product'));


    }

      //eliminar ordenes
    public function destroy($id){
    	$product = Product::find($id);
    	$product ->delete();

    	return back()->with('info', 'La orden fue eliminado');
    }
}
