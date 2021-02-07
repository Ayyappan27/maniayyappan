<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Image;
use App\Models\Sector;
use Exception;

class SectorController extends Controller
{
	public function index()
	{
		$sectors = Sector::with('image')->get();
		return view('dashboard.pages.settings.sectors.index', ['sectors' => $sectors]);
	}

	public function create()
	{
		return view('dashboard.pages.settings.sectors.create');
	}

	public function edit(Request $request)
	{
		$segment_id = $request->id;
		$sector = Sector::with('image')->findOrFail($segment_id);
		return view('dashboard.pages.settings.sectors.edit', ['sector' => $sector]);
	}

	public function store(Request $request)
	{
		$request->validate([
			'url' => 'required',
			'sector_name' => 'required',
			'position' => 'required',
		]);
		if ($request->hasFile('url')) {
			$fileName = time() . '.' . $request->url->extension();
			$request->url->move(public_path('/images/sector'), $fileName);
			$url = '/images/sector/' . $fileName;
			$sector_name = $request->input('sector_name');
			$position = $request->input('position');
		} else {
			return redirect()->back()->with('info', 'Please try again!');
		}
		DB::beginTransaction();
		try {
			$sector = Sector::create([
				'sector_name' => $sector_name,
				'position' => $position
			]);
			$image = new Image();
			$image->url      		= $url;
			$image->type            = 'sectors';
			$image->imageable_id    = $sector->id;
			$image->imageable_type  = 'App\Models\Sector';
			$image->save();
			DB::commit();
		} catch (Exception $ex) {
			DB::rollBack();
			throw $ex;
		}
		return redirect('/admin/sectors-list')->with('success', 'Sector Created successfully!');
	}

	public function update(Request $request)
	{
		DB::beginTransaction();
		try {
			$id = $request->input('id');
			$sector_name = $request->input('sector_name');
			$position = $request->input('position');

			if ($request->hasFile('url')) {
				$sector = Sector::where('id', $id)->update([
					'sector_name' => $sector_name,
					'position'    => $position
				]);
				$fileName = time() . '.' . $request->url->extension();
				$request->url->move(public_path('/images/sector'), $fileName);
				$url = '/images/sector/' . $fileName;
				$sector = Image::where('imageable_id', $id)->update([
					'url' => $url
				]);
				DB::commit();
			} else {
				$sector = Sector::where('id', $id)->update([
					'sector_name' => $sector_name,
					'position'    => $position
				]);
				DB::commit();
			}
		} catch (Exception $ex) {
			DB::rollBack();
			throw $ex;
		}
		return redirect('/admin/sectors')->with('success', 'Sector updated successfully!');
	}

	public function delete(Request $request)
	{
		$sector_id = $request->id;
		DB::table('images')->where('imageable_id', $sector_id)->delete();
		DB::table('sectors')->where('id', $sector_id)->delete();
		return redirect('/admin/sectors')->with('success', 'Sector deleted successfully!');
	}
}
