@extends('layouts.admin')

@section('content')
<div class="row default-primary-color" id="header">
    <div class="col-md-12">
    	<h1 class="text-center text-primary-color">Users CRUD</h1>
    </div>
  </div>

  <div class="row">
    
    <div class="col-md-12 m-10">
      <div class="col-md-12 m-10">
            <h3>Edit Users</h3>
            <div class="col-md-6"><hr></div>
      </div>

      <div class="col-md-6">
          <form action="{{ url('editusers') }}" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="id" value="{{ $users->id }}" required>
            <div class="col-md-12">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-3 control-label">
                    Email</label>
                  <div class="col-sm-9">
                    <input type="email" name="email" class="form-control" id="inputUsername" value="{{ $users->email }}" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-3 control-label">
                    Password</label>
                  <div class="col-sm-9">
                    <input type="password" name="password" class="form-control" id="inputPsw" required>
                  </div>
                </div>
                
                <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
          </form>
      </div>
    </div>
  </div>

@endsection