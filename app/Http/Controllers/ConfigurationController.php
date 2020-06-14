<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configs = Configuration::latest()->paginate(5);

        return view('configuration.index',compact('configs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function update(Request $request, $id){
      request()->validate([
          'title' => 'required',
          'address' => 'required',
          'phonenumber' => 'required',
          'email' => 'required',
          'website' => 'required',
          'hotline' => 'required',
      ]);

      Configuration::find($id)->update($request->all());

      return redirect('admin/config')
                      ->with('success','Configuration updated successfully');
    }

    //
    // public function edit($id, Request $request){
    //     request()->validate([
    //         'title' => 'required',
    //         'phonenumber' => 'required|numeric',
    //         'email' => 'required|email',
    //         'website' => 'required',
    //         'hotline' => 'required',
    //         'address' => 'required',
    //     ]);
    //     $config = Configuration::find($id);
    //     if($config->update($request->all())){
    //         return redirect()->route('configuration.index')->with('success','Updated successfully');
    //     }else{
    //         return redirect()->route('configuration.index')->with('success','Updated fail');
    //     }
    //
    // }
}
