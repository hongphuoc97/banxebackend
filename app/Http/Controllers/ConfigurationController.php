<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class ConfigurationController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $configs = Configuration::latest()->paginate(5);

        return view('configuration.index',compact('configs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update($id){
        $config = Configuration::find($id);
        return view('configuration.update', compact('config'));
    }

    public function edit($id, Request $request){
        request()->validate([
            'title' => 'required',
            'phonenumber' => 'required|numeric',
            'email' => 'required|email',
            'website' => 'required',
            'hotline' => 'required',
            'address' => 'required',
        ]);
        $config = Configuration::find($id);
        if($config->update($request->all())){
            return redirect()->route('configuration.index')->with('success','Updated successfully');
        }else{
            return redirect()->route('configuration.index')->with('success','Updated fail');
        }

    }
}
