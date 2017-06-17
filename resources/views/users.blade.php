@extends('layouts.admin')

@section('content')
<div class="row default-primary-color" id="header">
    <div class="col-md-12">
    	<h1 class="text-center text-primary-color">Users CRUD</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 m-10">
      <div class="col-md-6">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createUser">
            Create new user
          </button>
      </div>

      <div class="col-md-6 p-10 text-right">
          <a href="{{ url('logout') }}"><button type="button" class="btn btn-danger ">
            Logout
          </button></a>
      </div>
    </div>

    <div class="col-md-12 m-10">
      <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Users
            </div>

            <div class="panel-body">
                <table class="table table-striped table-condensed">

                    <!-- Table Headings -->
                    <thead>
                        <th>Users</th>
                        <th>&nbsp;</th>
                    </thead>

                    <!-- Table Body -->
                    <tbody>
                        @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text" width="50%">
                                    <div>{{ $user->email }}</div>
                                </td>

                                <td class="text-right" width="50%">
                                    <a href="{{ url('editusers/'.$user->id) }}"><button type="submit" class="btn btn-default">
                                            <i class="fa fa-trash"></i> Edit
                                    </button></a><form style="display: inline;margin: 0 ; padding: 0;" action="{{ url('users/'.$user->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}<button type="submit"  class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>Delete</button>
        </form>
                                    
                                </td>
                            </tr>
                        @endforeach
                        @else
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>No Users to show</div>
                                </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>
  </div>

<div class="modal fade" id="createUser" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="gridSystemModalLabel">Create New User</h4>
          </div>
          <form action="{{ url('users') }}" method="POST" class="form-horizontal" role="form">
            {{ csrf_field() }}
          <div class="modal-body">
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
            </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection