@extends('layouts.app')

@section('content')
                        <div class="col-md-9">
                          <div class="panel panel-default">
                              <div class="panel-heading" style="background: #ffffff;">
                                <font style ="font-weight:bold;color:#111111;">Change password</font>
                              </div>
                              <div class="panel-body">
                                @if(session('succmsg'))
                                  <label class="alert alert-success col-sm-12">{{session('succmsg')}}</label>
                                @endif

                                  
                                     @if($errors->has('old_password'))
                                      <label class="alert alert-danger col-sm-12">
                                                {{$errors->first('old_password')}}
                                      </label>
                                            @elseif(session('errmsg'))
                                            <label class="alert alert-danger col-sm-12">
                                                {{session('errmsg')}}
                                              </label>
                                            @endif

                                     @if($errors->has('password'))
                                     <label class="alert alert-danger col-sm-12">
                                                {{$errors->first('password')}}
                                                </label>
                                             @endif
                                             
                                      @if($errors->has('password_confirmation'))
                                      <label class="alert alert-danger col-sm-12">
                                                {{$errors->first('password_confirmation')}}
                                              </label>
                                             @endif


                                <form action="{{ url('user/change_password') }}" method="POST">

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                        <label for="">Old Password</label>
                                        <input type="password" class="form-control" id="" aria-describedby="" placeholder="Enter old password" name="old_password">
                                    </div>

                                    <div class="form-group">
                                        <label for="">New Password</label>
                                        <input type="password" class="form-control" id="" aria-describedby="" placeholder="Enter new password" name="password">
                                    </div>

                                    <div class="form-group">
                                        <label for="">Re-type Password</label>
                                        <input type="password" class="form-control" id="" aria-describedby="" placeholder="Re-type password" name="password_confirmation">
                                    </div>

                                    <input type="submit" class="btn btn-default btn-sm navbar-inverse" style="font-weight: bold;">
                                </form>
                              </div>
                          </div>

</div>


@endsection