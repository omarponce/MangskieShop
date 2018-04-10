@extends('layouts.app')

@section('content')
<div class="col-md-9">
	<h4>Cancelled Orders</h4>

@if($orders)
 @foreach($orders as $order)
	<div class="panel panel-default">
		<div class="panel-heading" style="background: #111111;">
			<span style="font-size: 12px;color:#ffffff;"><b>Order</b> <font color="#ffffff" size="3px">#{{$order->id}}</font></span>
			<span style="font-size: 12px;margin-top: -14px;margin-left: 20px;color:#ffffff;"><!--<b>Date ordered:</b>--></span>
		</div>
		<div class="panel-body">
					@if($product_image)
                      @foreach($product_image as $prod)
                        @if($prod->productId == $order->productId)
                          <img src="{{url('public/images/'.$prod->productPicture)}}" width="80px" height="80px" class="pull-left">
                        @endif
                      @endforeach
                    @endif
			
			<p style="font-size: 15px;" class="pull-left col-md-8" > 
					@if($products)
                      @foreach($products as $prod)
                        @if($prod->id == $order->productId)
                          {{$prod->itemName}}
                        @endif
                      @endforeach
                    @endif
            </p>
            <div class="clearfix"></div>
			<div >
				<br/>
			
			@if($order->status == 'Cancelled')
				<span style="font-size: 13px;color:red;font-weight: bold;"><strike><b>Status: </b>{{$order->status}}</strike></span>
			@elseif($order->status == 'On process')
				<span style="font-size: 13px;color: blue;font-weight: bold;"><b>Status: </b>{{$order->status}}</span>
			@else
				<span style="font-size: 13px;color: green;font-weight: bold;"><b>Status: </b>{{$order->status}}</span>
			@endif
			<span style="font-size: 13px;margin-left: 15px;"><b>Delivery date:</b> From {{$order->deliveryDateFrom}} to {{$order->deliveryDateTo}}</span>
			@if($products)
                      @foreach($products as $prod)
                        @if($prod->id == $order->productId)
                          	<span style="font-size: 13px;margin-left: 15px;"><b>Total Price:</b> $ {{$order->quantity * $prod->itemPrice }}	</span>
                        @endif
                      @endforeach
                    @endif
		
			<span style="font-size: 13px;margin-left: 15px;"><b>Quantity:</b> {{$order->quantity}}</span>

			</div>
		</div>
	</div>
	@endforeach
@endif



	



</div>
@endsection