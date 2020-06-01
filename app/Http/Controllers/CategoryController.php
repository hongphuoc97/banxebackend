<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use Auth;

class CategoryController extends Controller
{
    public function index()
   {
       if (Auth::check())
       {
         $categories = Categories::orderBy('order_value', 'ASC')->paginate(5);

         return view('admin_index',compact('categories'))
             ->with('i', (request()->input('page', 1) - 1) * 5);
       }else{
         return redirect('login');
       }
   }

   public function store(Request $request)
   {
       request()->validate([
           'name' => 'required',
           'order_value' => 'required',
       ]);

       Categories::create($request->all());

       return redirect()->route('category.index')
                       ->with('success','Category created successfully');
   }

   public function update(Request $request, $id)
   {
       request()->validate([
           'name' => 'required',
           'order_value' => 'required|numeric|min:1',
       ]);

       Categories::find($id)->update($request->all());

       return redirect()->route('category.index')
                       ->with('success','Category updated successfully');
   }


   public function destroy($id)
   {
       Categories::find($id)->delete();

       return redirect()->route('category.index')
                       ->with('success','Category delete successfully');
   }
}
