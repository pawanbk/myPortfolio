<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mail;
use Validator;

class MailController extends Controller
{

    function index(){
        $data = Mail::get();
        return view('admin.mail',['data' => $data]);
    }

    public function send(Request $request)
    {
        $validation = Validator::make($request->all(),[
            'name' => 'required',
            'from' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        if($validation->passes()){
            $save = Mail::insert($request->all());
            if($save){
                return response()->json('success');
            }
        }
        return response()->json(['error'=>$validation->errors()->all()]);
    }

    public function delete($id){
        Mail::where('id',$id)->delete();
        return redirect()->route('admin.mail');
    }
}

