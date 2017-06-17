@extends('layouts.admin')

@section('content')
<div class="row default-primary-color" id="header">
    <div class="col-md-12">
    	<h1 class="text-center text-primary-color">Create First User</h1>
    </div>
  </div>

    <div class="col-md-6 m-10 p-10">
        <form action="{{ url('newuser') }}" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}
          
            <div class="row">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">
                    Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="inputUsername" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">
                    Password</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="inputPsw" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
            
          </form>
    
  </div>

@endsection