<?php

namespace App\Http\Controllers\FrontOffice\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use App\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    public function index(Request $request){
        $lang = $request->segment(1);
        if (Auth::check()) {
            return redirect($lang.'/company');
        }
        return view('front_office.home');
    }
    
    public function login(Request $request)
    {
        $request->session()->put('signinTab', 'company');
        $request->session()->put('SigninModal', 'show');
        $request->validate([
                'signincomemail'           => 'required|string|email',
                'signincompassword'        => 'required|min:8',
            ],
            [
                'signincomemail.required' => 'The email field is required.',
                'signincomemail.email' => 'The email must be a valid email address.',
                'signincompassword.required' => 'The password field is required.',
                'signincompassword.min' => 'The password must be at least 8 characters.',
            ]
        );

        $lang = $request->segment(1);
        if(auth()->attempt([
            'email'    => $request->signincomemail,
            'password' => $request->signincompassword
        ])) {
            $request->session()->put('SigninModal', '');
            return redirect($lang.'/company');
        } else {
            $request->session()->put('SigninModal', 'show');
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        $request->session()->put('signupTab', 'company');
        $request->validate([
            'comfirstname'       => 'required|string|max:50',
            'comlastname'        => 'required|string|max:50',
            'company_name'    => 'required|string|max:60',
            'comemail'           => 'required|string|email|max:60|unique:users,email',
            'comphone_number'    => 'required|string|max:15|unique:users,phone_number',
            'compassword'        => 'required|min:8|required_with:comconfirmpassword|same:comconfirmpassword',
            'comconfirmpassword' => 'required|min:8',
            ],
            [
                'comfirstname.required' => 'The first name field is required.',
                'comfirstname.max' => 'The first name may not be greater than 50 characters.',
                'comlastname.required' => 'The last name field is required.',
                'comlastname.max' => 'The last name may not be greater than 50 characters.',
                'comemail.required' => 'The email field is required.',
                'compassword.required' => 'The password field is required.',
                'indconfirmpassword.required' => 'The confirm password field is required.',
                'comphone_number.required' => 'The phone number field is required.',
                'comphone_number.max' => 'The phone number may not be greater than 15 characters.',
                'comemail.unique' => 'The email has already been taken.',
                'comemail.email' => 'The email must be a valid email address.',
                'comemail.max' => 'The email may not be greater than 60 characters.',
                'comphone_number.unique' => 'The phone number has already been taken.',
                'compassword.required_with' => 'The password and confirmpassword must match',
                'compassword.same' => 'The password and confirmpassword must match',
                'compassword.min' => 'The password must be at least 8 characters',
                'comconfirmpassword.min' => 'The confirm password must be at least 8 characters',
            ]
        );

        DB::beginTransaction();
        try {
            $company = Company::create([
                'company_name' => $request->company_name,
            ]);
            $account = new User();
            $account->first_name    = $request->comfirstname;
            $account->last_name     = $request->comlastname;
            $account->phone_number  = $request->comphone_number;
            $account->email         = $request->comemail;
            $account->password      = Hash::make($request->compassword);
            $account->userable_id   = $company->id;
            $account->userable_type = 'App\Models\Company';
            $account->save();
            DB::commit();
        } catch(Exception $ex) {
            DB::rollBack();
            throw $ex;
        }
        return redirect()->route('front.registration', app()->getLocale())->with('toast_success', 'User was Created!');
    }
}
