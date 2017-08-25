@extends('admin.master')
@section('mainContent')
<div class="right_col" role="main">
<div class="row">
<div class="col-md-10">
    <div class="panel panel-default">
        <div class="panel-heading">
        <h3>Add User
        </h3>
			<span class="text-center text-success">
			{{Session::get('message')}}
			</span>
        </div>
        <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url('register') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}

<div class="form-group{{ $errors->has('uname') ? ' has-error' : '' }}">
<label for="uname" class="col-md-4 control-label">User Name
</label>

	<div class="col-md-6">
	    <input id="uname" type="text" class="form-control" name="uname" value="{{ old('uname') }}" placeholder="Enter Your User Name" autofocus>
        @if ($errors->has('uname'))
        <span class="help-block">
                        <strong>{{ $errors->first('uname') }}</strong>
                    </span>
        @endif
	</div>
</div> 
<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
<label for="fname" class="col-md-4 control-label">
First Name
</label>

	<div class="col-md-6">
	    <input id="fname" type="text" class="form-control" name="fname" value="{{ old('fname') }}" placeholder="Enter Your First Name" autofocus>
        @if ($errors->has('fname'))
        <span class="help-block">
                        <strong>{{ $errors->first('fname') }}</strong>
                    </span>
        @endif
</div>
</div> 
<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
<label for="fname" class="col-md-4 control-label">
Last Name
</label>

	<div class="col-md-6">
	    <input id="lname" type="text" class="form-control" name="lname" value="{{ old('lname') }}" placeholder="Enter Your Last Name" autofocus>
        @if ($errors->has('lname'))
        <span class="help-block">
                        <strong>{{ $errors->first('lname') }}</strong>
                    </span>
        @endif
</div>
</div>  
<div class="form-group{{ $errors->has('fname') ? ' has-error' : '' }}">
<label for="fname" class="col-md-4 control-label">
Email
</label>

	<div class="col-md-6">
	    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" autofocus>
        @if ($errors->has('email'))
        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
        @endif
</div>
</div>   
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
<label for="password" class="col-md-4 control-label">
Password
</label>

	<div class="col-md-6">
	    <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Enter Your Password" autofocus>
        @if ($errors->has('password'))
        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
        @endif
</div>
</div>   
<div class="form-group">
<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

<div class="col-md-6">
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  placeholder="Enter Password Again..">
</div>
</div> 
<div class="form-group{{ $errors->has('cell') ? ' has-error' : '' }}">
<label for="cell" class="col-md-4 control-label">
Cell
</label>

	<div class="col-md-6">
	    <input id="cell" type="number" class="form-control" name="cell" value="{{ old('cell') }}" placeholder="Enter Your Phone Number" autofocus>
        @if ($errors->has('cell'))
        <span class="help-block">
                        <strong>{{ $errors->first('cell') }}</strong>
                    </span>
        @endif
</div>
</div> 
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
<label for="address" class="col-md-4 control-label"> Address</label>

        <div class="col-md-6">
            <textarea id="address" class="form-control" name="address" value="{{ old('address') }}" autofocus>
            	
            </textarea>
    @if ($errors->has('address'))
    <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
     @endif
        </div>
</div> 
<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
<label for="address" class="col-md-4 control-label"> User Role</label>

        <div class="col-md-6">
           
            <select name="urole"  id="urole" class="urole form-control">
            	<option>Select User Role</option>
            	<option value="0">Author</option>
            	<option value="1">Admin</option>
            	<option value="2">Editor</option>
            </select>
    @if ($errors->has('urole'))
    <span class="help-block">
                    <strong>{{ $errors->first('urole') }}</strong>
                </span>
     @endif
        </div>
</div>       
<div class="form-group">
<label for="image" class="col-md-4 control-label"> User Image
</label>
    <div class="col-md-6">
       
        <input type="file" name="image" id="image" class="form-control">
    </div>
</div> 
<hr>     
<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            Added
        </button>
    </div>
</div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
@endsection