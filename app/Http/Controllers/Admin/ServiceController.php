<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    function index(){
        $data = Service::get();
        return view('admin.service',['data'=>$data]);
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'icon'     => 'required'
        ]);
        $save = Service::create($request->all());
        if($save){
            return back();
        } 
    }

    function delete($id){
        Service::where('id',$id)->delete();
        return back()->with('success','Data has been delted');
    }
}
