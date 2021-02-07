<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::all();
        return view('dashboard.pages.settings.about.index', ['data' => $data]);
    }
    
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "contents"    => "required|array",
            "contents.*"  => "required",
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with('error', 'Please enter all fields!');
        }
        $length = count($request->input('language'));;
        for ($i = 0; $i < $length; $i++) {
            $language = $request->input('language')[$i];
            $content  = $request->input('contents')[$i];
            About::where('language', $language)->update(['content' => $content]);
        }
        return redirect()->back()->with('success', 'About us update successfully!');
    }
}
