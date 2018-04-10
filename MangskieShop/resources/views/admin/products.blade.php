@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="box box-success">
		    <div class="box-header with-border">
		        <h3 class="box-title">All Products</h3>

		        <div class="box-tools pull-right">
			        <button  type="button" onclick="openLoc('<?php echo url('product/new'); ?>')" class="btn btn-sm btn-success" ><i class="fa fa-plus"></i> Add new
			        </button>
		        </div>
		    </div>

		    <div class="box-body">
		    	<table class="table table-responsive table-striped table-hover">
		    		<!--<caption>
		    			<div class="input-group pull-left">
						    <span class="input-group-addon" style="background: #ccc;color: #555;border:1px solid #ccc;"><span class="glyphicon glyphicon-search"></span> Search:</span>
						    <input type="text" class="form-control" placeholder="item name" style="border:1px solid #ccc;">
					  </div>
		    		</caption>-->
		    		<thead>
		    			<tr>
		    				<th style="width: 60px;"></th>
		    				<th>Item Name</th>
		    				<th>Item Left</th>
		    				<th>Item Price</th>
		    				<th style="width: 100px;"></th>
		    			</tr>
		    		</thead>

		    		<tbody>
		    			@foreach($products as $prod)

		    			<tr id="tr{{$prod->id}}">

		    				<td>
		    				@foreach($image as $img)
		    					@if($img->productId == $prod->id)
		    						<img src="{{ url('public/images/'.$img->productPicture)}}" style="width: 60px;height: 60px;">
		    					@endif
		    				@endforeach
		    				</td>
		    				<td>{{ $prod->itemName }}</td>
		    				<td><strong>{{ $prod->quantity }}</strong></td>
		    				<td><strong>&#8369; {{ $prod->itemPrice }}</strong></td>
		    				<td>
		    					<button type="button" class="btn btn-info btn-sm" onclick="openLoc('<?php echo url('product/edit/'. $prod->id); ?>')" style="width: 100px;"><strong>EDIT</strong></button>
		    					<button  type="button" class="btn btn-danger btn-sm" style="width: 100px;" onclick="del('<?php echo url('product/delete/'. $prod->id); ?>','{{$prod->id}}','{{$prod->itemName}}')"  ><strong>REMOVE</strong></button>
		    				</td>
		    			</tr>
		    			@endforeach
		    		</tbody>
		    		
		    	</table>
		    </div>

		    <div class="box-footer clearfix">
		    	<div class="pull-right" >{{ $products->links() }}</div>
		    </div>

		</div>
	</div>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" id="openHere">

  </div>
</div>






@endsection