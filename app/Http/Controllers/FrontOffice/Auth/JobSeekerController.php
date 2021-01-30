<?php

namespace App\Http\Controllers\FrontOffice\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Request as URLRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\JobSeeker;
use DB;
use Illuminate\Support\Facades\Auth;

class JobSeekerController extends Controller
{

    public function index(){
        $lang = $request->segment(1);
        if (Auth::check()) {
            return redirect($lang.'/jobseeker');
        }
        return view('front_office.home');
    }
    
    public function login(Request $request)
    {
        $lang = $request->segment(1);
        if(auth()->attempt([
            'email'    => $request->email,
            'password' => $request->password
        ])) {
            return redirect($lang.'/jobseeker');
        } else {
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'education_level' => 'required',
            'password' => 'required|min:8|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword' => 'required|min:8',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)
            ->withInput();
        }

        $jobseeker = JobSeeker::create([
            'address' => '',
            'country' => '',
            'city' => '',
            'education_level' => $request->education_level,
            'nationality' => '',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        DB::table('users')->insert(
            [
                'first_name' => $request->firstname,
                'last_name' => '',
                'status' => 'active',
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'gender' => '',
                'password' => Hash::make($request->password),
                'userable_id' => $jobseeker->id,
                'userable_type' => 'App\Models\JobSeeker',
                'created_at' => now(),
                'updated_at'=> now()
            ]
        );

        return redirect()->route('front.registration', app()->getLocale())->with('toast_success', 'User was Created!');

    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
