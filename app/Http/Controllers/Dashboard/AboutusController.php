<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AboutusController extends Controller
{
    public function index() { 
        $data = About::all();
    	return view('dashboard.pages.helpandinfo.aboutus', [ 'data'=> $data ]);
    }
    public function update_about(Request $request){ 
    	$validator = Validator::make($request->all(), [
		    "contents"    => "required|array",
		    "contents.*"  => "required",
		]);
		if ($validator->fails()) {
            return redirect()->back()->with('error', 'please enter all fields!');
        }
        $length = count($request->input('language'));;
        for ($i=0; $i < $length; $i++) {
         	 $language = $request->input('language')[$i];
             $content  = $request->input('contents')[$i];
             $update = About::where('language', $language)->update(['content' => $content]);
        }
        return redirect()->back()->with('success', 'About us update successfully!');
    }
}
