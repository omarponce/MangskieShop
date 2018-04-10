@extends('layouts.app')

@section('content')
<div class="col-md-9">

	@if(count($errors) > 0)
					<label class="alert alert-danger col-md-12">{{$errors->first()}}</label>
				@endif

				@if(session('successmsg'))
					<label class="alert alert-success col-md-12">{{session('successmsg')}}</label>
				@endif
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Your shipping address</strong>
		</div>


		<div class="panel-body">
			<div class="col-md-10 col-md-offset-1" id="shippingAddress">

				
				<form action="saveshipping" method="POST">

					{{ csrf_field() }}

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
								<option>{{$shipping->province}}</option>
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
								<option>{{$shipping->province}}</option>
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
						<td><input type="text" name="shippingBarangay" style="font-size: 13px;" class="form-control input-sm">
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
					<tr>
						<td></td>
						<td><input type="submit" value="Save" class="btn btn-sm btn-default pull-right navbar-inverse"></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>



<div class="col-md-9 col-md-offset-3" id="billingAddress">
	<div class="panel panel-default">
		<div class="panel-heading">
			<strong>Your billing address</strong>
		</div>
		<div class="panel-body">
			<div class="col-md-10 col-md-offset-1">
				<form action="savebilling" method="POST">
					{{ csrf_field() }}
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
								@if($province)
									@foreach($province as $p)
									<option>{{$p->provDesc}}</option>
									@endforeach
								@endif
							</select>

							@else
							<select name="billingCitymun" style="font-size: 13px;" class="form-control input-sm">
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
						<td><strong style="font-size: 13px;">Barangay</strong></td>
						<td>
							@if($billing)
							<select name="billingBarangay" style="font-size: 13px;" class="form-control input-sm">
								<option>{{$billing->barangay}}</option>
								@if($province)
									@foreach($province as $p)
									<option>{{$p->provDesc}}</option>
									@endforeach
								@endif
							</select>

							@else
							<select name="billingBarangay" style="font-size: 13px;" class="form-control input-sm">
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
					<tr>
						<td></td>
						<td><input type="submit" value="Save" class="btn btn-sm btn-default pull-right navbar-inverse"></td>
					</tr>
				</table>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection