<?php

namespace App\Http\Controllers\FrontOffice\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Request as URLRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Individual;
use DB;
use Illuminate\Support\Facades\Auth;

class IndividualController extends Controller
{
    
    public function index(){
        $lang = $request->segment(1);
        if (Auth::check()) {
            return redirect($lang.'/individual');
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
            return redirect($lang.'/individual');
        } else {
            return redirect('/')->with('toast_error', 'Incorrect email and password !');
        }
    }

    public function registration(Request $request){
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone_number' => 'required|string|max:15|unique:users',
            'nationality' => 'required|string|max:255',
            'password' => 'required|min:8|required_with:confirmpassword|same:confirmpassword',
            'confirmpassword' => 'required|min:8',
        ]);
        if($validator->fails()){
            return back()->withErrors($validator)
            ->withInput();
        }
        
        // return $result; 
        $individual = Individual::create([
            'address' => '',
            'country' => '',
            'city' => '',
            'nationality' => '',
            'created_at' => now(),
            'updated_at'=> now()
        ]);
        // print_r($individual->id);
        DB::table('users')->insert(
            [
                'first_name' => $request->firstname,
                'last_name' => '',
                'status' => 'active',
                'phone_number' => $request->phone_number,
                'email' => $request->email,
                'gender' => '',
                'password' => Hash::make($request->password),
                'userable_id' => $individual->id,
                'userable_type' => 'App\Models\Individual',
                'created_at' => now(),
                'updated_at'=> now()
            ]
        );

        return redirect()->route('front.registration', app()->getLocale())->with('toast_success', 'User was Created!');

    }
}
