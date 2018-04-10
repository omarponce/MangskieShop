
<form action="{{ url('product/update') }}" method="POST" enctype="multipart/form-data" id="frmUpdateProduct">
	{{ csrf_field() }}
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Product</h4>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
        	<label>Item Name</label>
        
          @if($product->id)
            <input type="hidden" name="product_id" value="{{$product->id}}">
          @endif

          @if($image->id)
            <input type="hidden" name="image_id" value="{{$image->id}}">
          @endif

          @if($product->itemName)
            <input type="text" name="itemName" value="{{$product->itemName}}" class="form-control" maxlength="255">
          @endif

          @if($product->shortName)
            <input type="text" name="shortName" value="{{$product->shortName}}" class="form-control" maxlength="255">
          @endif
          
          
        </div>

        <div class="form-group">

        	<label>Description</label>

          @if($product->description)
        	<textarea name="description" class="form-control" style="resize:none;"  maxlength="255">{{$product->description}}</textarea>
          @endif

        </div>
        <div class="clearfix">
        	
        </div>
        	<label class="col-md-6">Quantity</label>
        	<label class="col-md-6">Item Price</label><br/>
          @if($product->quantity)
        	<input type="number" name="quantity"  placeholder="quantity" class="pull-left col-md-5" style="padding: 5px;"  maxlength="11" value="{{$product->quantity}}" />
          @endif

          @if($product->itemPrice)
        	<input type="number" name="itemPrice" class="pull-left col-md-5 col-md-offset-1" style="padding: 5px;"  maxlength="11" value="{{$product->itemPrice}}">
          @endif

        	<div class="clearfix"></div>
        	<br/>
        	<label></label>
        	
        	<label style="margin-left: 10px;">
            @if($image->productPicture)
        		<img src="" style="height: 80px;width: 80px;"  class="image-responsive" id="previewHolder">
            <input type="file" name="itemPicture" id="filePhoto" onchange="readURL(this);" placeholder="Choose image..">
            @endif
        	</label>
      </div>

      <div class="clearfix"></div>
      <br/>
      <div class="modal-footer">
        <label class="pull-left" id="msg"></label>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="saveProduct('#frmUpdateProduct','#msg');" >Save</button>
        
      </div>

      
    </div>
</form>