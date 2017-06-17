<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Http\Requests;

class UserController extends Controller
{
    
    public function index(Request $request)
	{
	    $users = User::orderBy('created_at', 'asc')->get();

	    return view('users', [
	        'users' => $users
	    ]);
	}

	public function store(Request $request)
	{
	$task = new User;
    $task->email = $request->email;
    $task->password = Hash::make($request->password);
	    if ($task->save()) {
	        return redirect('/users');
	    }
	}

	public function destroy($id)
	{
	$count = User::count();

		if($count<=1){
			print('at least one user should be exist');
		}else{
			$users = User::find($id);

			if($users->delete()){
		    	return redirect('/users');
			}else{
				print_r('error happened');	
			}
		}
	}

	public function editusers($id)
	{
	$users = User::find($id);
	
	return view('editusers', [
        'users' => $users
    ]);
	}

	public function editusersact(Request $request)
	{
		$users = User::find($request->id);
		$users->email = $request->email;
		$users->password = Hash::make($request->password);
		if($users->save()){
			return redirect('/users');
		}
	}

	public function logout(Request $request){
		$request->session()->forget('logged_in');

		$request->session()->flush();

		return redirect('/login');
	}
}
