@extends('layouts.app')

@section('content')
<div class="row default-primary-color" id="header">
    <div class="col-md-12">
    	<h1 class="text-center text-primary-color">Login</h1>
    </div>
  </div>

  <div class="row">
   
    <div class="col-md-12"> 
    <div class="login-wrap">

       @include('common.errors')

        <!-- New Task Form -->
        <form action="{{ url('login') }}" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}

        <div class="form-group">
          <label for="inputEmail3" class="col-sm-3 control-label">
            Email</label>
          <div class="col-sm-9">
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-3 control-label">
            Password</label>
          <div class="col-sm-9">
            <input type="password" name="password" class="form-control" id="inputPsw" placeholder="Password" required>
          </div>
        </div>
        <div class="form-group last">
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary btn-sm">
              Sign in</button>
          </div>
        </div>
      </form>
    </div>
    </div>

  </div>
@endsection