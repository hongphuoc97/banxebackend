<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Specifications;
use App\Categories;
use DB;
use Auth;


class ProductController extends Controller
{
    public function index(Request $request)
    {
      $category_id = $request->input('category');
      if($category_id != ""){
        $products = Product::where('categories_id', $category_id)->paginate(5);
        $category = Categories::where('id', $category_id)->get();
        return view('products',compact('products'))
           ->with('category', $category);
      }
      $itemCategory = new Categories();
      $itemCategory->name = "Tất cả sản phẩm";
      $products = Product::latest()->paginate(5);
      $category = array($itemCategory);
      return view('products',compact('products'))
         ->with('category', $category);
    }

    public function show($id)
    {
        DB::enableQueryLog();
        $product = Product::find($id);
        $relativeProducts = Product::where('categories_id', $product->categories_id)->get();
        $specifications = Specifications::where('product_id', $id)
        ->orderBy('id','ASC')
        ->get();
      //  dd(DB::getQueryLog());
        return view('productsdetail')
              ->with('product', $product)
              ->with('relativeProducts', $relativeProducts)
              ->with('specifications', $specifications);
    }
}
