<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Privacy;

class PrivacyPolicyController extends Controller
{
    public function index() {
    	$lang = Request::segment(1);
        $data = Privacy::where('language', $lang)->get();
        return view('front_office.privacypolicy', ['data' => $data ]);
    }

}
