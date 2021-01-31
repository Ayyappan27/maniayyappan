<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;

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
        return view('front_office.home');
    } 
}
