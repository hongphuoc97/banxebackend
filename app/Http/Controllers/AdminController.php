<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use Auth;

class AdminController extends Controller
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
}
