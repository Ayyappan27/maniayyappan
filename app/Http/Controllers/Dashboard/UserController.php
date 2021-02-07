<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->get();
        return view('dashboard.pages.users.index', ['users' => $users]);
    }

    public function updateStatus(Request $request)
    {
        $user_id = $request->input('user_id');
        $status = $request->input('status');
        $update = User::where('id', $user_id)->update(['status' => $status]);
        $response = array('status' => 'success');
        return $response;
    }
}
