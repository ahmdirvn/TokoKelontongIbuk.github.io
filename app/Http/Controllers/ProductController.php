<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public static $products = [
    //     ["id" => "1", "name" => "Floridina", "description" => "floridina", "image" => "floridina.jpeg", "price" => "1000"],
    //     ["id" => "2", "name" => "Mi Sedap", "description" => "Mi Sedap", "image" => "mi sedap.jpeg", "price" => "999"],
    //     ["id" => "3", "name" => "Sari Gandum", "description" => "Sari Gandum", "image" => "sarigandum.jpeg", "price" => "30"],
    //     ["id" => "4", "name" => "Real good", "description" => "realgood", "image" => "realgood.jpg", "price" => "100"]
    // ];

    public function index()
    {
        $viewData = [];
        $viewData["title"] = "Products - Online Store";
        $viewData["subtitle"] = "List of products";
        $viewData["products"] = Product::all();
        return view('product.index')->with("viewData", $viewData);
    }
    public function show($id)
    {
        $viewData = [];
        $product = Product::findOrFail($id);
        $viewData["title"] = $product->name . " - Online Store";
        $viewData["subtitle"] = $product->name . " - Product information";
        $viewData["product"] = $product;
        return view('product.show')->with("viewData", $viewData);
    }
}
