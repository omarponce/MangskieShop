@extends('layouts.app')

@section('content')

<div class="col-md-9">
<div class="col-md-6">
	
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #111111;color:#ffffff;">
			<b>Personal information</b>
		</div>
		<div class="panel-body">
			<p><b>Name: </b>{{Auth::user()->firstName}} {{Auth::user()->middleName}} {{Auth::user()->surname}} </p>
			<p><b>Address:</b> {{Auth::user()->address}}</p>
			<p><b>Role:</b>	{{Auth::user()->role}}</p>
		</div>
	</div>
</div>

<div class="col-md-6">
	
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #111111;color:#ffffff;">
			<b>Orders information</b>
		</div>
		<div class="panel-body">
			<p><b>Total # of orders: </b>{{$totalOrder}}</p>
			<p><b>Total # of cancellations:</b> {{$totalCancellation}}</p>
			<p><b>Total # of pending orders:</b> {{$totalPending}}</p>
		</div>
	</div>
</div>

<div class="col-md-12">
	<h3>Billing and Shipping Address</h3>
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #111111;color:#ffffff;">
			<b>Shipping Address</b>
			<a href="{{url('home/address_book#shippingAddress')}}" class="pull-right">Edit</a>
		</div>
		<div class="panel-body">
			@if(isset($shipping_address->id))
				<p><b>Complete Address:</b> {{$shipping_address->completeAddress}}</p>
				<p><b>Province:</b> {{$shipping_address->province}}</p>
				<p><b>City/Municipality</b> {{$shipping_address->citymun}}</p>
				<p><b>Barangay:</b> {{$shipping_address->barangay}}</p>
				<p><b>Mobile: </b> {{$shipping_address->mobile}}</p>

			@endif
		</div>
	</div>
</div>


<div class="col-md-12">
	<h3></h3>
	<div class="panel panel-default">
		<div class="panel-heading" style="background-color: #111111;color:#ffffff;">
			<b>Billing Address</b>
			<a href="{{url('home/address_book#billingAddress')}}" class="pull-right">Edit</a>
		</div>
		<div class="panel-body">
			@if(isset($billing_address->id))
				<p><b>Complete Address:</b> {{$billing_address->completeAddress}}</p>
				<p><b>Province:</b> {{$billing_address->province}}</p>
				<p><b>City/Municipality</b> {{$billing_address->citymun}}</p>
				<p><b>Barangay:</b> {{$billing_address->barangay}}</p>
				<p><b>Mobile: </b> {{$billing_address->mobile}}</p>

			@endif
		</div>
	</div>
</div>

</div>

@endsection