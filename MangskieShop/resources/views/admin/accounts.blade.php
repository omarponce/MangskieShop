@extends('layouts.admin')


@section('content')


<form method="POST" action="{{ url('user/register') }}">
{{ csrf_field() }}
<div class="row">
	<div class="col-md-12">
		 @if(session('succmsg'))
            <label class="alert alert-success col-sm-12">{{session('succmsg')}}</label>
         @endif
	</div>
	<div class="col-md-6">
		<div class="box box-danger">
		    <div class="box-header with-border">
		        <h3 class="box-title">New User Registration</h3>

		        <div class="box-tools pull-right">
		        <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>-->
		        </div>
		    </div>
		    <div class="box-body">
		    	
		    	<div class="form-horizontal">
                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">First Name</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="firstName" value="{{ old('firstName') }}" required autofocus>
                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>
                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('middleName') ? ' has-error' : '' }}">
                            <label for="middleName" class="col-md-4 control-label">Middle Name</label>
                            <div class="col-md-6">
                                <input id="middleName" type="text" class="form-control" name="middleName" value="{{ old('middleName') }}" required autofocus>
                                @if ($errors->has('middleName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


		    		
		    	</div>
		    </div>


		    <div class="box-footer clearfix">
		        <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
		        <button type="submit" class="btn btn-sm btn-success btn-flat pull-right">Register</button>
		    </div>


		</div>

	</div>





	<div class="col-md-6">
		<div class="box box-primary">
		    <!--<div class="box-header with-border">
		        <h3 class="box-title"></h3>
		        <div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		        </div>
		    </div>-->

		    <div class="box-body">
		    	<div class="form-horizontal">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
		    	</div>
		    </div>
		</div>
	</div>





	<div class="col-md-6">
		<div class="box box-warning">
		    <div class="box-header with-border">
		        <span class="box-title" style="font-size: 15px;"><b>Role</b></span>

		        <!--<div class="box-tools pull-right">
		        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
		        </button>
		        </div>-->
		    </div>

		    <div class="box-body">
		    	<div class="row">

		    		<div class="col-md-3">
		    			<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
				    		<label><input type="radio" name="role" value="Client">Client</label>
				    	</div>
		    		</div>

		    		<div class="col-md-3">
		    			<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
				    		<label><input type="radio"  name="role" value="Staff">Staff</label>
				    	</div>
		    		</div>

		    		<div class="col-md-5">
		    			<div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
				    		<label><input type="radio"  name="role" value="Administrator">Administrator</label>
				    	</div>
		    		</div>
		    		<div class="col-md-12">
		    			 @if ($errors->has('role'))
                        <span class="help-block" style="color: red;">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                     @endif
		    		</div>
		    		

		    	</div>

		    </div>

		</div>
	</div>






</div><!-- end of row -->

</form>








<!-- ######################################################################    -->
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">All User</h3>

        <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
            <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
        </div>
    </div>

    <div class="box-body">
    	<table class="table table-responsive table-striped">
    		<thead>
    			<tr>
    				<th>Name</th>
    				<th>Role</th>
    				<th>Date Created</th>
    			</tr>
    		</thead>

            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->surname}}, {{$user->firstName}} {{$user->middleName}}</td>
                    <td>{{$user->role}}</td>
                    <td>{{$user->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
    	</table>
    </div>


    <div class="box-footer clearfix">
        <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
       <!-- <a href="javascript:void(0)" class="btn btn-sm btn-success btn-flat pull-right"></a>-->
       {{$users->links()}}
    </div>

</div>
@endsection