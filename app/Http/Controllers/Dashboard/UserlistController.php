<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class UserlistController extends Controller
{
    public function index() { 
        $users = $this->getuser();
    	return view('dashboard.pages.user.index', [ 'users'=> $users ]);
    }

    public function getuser(){
        $users = User::orderBy('id','desc')->get();
        return $users;
    }

    public function updatestatus(Request $request){
        $user_id = $request->input('user_id');
        $status = $request->input('status');
        DB::beginTransaction();
        try {
            $update = User::where('id', $user_id)->update(['status' => $status]);
            DB::commit();
        } catch(Exception $ex) {
            DB::rollBack();
            throw $ex;
        }
        $response = array(
            'status' => 'success',
            'user'   => $user_id,
        );
        return $response;
    }

}
