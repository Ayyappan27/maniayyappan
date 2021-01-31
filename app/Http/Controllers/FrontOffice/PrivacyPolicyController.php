<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;

use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index(Request $request) {
        $lang = $request->segments(1);
        $data = Privacy::where('language', $lang)->get();
        return view('front_office.privacypolicy', ['data' => $data ]);
    }

}
