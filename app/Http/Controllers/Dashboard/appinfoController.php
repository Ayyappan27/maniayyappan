<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appinfo;
use Illuminate\Support\Facades\DB; 

class appinfoController extends Controller
{
    public function index() { 
    	$data = Appinfo::all();
    	return view('dashboard.pages.helpandinfo.appinfo', [ 'data'=> $data ]);
    }

    public function update_appinfo(Request $request){  

    	$apk_link = $request->input('apk_link');
    	$apk_status = $request->input('apk_status');
    	$ios_link = $request->input('ios_link');
    	$ios_status = $request->input('ios_status');
    	$status = $request->input('status');
    	$update = Appinfo::where('id', 1)->update(['apk_link' => $apk_link,
										    		'apk_status' => $apk_status,
										    		'ios_link' => $ios_link,
										    		'ios_status' => $ios_status,
										    		'status' => $status]);
                 return redirect()->back()->with('success', 'App Info updated successfully!');
    
	         	  
    }


}
