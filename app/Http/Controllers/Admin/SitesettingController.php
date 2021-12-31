<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sitesetting;
use Illuminate\Support\Facades\DB;

class SitesettingController extends Controller
{
    function index(){
        $siteData = DB::table('sitesettings')->first();
        $personalData = DB::table('personalinfos')->first();
        return view('admin.dashboard',[
                        'sitedata' => $siteData,
                        'personaldata' => $personalData
                    ]);
    }

    function update(Request $request, $id){
        $validation = $request->validate([
            'heroImage' => 'mimes:jpg,png,jpeg',
            'title'    => 'required|min:2',
            'sub_title'    => 'required|min:2',
            'resume'   => 'mimes:pdf',
            'about_1' => 'required|min:5'
        ]);

        if($request->hasfile('heroImage')){
            $data= Sitesetting::where('id',$id)->first();
            // if($data->hero_image != 'default.png'){
            //     unlink('storage/hero_image/'.$data->hero_image);
            // }
            $new = time().'.'.$request->file('heroImage')->getClientOriginalExtension();
            $path    = 'public/hero_image/';
            $move = $request->file('heroImage')->storeAs($path,$new);
            if($move){
                Sitesetting::where('id',$id)->update([
                    'hero_img' => $new
                ]);
            }
        }

        if($request->hasfile('resume')){
            $new= time().'.'.$request->file('resume')->getClientOriginalExtension();
            $path    = 'public/resume';
            $move = $request->file('resume')->storeAs($path,$new);
            if($move){
                Sitesetting::where('id',$id)->update([
                    'resume' => $new
                ]);
            }   
        }
        Sitesetting::where('id',$id)->update([
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'about_desc1' => $request->about_1,
            'about_desc2' => $request->about_2
        ]);
        return back();
    }
}
