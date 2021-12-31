<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sociallink;

class SociallinkController extends Controller
{
    function index(){
        $data = Sociallink::get();
        return view('admin.sociallinks',['data'=>$data]);
    }

    function store(Request $request){
        $request->validate([
            'social_link' => 'required',
            'icon'        => 'required'
        ]);

        Sociallink::create($request->all());
        return back();
    }

    function delete($id){
        Sociallink::where('id',$id)->delete();
        return back();
    }
}
