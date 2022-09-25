<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(){
        $products = Product::all();
        return response()->json(['message' => 'success', 'data' => $products]);
    }

    public function showProduct($id){
        $product = Product::find($id);
        return response()->json(['message' => 'success', 'data' => $product]);
    }

    public function storeProduct(Request $request){
        $product = Product::create($request->all());
        return response()->json(['message' => 'success', 'data' => $product]);
    }

    public function updateProduct(Request $request, $id){
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json(['message' => 'success', 'data' => $product]);
    }

    public function destroyProduct($id){
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'success', 'data' => $product]);
    }
}
