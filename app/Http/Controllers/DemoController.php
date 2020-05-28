<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class DemoController extends Controller
{
    public function index()
    {
        if (Auth::check())
        {
          $articles = DB::table('articles')->get();
          return view('articles.demo', ['articles' => $articles]);
        }else{
          return redirect('login');
        }
    }
  }
