
<form action="{{ url('product/save') }}" method="POST" enctype="multipart/form-data" id="frmNewProduct">
	{{ csrf_field() }}
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">New Product</h4>
      </div>
      <div class="modal-body">
        
        <div class="form-group">
        	<label>Item Name</label>
        	<input type="text" name="itemName" class="form-control" maxlength="255">
        </div>

        <div class="form-group">
          <label>Short Name</label>
          <input type="text" name="shortName" class="form-control" maxlength="10">
        </div>

        <div class="form-group">
        	<label>Description</label>
        	<textarea name="description" class="form-control" style="resize:none;"  maxlength="255"></textarea>
        </div>
        <div class="clearfix">

        
        	
        </div>
        	<label class="col-md-6">Quantity</label>
        	<label class="col-md-6">Item Price</label><br/>
        	<input type="number" name="quantity"  placeholder="quantity" class="pull-left col-md-5" style="padding: 5px;"  maxlength="11" />
        	<input type="number" name="itemPrice" class="pull-left col-md-5 col-md-offset-1" style="padding: 5px;"  maxlength="11" >

        	<div class="clearfix"></div>
        	<br/>
        	<label></label>
        	
        	<label style="margin-left: 10px;">
        		<img src="{{ url('public/img/add-photo.png')}}" style="height: 80px;width: 80px;"  class="image-responsive" id="previewHolder">
            <input type="file" name="itemPicture" id="filePhoto" onchange="readURL(this);" placeholder="Choose image..">
        	</label>
      </div>

      <div class="clearfix"></div>
      <br/>
      <div class="modal-footer">
        <label class="pull-left" id="msg"></label>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="saveProduct('#frmNewProduct','#msg');" >Save</button>
        
      </div>

      
    </div>
</form>