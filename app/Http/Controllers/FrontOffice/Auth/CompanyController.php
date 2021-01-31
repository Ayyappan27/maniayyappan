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
        $request->validate([
            'email'           => 'required|string|email',
            'password'        => 'required|min:8',
        ]);

        $lang = $request->segment(1);
        if(auth()->attempt([
            'email'    => $request->email,
            'password' => $request->password
        ])) {
            return redirect($lang.'/company');
        } else {
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        $request->validate([
            'firstname'       => 'required|string|max:50',
            'lastname'        => 'required|string|max:50',
            'company_name'    => 'required|string|max:60',
            'email'           => 'required|string|email|max:60|unique:users',
            'phone_number'    => 'required|string|max:15|unique:users',
            'password'        => 'required|min:8|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword' => 'required|min:8',
            'company_name'    => 'required|min:3'
        ]);

        DB::beginTransaction();
        try {
            $company = Company::create([
                'company_name' => $request->company_name,
            ]);
            $account = new User();
            $account->first_name    = $request->firstname;
            $account->last_name     = $request->lastname;
            $account->phone_number  = $request->phone_number;
            $account->email         = $request->email;
            $account->password      = Hash::make($request->password);
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
