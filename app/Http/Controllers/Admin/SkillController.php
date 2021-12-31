<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class SkillController extends Controller
{
    function index(){
        $data = Skill::get();
        return view('admin.skill',['data'=> $data]);
    }

    function store(Request $request){
        $request->validate([
            'name' => 'required',
            'level' => 'required'
        ]);

       $skill = new Skill();
       $skill->name = $request->name;
       $skill->level = $request->level;
       $save = $skill->save();
       

        if($save){
            return back()->with('success', 'Data added successfully');
        } else{
            echo "not inserted";
            die();
        }
    }

    function delete($id){
        Skill::where('id',$id)->delete();
        return back()->with('success', 'Data has been deleted.');
    }
}
