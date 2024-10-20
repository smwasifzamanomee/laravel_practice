<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    //
    public function index()
    {
        // $products = Products::all();
        // view

        // products will be order by id
        $products = Products::orderBy('id', 'desc')->get();
        
        // return view('product', compact('products'));
        // $dd = dd($products);

        // json response
        // return response()->json($products);


        return view('product', ['products' => $products]);
    }

    public function store(Request $request)
    {
        $product = new Products;
        $product->name = $request->name;
        $product->landed_cost = $request->landed_cost;
        $product->sell_margin = $request->sell_margin;
        $product->selling_price = $request->selling_price;
        $product->save();
        return redirect('/product');
    }

    public function destroy($id)
    {
        $product = Products::find($id);
        $product->delete();
        return redirect('/product');
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('edit', ['product' => $product]);
    }

    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);
        $product->name = $request->name;
        $product->landed_cost = $request->landed_cost;
        $product->sell_margin = $request->sell_margin;
        $product->selling_price = $request->selling_price;
        $product->save();

        return redirect()->route('product');
    }
    
}
