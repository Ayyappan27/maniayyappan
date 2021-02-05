<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Models\Jobseeker;
use App\Models\Sector;
use App\Models\Appinfo;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = $this->getjobseekers();
        $sectors = $this->getsectors();
        $appinfo = $this->getappinfo();
        return view('front_office.home', compact('users', 'sectors', 'appinfo')); 
    }

    public function getjobseekers()
    { 
        $users = Jobseeker::join('users', 'jobseekers.id', 'users.id')
            ->where('users.userable_type', 'App\Models\Jobseeker')
            ->orderby('jobseekers.id','DESC')
            ->limit(6)
            ->get();
        return $users;
    }

    public function getsectors()
    { 
		$sectors = Sector::join('images', 'sectors.id', '=', 'images.imageable_id')
            ->select('sectors.*', 'images.url')
            ->where('images.type', 'sectors')
            ->orderBy('sectors.id', 'desc')
            ->limit(8)
            ->get(); 
        return $sectors;
    }

    public function getappinfo()
    { 
		$appinfo = Appinfo::all(); 
        return $appinfo;
    }

}
