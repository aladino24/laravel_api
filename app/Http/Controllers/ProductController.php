<?php

namespace App\Http\Controllers;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;


class ProductController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tableName = 'user';
    }

    public function index() {
        // $products = Product::all();
        // dd($product);
        $user = $this->database->getReference($this->tableName)->getValue();
        return view('products.index', ['user' => $user]);
    }

    public function createProduct() {
        return view('products.create');
    }

    public function storeProduct(Request $request) {
        Product::create($request->all());
        return redirect('/product');
    }


    public function editProduct($id) {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }


    public function updateProduct(Request $request, $id) {
        $product = Product::find($id);
        $product->update($request->all());
        return redirect('/product');
    }

    public function destroyProduct($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect('/product');
    }
}
