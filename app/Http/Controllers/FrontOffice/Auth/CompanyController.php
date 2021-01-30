<?php

namespace App\Http\Controllers\FrontOffice\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Request as URLRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Company;
use DB;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    
    public function index(){
        $lang = $request->segment(1);
        if (Auth::check()) {
            return redirect($lang.'/company');
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
            return redirect($lang.'/company');
        } else {
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        // return $request;
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'password' => 'required|min:8|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword' => 'required|min:8',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)
            ->withInput();
        }
        
        $company = Company::create([
            'company_name' => $request->company_name,
            'website' => '',
            'description' => '',
            'address' => '',
            'country' => '',
            'city' => '',
            'founded_date' => now(),
            'sector' => '',
            'number_employees' => 5,
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
                'userable_id' => $company->id,
                'userable_type' => 'App\Models\Company',
                'created_at' => now(),
                'updated_at'=> now()
            ]
        );

        return redirect()->route('front.registration', app()->getLocale())->with('toast_success', 'User was Created!');
    }
}
