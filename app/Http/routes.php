<?php
use App\User;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/newuser', function () {
    if(User::count()<1){
    	return view('newuser');
	}else{
		return redirect('login');
	}
});
Route::post('/newuser', function (Request $request) {
	$task = new User;
    $task->email = $request->email;
    $task->password = Hash::make($request->password);
	    if ($task->save()) {
	        return redirect('/login');
	    }
});
Route::post('/login', function (Request $request) {
	$users = User::where('email',$request->email)->first();
	if(User::where('email',$request->email)->count()>=1){
		if (Hash::check($request->password, $users->password)) {
	     $request->session()->put('logged_in', 1);
	     return redirect('/users');
		}
	}else{
		print_r('no email found');
	}
});


Route::group(array('middleware' => 'logged'), function() {
	Route::get('/users', 'UserController@index');
	Route::post('/users', 'UserController@store');
	Route::delete('/users/{id}', 'UserController@destroy');

	Route::get('/editusers/{id}', 'UserController@editusers');
	Route::put('/editusers', 'UserController@editusersact');

	Route::get('/logout', 'UserController@logout');

});