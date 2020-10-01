<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specifications;
use Auth;

class SpecificationsController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::check()) {
            $productId = $request->input('product_id');
            return  Specifications::where('product_id', $productId)
            ->orderBy('id','DESC')
            ->get();
        } else {
            return redirect('login');
        }
    }

    public function show($id)
    {
        return Specifications::find($id);
    }
}
