<?php

namespace App\Http\Controllers\FrontOffice\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Individual;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class IndividualController extends Controller
{
    public function index(Request $request){
        $lang = $request->segment(1);
        if (Auth::check()) {
            return redirect($lang.'/individual');
        }
        return view('front_office.home');
    }
    
    public function login(Request $request)
    {
        $request->session()->put('signinTab', 'individual');
        $request->session()->put('SigninModal', 'show');
        $request->validate([
                'signinindemail'           => 'required|string|email',
                'signinindpassword'        => 'required|min:8',
            ],
            [
                'signinindemail.required' => 'The email field is required.',
                'signinindemail.email' => 'The email must be a valid email address.',
                'signinindpassword.required' => 'The password field is required.',
                'signinindpassword.min' => 'The password must be at least 8 characters.',
            ]
        );

        $lang = $request->segment(1);
        if(auth()->attempt([
            'email'    => $request->signinindemail,
            'password' => $request->signinindpassword
        ])) {
            $request->session()->put('SigninModal', '');
            return redirect($lang.'/individual');            
        } else {
            $request->session()->put('SigninModal', 'show');
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        $request->session()->put('signupTab', '');
        $request->validate([
                'indfirstname'       => 'required|string|max:50',
                'indlastname'        => 'required|string|max:50',
                'nationality'     => 'required|string|max:60',
                'indemail'           => 'required|string|email|max:60|unique:users,email',
                'indphone_number'    => 'required|string|max:15|unique:users,phone_number',
                'indpassword'        => 'required|min:8|required_with:indconfirmpassword|same:indconfirmpassword',
                'indconfirmpassword' => 'required|min:8',
            ],
            [
                'indfirstname.required' => 'The first name field is required.',
                'indfirstname.max' => 'The first name may not be greater than 50 characters.',
                'indlastname.required' => 'The last name field is required.',
                'indlastname.max' => 'The last name may not be greater than 50 characters.',
                'indemail.required' => 'The email field is required.',
                'indpassword.required' => 'The password field is required.',
                'indconfirmpassword.required' => 'The confirm password field is required.',
                'indphone_number.required' => 'The phone number field is required.',
                'indphone_number.max' => 'The phone number may not be greater than 15 characters.',
                'indemail.unique' => 'The email has already been taken.',
                'indemail.email' => 'The email must be a valid email address.',
                'indemail.max' => 'The email may not be greater than 60 characters.',
                'indphone_number.unique' => 'The phone number has already been taken.',
                'indpassword.required_with' => 'The password and confirmpassword must match',
                'indpassword.same' => 'The password and confirmpassword must match',
                'indpassword.min' => 'The password must be at least 8 characters',
                'indconfirmpassword.min' => 'The confirm password must be at least 8 characters',
            ]
        );

        DB::beginTransaction();
        try {
            $individual = Individual::create([
                'nationality' => $request->nationality,
            ]);
            $account = new User();
            $account->first_name    = $request->indfirstname;
            $account->last_name     = $request->indlastname;
            $account->phone_number  = $request->indphone_number;
            $account->email         = $request->indemail;
            $account->password      = Hash::make($request->indpassword);
            $account->userable_id   = $individual->id;
            $account->userable_type = 'App\Models\Individual';
            $account->save();
            DB::commit();
        } catch(\Exception $ex) {
            DB::rollBack();
            throw $ex;
        }

        return redirect()->route('front.registration', app()->getLocale())->with('toast_success', 'User was Created!');
    }
}
