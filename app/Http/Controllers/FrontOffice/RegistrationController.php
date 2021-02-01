<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
    public function index() {
        return view('front_office.partials.register.main'); 
    }
}
