<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    public function index()
    {
         $articles = DB::table('articles')->get();
         return view('articles.demo', ['articles' => $articles]);
    }

    public function test()
    {
         $articles = DB::table('articles')->get();
         return view('articles.demo', ['articles' => $articles]);
    }
  }
