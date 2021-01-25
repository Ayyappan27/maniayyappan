<?php

namespace App\Http\Controllers\FrontOffice;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Jobseeker;
use App\User;

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
        // $job = Jobseeker::with(['user', 'links', 'skills'])->get();
        // dd($job);
        return view('front_office.home');
    }
}
