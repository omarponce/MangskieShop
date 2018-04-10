@extends('layouts.app')

@section('content')

<form action="checkorder" method="POST" id="frmOrder">
	{{ csrf_field() }}

<div class="col-md-9">
<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Your shipping address</strong>
		</div>
		<div class="panel-body">
			<div class="col-md-10 col-md-offset-1">
				<table class="table">
					<tr>
						<td style="width: 200px;"><strong style="font-size: 13px;">Complete Address (House Number, Building and Street Name)</strong></td>
						@if($shipping)
						<td><textarea rows="2" aria-required="true" style="resize: none;font-size: 13px;"  class="form-control input-sm" placeholder="Complete Address (House Number, Building and Street Name)" maxlength="255" name="shippingCompleteAddress" >{{$shipping->completeAddress}}</textarea></td>
						@else
						<td><textarea rows="2" aria-required="true" style="resize: none;font-size: 13px;"  class="form-control input-sm" placeholder="Complete Address (House Number, Building and Street Name)" maxlength="255" name="shippingCompleteAddress" ></textarea></td>
						@endif
					</tr>
					<tr>
						<td ><strong style="font-size: 13px;">Province</strong></td>
						@if($shipping)
						<td>
							<select name="shippingProvince" style="font-size: 13px;" class="form-control input-sm">
								@if($shipping->province)
								<option>{{$shipping->province}}</option>
								@endif
								@if($province)
									@foreach($province as $p)
									<option>{{$p->provDesc}}</option>
									@endforeach
								@endif
							</select>

						</td>
						@else
							<td>
								<select name="shippingProvince" style="font-size: 13px;" class="form-control input-sm">
								@if(isset($shipping->province))
								<option>{{$shipping->province}}</option>
								@endif
								@if($province)
									@foreach($province as $p)
									<option>{{$p->provDesc}}</option>
									@endforeach
								@endif
							</select>

							</td>
						@endif
					</tr>
					<tr>
						<td><strong style="font-size: 13px;">City/Municipality</strong></td>
						@if($shipping)
						<td>
							<select name="shippingCitymun" style="font-size: 13px;" class="form-control input-sm">
								<option>{{$shipping->citymun}}</option>
								@if($citymun)
									@foreach($citymun as $cm)
									<option>{{$cm->citymunDesc}}</option>
									@endforeach
								@endif
							</select>
						</td>
						@else
						<td>
							<select name="shippingCitymun" style="font-size: 13px;" class="form-control input-sm">
								<option></option>
								@if($citymun)
									@foreach($citymun as $cm)
									<option>{{$cm->citymunDesc}}</option>
									@endforeach
								@endif
							</select>


						</td>
						@endif
					</tr>
					<tr>
						<td><strong style="font-size: 13px;">Barangay</strong></td>
						@if($shipping)
						<td>
							<select name="shippingBarangay" style="font-size: 13px;" class="form-control input-sm">
								<option>{{$shipping->barangay}}</option>
								@if($brgy)
									@foreach($brgy as $barangay)
									<option>{{$barangay->brgyDesc}}</option>
									@endforeach
								@endif
							</select>
						</td>
						@else
						<td>
							<select name="shippingBarangay" style="font-size: 13px;" class="form-control input-sm">
								<option></option>
								@if($brgy)
									@foreach($brgy as $barangay)
									<option>{{$barangay->brgyDesc}}</option>
									@endforeach
								@endif
							</select>

						</td>
						@endif
					</tr>
					<tr>
						<td><strong style="font-size: 13px;">Mobile Number</strong></td>
						<td><div class="input-group">
					    <span class="input-group-addon" style="font-size: 13px;">+63</span>
					    @if($shipping)
					    <input  type="number" class="form-control input-sm" name="shippingMobile" maxlength="11"  placeholder="Phone number" style="font-size: 13px;" value="{{$shipping->mobile}}" />
					    @else
					    <input  type="number" class="form-control input-sm" name="shippingMobile" maxlength="11"  placeholder="Phone number" style="font-size: 13px;" />
					    @endif
					  </div></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>



<div class="col-md-10">
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Your billing address</strong>
		</div>
		<div class="panel-body">
			<div class="col-md-10 col-md-offset-1">
				<table class="table">
					<tr>
						<td style="width: 200px;"><strong style="font-size: 13px;">Complete Address (House Number, Building and Street Name)</strong></td>
						@if($billing)
						<td><textarea rows="2" aria-required="true" style="resize: none;font-size: 13px;"  class="form-control input-sm" placeholder="Complete Address (House Number, Building and Street Name)" maxlength="255" name="billingCompleteAddress" >{{$billing->completeAddress}}</textarea></td>
						@else
						<td><textarea rows="2" aria-required="true" style="resize: none;font-size: 13px;"  class="form-control input-sm" placeholder="Complete Address (House Number, Building and Street Name)" maxlength="255" name="billingCompleteAddress" ></textarea></td>
						@endif
					</tr>
					<tr>
						<td ><strong style="font-size: 13px;">Province</strong></td>
						<td>
							@if($billing)
							<select name="billingProvince" style="font-size: 13px;" class="form-control input-sm">
								<option>{{$billing->province}}</option>
								@if($province)
									@foreach($province as $p)
									<option>{{$p->provDesc}}</option>
									@endforeach
								@endif
							</select>


							@else
							<select name="billingProvince" style="font-size: 13px;" class="form-control input-sm">
								<option></option>
								@if($province)
									@foreach($province as $p)
									<option>{{$p->provDesc}}</option>
									@endforeach
								@endif
							</select>

							@endif
						</td>
					</tr>
					<tr>
						<td><strong style="font-size: 13px;">City/Municipality</strong></td>
						<td>
							@if($billing)

							<select name="billingCitymun" style="font-size: 13px;" class="form-control input-sm">
								<option>{{$billing->citymun}}</option>
								@if($citymun)
									@foreach($citymun as $cm)
									<option>{{$cm->citymunDesc}}</option>
									@endforeach
								@endif
							</select>

							@else
							<select name="billingCitymun" style="font-size: 13px;" class="form-control input-sm">
								<option></option>
								@if($citymun)
									@foreach($citymun as $cm)
									<option>{{$cm->citymunDesc}}</option>
									@endforeach
								@endif
							</select>
							@endif
						</td>
					</tr>
					<tr>
						<td><strong style="font-size: 13px;">Barangay</strong></td>
						<td>
							@if($billing)
							<select name="billingBarangay" style="font-size: 13px;" class="form-control input-sm">
								<option>{{$billing->barangay}}</option>
								@if($brgy)
									@foreach($brgy as $barangay)
									<option>{{$barangay->brgyDesc}}</option>
									@endforeach
								@endif
							</select>

							@else
							<select name="billingBarangay" style="font-size: 13px;" class="form-control input-sm">
								<option></option>
								@if($brgy)
									@foreach($brgy as $barangay)
									<option>{{$barangay->brgyDesc}}</option>
									@endforeach
								@endif
							</select>
							@endif
						</td>
					</tr>
					<tr>
						<td><strong style="font-size: 13px;">Mobile Number</strong></td>
						<td><div class="input-group">
					    <span class="input-group-addon" style="font-size: 13px;">+63</span>
					    @if($billing)
					    <input  type="number" class="form-control input-sm" name="billingMobile" maxlength="11" placeholder="Phone number" style="font-size: 13px;" value="{{$billing->mobile}}" />
					    @else
					    <input  type="number" class="form-control input-sm" name="billingMobile" maxlength="11" placeholder="Phone number" style="font-size: 13px;" />
					    @endif
					  </div></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>


</div>


<div class="well col-md-3 pull-right" style="margin-top: 50px;">`

		<table class="table table-responsive">
			<caption>Total cost:</caption>
			<tr>
					<th colspan="4" style="text-align: right;">SUB TOTAL:</th>
					<th>  {{round($subTotal,2)}}</th>
					<input type="hidden" name="subTotal" value="{{$subTotal}}">
					<th></th>
				</tr>
				<tr>
					<th colspan="4" style="text-align: right;">TAX (12%):</th>
					<th>  {{round($tax,2)}}</th>
					<th></th>
					<input type="hidden" name="tax" value="{{$tax}}">
				</tr>
				<tr style="border-top: 1px solid #111111;">
					<th colspan="4" style="text-align: right;">TOTAL:</th>
					<th>  {{round($totalPrice,2)}}</th>
					<input type="hidden" name="totlPrice" value="{{$totalPrice}}">
					<th></th>
				</tr>
		</table>
	</div>

	@if(is_array($product))
		@if($product)
			@foreach($product as $prod)
				<input type="hidden" name="idQuantity[]" value="{{$prod}}">
			@endforeach
		@endif
	@endif

	<div class="well col-md-3">
			<b>Types of payment	</b>
			<h4>COD (Cash on Delivery)</h4>

	</div>


	<div class="well col-md-3">
			<b>Delivery date:	</b>
			<h4><?php
			$from=Date('m-d-Y', strtotime("+5 days"));
			$to=Date('m-d-Y', strtotime("+10 days"));

			echo 'From ';
			echo '<b>'.$from.'</b>';
			echo ' to ';
			echo '<b>'.$to.'</b>';

			 ?></h4>
	</div>
 
	<div class="col-md-3">
	
			<button type="button" class="btn btn-primary" onclick="checkOrder('#frmOrder');">CheckOut</button>
			

	</div>
		
</form>


 
@endsection
