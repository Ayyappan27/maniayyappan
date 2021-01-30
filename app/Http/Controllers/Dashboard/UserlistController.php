<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserlistController extends Controller
{
    public function index() { 
    	return view('dashboard.pages.user.index');
    }
}
