@extends('layouts.app')

@section('content')


<div class="alert alert-success">
    <div class="" style="margin-bottom: 1!important;">
      <h1 align="center"
	style="font-size:30px;">

	 {{Auth::user()->firstName}} {{Auth::user()->surname}} Thankyou!!!

</h1>
        <p><i class="fa fa-info"></i> Note: 
        To print sales invoice 
        <a href="receipt" target="_blank" class="btn-link">click here.</a></p>
    </div>
</div>

@endsection