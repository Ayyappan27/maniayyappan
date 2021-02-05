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

	public function index() { 
		$sectors = DB::table('sectors')
            ->join('images', 'sectors.id', '=', 'images.imageable_id') 
            ->select('sectors.*', 'images.url')
            ->where('images.type', 'sectors')
            ->orderBy('sectors.id', 'desc')
            ->get(); 
    	return view('dashboard.pages.helpandinfo.sectors', [ 'sectors'=> $sectors ]); 
    }
    

  	public function sectorform() { 
    	return view('dashboard.pages.helpandinfo.sectorform');
    }  

    public function editsectorform(Request $request) { 
    	 $segment = $request->segment(3);

    	 $sectors = DB::table('sectors')
            ->join('images', 'sectors.id', '=', 'images.imageable_id') 
            ->select('sectors.*', 'images.url')
            ->where('images.type', 'sectors')
            ->where('sectors.id', $segment)
            ->orderBy('sectors.id', 'desc')
            ->get(); 
    	return view('dashboard.pages.helpandinfo.editsectorform', [ 'sectors'=> $sectors ]); 
    }  

      public function add_sector(Request $request)
	    {
	        $request->validate([
	            'url' => 'required',
	            'sector_name' => 'required',
	            'position' => 'required',
	        ]);
	        if ($request->hasFile('url')){
		        $fileName = time().'.'.$request->url->extension();  
		        $request->url->move(public_path('/images/sector'), $fileName);
	            $url = '/images/sector/'.$fileName;
	            $sector_name = $request->input('sector_name');
	            $position = $request->input('position');
            }
            else{
	            return redirect()->back()->with('info', 'Please try again!');	
            }
	        DB::beginTransaction();
	        try {
	            $sector = Sector::create([
	                'sector_name' => $sector_name,
	                'position' => $position
	            ]);
	            $image           = new Image();
	            $image->url      = $url;
	            $image->type     = 'sectors';
	            $image->imageable_id     = $sector->id;
	            $image->imageable_type     = 'App\Models\Sector';
	            $image->save();
	            DB::commit();
	        } 
	        catch(Exception $ex) {
	            DB::rollBack();
	            throw $ex;
	        }
	        return redirect('/admin/sectors')->with('success', 'Sector Created successfully!');	   
	    }

	    public function edit_sector(Request $request)
	    {  
            DB::beginTransaction();
	        try {
         	    $id = $request->input('id');
         	    $sector_name = $request->input('sector_name');
         	    $position = $request->input('position');

	        	if ($request->hasFile('url')){
		            $sector = Sector::where('id', $id)->update([
		                'sector_name' => $sector_name,
		                'position' => $position
		            ]);
	                $fileName = time().'.'.$request->url->extension();  
					$request->url->move(public_path('/images/sector'), $fileName);
				    $url = '/images/sector/'.$fileName; 
		            $sector = Image::where('imageable_id', $id)->update([
		                'url' => $url
		            ]);
		            DB::commit();
	            }
	            else{
	               $sector = Sector::where('id', $id)->update([
		                'sector_name' => $sector_name,
		                'position' => $position
		            ]);	
		            DB::commit();
	            }
	        }
	        catch(Exception $ex) {
	            DB::rollBack();
	            throw $ex;
	        }
	        return redirect('/admin/sectors')->with('success', 'Sector updated successfully!'); 
	    }

	    public function deletesectorform(Request $request) { 
	    	 $id = $request->segment(3);
	    	 DB::table('images')->where('imageable_id', $id)->delete();
	    	 DB::table('sectors')->where('id', $id)->delete();
	        return redirect('/admin/sectors')->with('success', 'Sector deleted successfully!');	
	    }  


}
	