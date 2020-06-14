<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Product;
use App\Configuration;

class MainController extends Controller
{
    public function index()
    {
        $categories = Categories::orderBy('order_value', 'ASC')->get();
        $config = Configuration::find(1);
        return view('index')
           ->with('config', $config)
           ->with('categories', $categories);
    }

    public function uploadfile(Request $request, $id)
    {
      $file = $request->file_path;
      $fileName = uniqid(rand(), true) . '.' .$file->getClientOriginalExtension();
      $filePath = $file->move('uploads', $fileName);
      $product = Product::find($id);
      $product->file_path = $filePath;
      $product->update();
      return redirect('admin/product/')
                    ->with('success', 'Change File success!');
    }
}
