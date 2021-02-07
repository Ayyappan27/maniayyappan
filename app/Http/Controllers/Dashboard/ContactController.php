<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();
        return view('dashboard.pages.settings.contact.index', ['data' => $data]);
    }
    public function update(Request $request)
    {
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
        $update = Contact::where('id', 1)
            ->update([
                'phone_number' => $request->inut('phone_number'),
                'email' => $request->input('email'),
                'whatsapp_number' => $request->input('whatsapp_number'),
                'facebook_link' => $request->input('facebook_link'),
                'instagram_link' => $request->input('instagram_link'),
                'linkedin_link' => $request->input('linkedin_link'),
                'twitter_link' => $request->input('twitter_link'),
                'website_link' => $request->input('website_link')
            ]);
        return redirect()->back()->with('success', 'Contact us update successfully!');
    }
}
