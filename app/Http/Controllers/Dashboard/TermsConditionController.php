<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Privacy;
use Illuminate\Support\Facades\Validator;

class TermsConditionController extends Controller
{
	public function index()
	{
		$data = Privacy::all();
		return view('dashboard.pages.settings.terms.index', ['data' => $data]);
	}
	public function update(Request $request)
	{
		$validator = Validator::make($request->all(), [
			"contents"    => "required|array",
			"contents.*"  => "required",
		]);
		if ($validator->fails()) {
			return redirect()->back()->with('error', 'please enter all fields!');
		}
		$length = count($request->input('language'));
		for ($i = 0; $i < $length; $i++) {
			$language = $request->input('language')[$i];
			$content  = $request->input('contents')[$i];
			$update = Privacy::where('language', $language)->update(['content' => $content]);
		}
		return redirect()->back()->with('success', 'Terms and Conditsons update successfully!');
	}
}
