<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Configuration;
use App\Specifications;
use App\MasterSpecifications;
use Auth;
use DB;
use Illuminate\Support\Facades\Input;

class AdminProductController extends Controller
{
    public function index(Request $request)
    {
      $config = Configuration::find(1);

        if (Auth::check()) {
          if($request->get("q") != ""){
            $products = Product::Where('name','LIKE', '%'.$request->get("q").'%')->paginate(5);

            return view('admin_product', compact('products'))
              ->with('config', $config)
              ->with('i', (request()->input('page', 1) - 1) * 5);
          }

            $products = Product::latest()->paginate(5);
            return view('admin_product', compact('products'))
              ->with('config', $config)
              ->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return redirect('login');
        }
    }

    public function store(Request $request)
    {
        $file = $request->file_path;
        $fileName = uniqid(rand(), true) . '.' .$file->getClientOriginalExtension();
        $filePath = $file->move('uploads', $fileName);

        request()->validate([
         'name' => 'required',
         'categories_id' =>  'required',
         'specifications.*' => 'required',
     ]);

        $product = new Product;
        $product->name = $request->get('name');
        $product->categories_id = $request->get('categories_id');
        $product->description = $request->get('description');
        $product->file_path = $filePath;
        $product->save();
        $data = Input::get("specifications");
        if($data!= null){
            for ($i=1; $i <= count($data['name']); $i++) {
                $product->specifications()->saveMany([
                    new Specifications(['name' => $data['name'][$i],
                        'value' => $data['value'][$i],
                        'unit' => $data['unit'][$i],
                        'product_id' => $product->id])
                ]);
            }
        }

        return redirect('admin/product/')
                      ->with('success', 'Product created successfully');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $product = Product::find($id);
        $data["file_path"] = $product->file_path;
        $product->update($data);

        foreach (Product::find($id)->specifications as $specification) {
            foreach ($data["specifications"] as $specificationLocal) {
                if ($specification->id == $specificationLocal["id"]) {
                  $specification->name = $specificationLocal["name"];
                  $specification->unit = $specificationLocal["unit"];
                  $specification->value = $specificationLocal["value"];
                  $specification->update();
                  break;
                }
            }
        }

        return ["success" => "true"];
    }

    public function destroy($id)
    {
       $product = Product::find($id);
        $product->specifications()->delete();
        $product::find($id)->delete();

        return redirect('admin/product/')
                      ->with('success', 'Product deleted successfully');
    }
}
