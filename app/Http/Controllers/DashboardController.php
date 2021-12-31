<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $personalData = DB::table('personalinfos')->first();
        $siteData = DB::table('sitesettings')->first();
        $skill  = DB::table('skills')->get();
        $service = DB::table('services')->get();
        $link = DB::table('sociallinks')->get();
        return view('dashboard', [
            'sitedata'=>$siteData, 
            'personaldata' => $personalData,
            'skill'    => $skill,
            'services' => $service,
            'links'    => $link
        ]);
        
    }
}
