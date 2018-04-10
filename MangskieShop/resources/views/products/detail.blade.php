
<h3>Product Detail</h3>
<br/>
<div style="float: left;">
	@if($image->productPicture)
	<img src="{{ url('public/images/'.$image->productPicture) }}" class="image" width="400px" height="400px" style="margin-left: 10px;border:1px solid #ccc;box-shadow: 2px 2px 2px #ccc;"> 
	@endif
</div>

<div style="float: left;margin-left: 30px;width: 400px;">
	<!--@if($product->itemName)
		<h1 style="color:#111111;white-space: word-wrap;">{{ $product->itemName }}</h1>
	@endif

	<br/>
	<br/>
	<h3><b>Description:</b></h3>

	@if($product->description)
		<p style="color:#111111;font-size: 15px;">{{ $product->description }}</p>
	@endif

	<br/><br/>
	<b style="color:#e60000;font-size: 22px;">Price: &#8369; {{$product->itemPrice}}</b>

	<p style="color: #d0d0d0;">Item left: {{$product->quantity}}</p>
	<br/>
	Qty:
	<input type="number" name="qty" style="width: 80px;padding: 5px;">
	<button type="button" style="padding: 5px;">Add to cart</button>
-->
</div>


<div style="clear: both;"></div>