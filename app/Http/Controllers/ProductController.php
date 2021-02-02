<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    function add()
    {
        return view('productadd');
    }

    function save(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->exdate = $request->input('exdate');   
       
        if ($request->hasFile('image')) {
           
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            
            $file->move('uploads/gallery/', $filename);

            $product->image = $filename;
        } else {
            $product->image = '';
        }
        //return dd($request->input());
        $product->save();

        

       return redirect('show');
    }

    function show()
    {
        $products = Product::all();
        return view('productshow',['products'=>$products]);
    }

    function edit($id)
    {
        $product = Product::find($id);
        return view('productupdate',['product'=>$product]);
    }
    function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->exdate = $request->input('exdate');   
       
        if ($request->hasFile('image')) {
           
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            
            $file->move('uploads/gallery/', $filename);

            $product->image = $filename;
        } else {
            $product->image = '';
        }
        
        $product->save();

        

       return redirect('show');
    }

    public function delete($id)
    {
        $product = Product::findorFail($id);
        $product->delete();
        return redirect()->back()
        ->with('success','Product deleted successfully');
          
    }
}
