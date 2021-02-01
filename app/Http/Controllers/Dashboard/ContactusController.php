<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB; 

class ContactusController extends Controller
{
    public function index() { 
    	$data = Contact::all();
    	return view('dashboard.pages.contactus', [ 'data'=> $data ]);
    }
    public function update_contact(Request $request){ 

    	$request->validate([
            'phone_number'       => 'required|string',
            'email'              => 'required|string|email',
            'whatsapp_number'    => 'required|string',
            'facebook_link'      => 'required|string',
            'instagram_link'     => 'required|string',
            'linkedin_link'      => 'required|string',
            'twitter_link'       => 'required|string',
            'website_link'       => 'required|string'
        ]);
        DB::beginTransaction();
        try {
	         	 $phone_number = $request->input('phone_number');
	             $email  = $request->input('email');
                 $whatsapp_number  = $request->input('whatsapp_number');
                 $facebook_link  = $request->input('facebook_link');
                 $instagram_link  = $request->input('instagram_link');
                 $linkedin_link  = $request->input('linkedin_link');
                 $twitter_link  = $request->input('twitter_link');
                 $website_link  = $request->input('website_link'); 
	             $update = Contact::where('id', 1)->update(['phone_number' => $phone_number,'email' => $email,'whatsapp_number' => $whatsapp_number,'facebook_link' => $facebook_link,'instagram_link' => $instagram_link,'linkedin_link' => $linkedin_link,'twitter_link' => $twitter_link,'website_link' => $website_link]);
            DB::commit();
        } 
        catch(Exception $ex) {
            DB::rollBack();
            throw $ex;
        }
        return redirect()->back()->with('success', 'Contact update successfully!');
    }
}
