<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Personalinfo;

class ProfileController extends Controller
{
    function update(Request $request,$id){
        $request->validate([
            'full_name' => 'required',
            'profile'   => 'required',
            'email'     => 'required',
            'phone'     => 'required|min:10|max:10',
            'profile_image' => 'mimes:jpg,jpeg,png'
        ]);
        if($request->hasfile('profile_image')){
            $data = Personalinfo::where('id',$id)->first();
            if($data->profile_image != 'default.png'){
                unlink('storage/profile/'.$data->profile_image);
            }  
            $file = time().'.'.$request->file('profile_image')->getClientOriginalExtension();
            $move = $request->file('profile_image')->storeas('public/profile/',$file);
            if($move){     
                Personalinfo::where('id',$id)->update([
                    'profile_image' => $file
                ]);
            } 
        }

        Personalinfo::where('id',$id)->update([
            'full_name' => $request->full_name,
            'profile'   => $request->profile,
            'email'     => $request->email,
            'phone'     => $request->phone
        ]);

        return back();
    }
}
