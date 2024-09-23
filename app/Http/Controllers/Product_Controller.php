<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class Product_Controller extends Controller
{
    public function add(){
        return view('add_Product');
    }

    public function store(Request $request){

        $validate = $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'sku' => 'required|integer',
            'price' => 'required|integer',
            'discount' => 'required|integer',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

         product::create([
             'product_name' => $validate['product_name'],
             'category' => $validate['category'],
            'sku' => $validate['sku'],
            'price'=>$validate['price'],
            'discount'=>$validate['discount'],
            'description' => $validate['description'],
            'image' => $imagePath,

        ]);
        return redirect('/home')->with('success', 'Product added successfully!');
    }

    public function list(){
        $products = product::all();
        return view('view_Product', compact('products'));
    }

    public function show($id) {
        $product = product::findOrFail($id); 
        return view('product_description', compact('product')); 
    }
    
    
  
   

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'sku' => 'required|integer',
            'description' => 'required|string',
        ]);

        $product = Product::findOrFail($id);
        $product->product_name = $request->input('product_name');
        $product->category = $request->input('category');
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->save();

        return redirect()->route('list')->with('success', 'Product updated successfully.');
    }
    
}
