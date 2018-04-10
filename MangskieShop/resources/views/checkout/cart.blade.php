@extends('layouts.app')

@section('content')
<div>
	<h3>Shopping Cart</h3>	

<form action="cart/checkout" method="POST">
	{{csrf_field()}}
	<div class="col-md-9">
		<table class="table table-striped table-responsive table-hover ">
		<thead>
			<tr>
				<th colspan="2" style="text-align: center;">Item</th>
				<th style="text-align: center;">Quantity</th>
				<th style="min-width: 100px;text-align: center;">Item Price</th>
				<th style="min-width: 100px;text-align: center;">Total Price</th>
				<th></th>
			</tr>
		</thead>

		<tbody>
			@if($item)
				@foreach($item as $product)
					<input type="hidden" name="item[]" id="item{{$product['id']}}" value="{{$product['itemPrice']}}&1&{{$product['id']}}">
					<tr id="tr{{$product['id']}}">
						<td style="width: 150px;"><img src="{{url('public/images/'.$product['picture'])}}" height="150px" width="150px" style="box-shadow: 2px 2px 2px #ccc;"></td>
						<td><span style="font-size: 19px;color: orange;">{{$product['itemName']}}</span></td>
						<td><b>
							<center>
							<textarea  style="width: 50px;resize:none;text-align: center;" rows="1"  name="quantity" onkeyup="$('#totalPrice<?php echo ($product['id']); ?>').html({{$product['itemPrice']}} * this.value); compute(); $('#item<?php echo $product['id']; ?>').val(<?php echo $product['itemPrice']; ?> + '&' + this.value + '&' + <?php echo $product['id']; ?>);">1</textarea>
							</center>
						</b></td>
						<td><b style="text-align: center;"> {{$product['itemPrice']}}</b></td>
						<td><b style="text-align: center;"> <span id="totalPrice{{$product['id']}}" class="total">{{$product['itemPrice'] * 1}}</span></b></td>
						<td style="width: 50px;"><button class="btn btn-danger btn-sm" onclick="compute(); $('#tr<?php echo $product['id']; ?>').remove(); removeToCart('<?php echo $product['id']; ?>');">X</button></td>
					</tr>
				@endforeach
				
			@endif
		</tbody>

	</table>

	</div>
	
	<div class="well col-md-3 pull-right" style="margin-top: 50px;">
		<table class="table table-responsive">
			<caption>Total cost:</caption>
			<tr>
					<th colspan="4" style="text-align: right;">SUB TOTAL:</th>
					<th>  <span id="subtotal"></span></th>
					<th></th>
				</tr>
				<tr>
					<th colspan="4" style="text-align: right;">SHIPPING FEE:</th>
					<th>  <span id="tax"></span></th>
					<th></th>
				</tr>
				<tr style="border-top: 1px solid #111111;">
					<th colspan="4" style="text-align: right;">TOTAL:</th>
					<th>  <span id="tot"></span></th>
					<th></th>
				</tr>
		</table>
		<button type="submit" class="btn btn-primary pull-left btn-link">Proceed to Cash On Delivery</button>


     @include('paypalform')

</div>
			


</form>



</div>

@endsection