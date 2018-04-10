<html>
<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
<form>
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="ponceomar.20-facilitator@gmail.com">


<?php $count =0;?>
	@foreach($item as $product)
	 <?php $count++; ?>

<input type="hidden" name="item_name_{{$count}}" value="{{$product['itemName']}}">
<input type="hidden" name="item_number_{{$count}}" value="{{$product['id']}}">
<input type="hidden" name="amount_{{$count}}" value="{{$product['itemPrice']}}">
<input type="hidden" name="shipping_{{$count}}" value="0.12">



<!-- after payment -->
 <input type="hidden" name="return" id="return" value="http://localhost/MangskieShop/mail" />


<!-- Cancel payment -->
  <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost/MangskieShop" />
  <br>

@endforeach


<input name="submit" id="paypalbtn" type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/btn/png/blue-rect-paypalcheckout-34px.png" value="PayPal" formaction="https://www.sandbox.paypal.com/cgi-bin/webscr">

</form>
</body>
</html>