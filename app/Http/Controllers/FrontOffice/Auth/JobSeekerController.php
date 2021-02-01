<?php

namespace App\Http\Controllers\FrontOffice\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\JobSeeker;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class JobSeekerController extends Controller
{
    public function index(Request $request){
        $lang = $request->segment(1);
        if (Auth::check()) {
            return redirect($lang.'/jobseeker');
        }
        return view('front_office.home');
    }
    
    public function login(Request $request)
    {
        $request->session()->put('signinTab', '');
        $request->session()->put('SigninModal', 'show');
        $request->validate([
                'signinjobemail'           => 'required|string|email',
                'signinjobpassword'        => 'required|min:8',
            ],
            [
                'signinjobemail.required' => 'The email field is required.',
                'signinjobemail.email' => 'The email must be a valid email address.',
                'signinjobpassword.required' => 'The password field is required.',
                'signinjobpassword.min' => 'The password must be at least 8 characters.',
            ]
        );
        
        $lang = $request->segment(1);
        if(auth()->attempt([
            'email'    => $request->signinjobemail,
            'password' => $request->signinjobpassword
        ])) {
            $request->session()->put('SigninModal', '');
            return redirect($lang.'/jobseeker');
        } else {
            $request->session()->put('SigninModal', 'show');
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        $request->session()->put('signupTab', 'jobseeker');
        $request->validate([
            'jobfirstname'       => 'required|string|max:50',
            'jobemail'           => 'required|string|email|max:60|unique:users,email',
            'jobphone_number'    => 'required|string|max:15|unique:users,phone_number',
            'jobpassword'        => 'required|min:8|required_with:jobconfirmpassword|same:jobconfirmpassword',
            'jobconfirmpassword' => 'required|min:8',
            'education_level' => 'required'
            ],
            [
                'jobfirstname.required' => 'The first name field is required.',
                'jobemail.required' => 'The email field is required.',
                'jobpassword.required' => 'The password field is required.',
                'jobconfirmpassword.required' => 'The confirm password field is required.',
                'jobphone_number.required' => 'The phone number field is required.',
                'jobphone_number.max' => 'The phone number may not be greater than 15 characters.',
                'jobemail.unique' => 'The email has already been taken.',
                'jobemail.email' => 'The email must be a valid email address.',
                'jobphone_number.unique' => 'The phone number has already been taken.',
                'jobpassword.min' => 'The password must be at least 8 characters.',
                'jobpassword.required_with' => 'The password and confirmpassword must match.',
                'jobpassword.same' => 'The password and confirmpassword must match.',
                'jobconfirmpassword.min' => 'The confirm password must be at least 8 characters.',
            ]
        );

        DB::beginTransaction();
        try {
            $jobseeker = JobSeeker::create([
                'education_level' => $request->education_level,
            ]);
            $account = new User();
            $account->first_name    = $request->jobfirstname;
            $account->phone_number  = $request->jobphone_number;
            $account->email         = $request->jobemail;
            $account->password      = Hash::make($request->jobpassword);
            $account->userable_id   = $jobseeker->id;
            $account->userable_type = 'App\Models\Jobseeker';
            $account->save();
            DB::commit();
        } catch(Exception $ex) {
            DB::rollBack();
            throw $ex;
        }
        return redirect()->route('front.registration', app()->getLocale())->with('toast_success', 'User was Created!');
    }
}
