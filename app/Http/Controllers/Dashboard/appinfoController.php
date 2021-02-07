<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appinfo;

class AppInfoController extends Controller
{
	public function index()
	{
		$data = Appinfo::all();
		return view('dashboard.pages.settings.apps.index', ['data' => $data]);
	}

	public function update(Request $request)
	{
		$update = Appinfo::where('id', 1)
			->update([
				'apk_link' => $request->input('apk_link'),
				'apk_status' => $request->input('apk_status'),
				'ios_link' => $request->input('ios_link'),
				'ios_status' => $request->input('ios_status'),
				'status' => $request->input('status')
			]);
		return redirect()->back()->with('success', 'App Info updated successfully!');
	}
}
