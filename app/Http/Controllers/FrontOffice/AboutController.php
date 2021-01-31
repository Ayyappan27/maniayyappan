<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index(Request $request) {
    	$lang = $request->segments(1);
        $data = About::where('language', $lang)->get();
        return view('front_office.about', [ 'data'=> $data ]);
    }
}
