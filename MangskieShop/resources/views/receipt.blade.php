

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="e5TOaiIofUzbxPJOo1od1GdIeI6At4Ik3sn0sXnH">

    <title>Mangskie Shop</title>

    <!-- Styles -->
    <link href="{{url('public/css/app.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{url('public/js/app.js')}}"></script>
    <style type="text/css">
        .activeLink{
            background: #111111;
            border-radius: 4px;
        }
        .activeLink a{
            color: #ffffff;
        }
        .activeLink a:hover{
            color: #111111;
        }
    </style>
</head>
<body style="width: 100%;">


<div class="" style="width: 100%;">
	<div class="col-md-12">
		<h2 class="page-header">
          <i class="fa fa-globe"></i> Mangskie Shop
          <small class="pull-right">Date: {{date('Y/m/d')}}</small>
        </h2>
	</div>

	<div class="clearfix"></div>
	
	 <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Mangskie Shop, Inc.</strong><br>
          Hermosa, Bataan<br>
          Phone: (123) 456-5432<br>
          Email: ponceomar.20@gmail.com  
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>{{Auth::user()->firstName}} {{Auth::user()->surname}}</strong><br>
          {{$shipping->completeAddress}}<br>
         {{$shipping->barangay}}, {{$shipping->citymun}} {{$shipping->province}}<br>
          Phone: {{$shipping->mobile}}<br>
          Email: {{Auth::user()->email}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <!--<b>Invoice #007612</b><br>-->

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td id="subtotal"> 0.00</td>
            </tr>
            <tr>
              <th>Shipping Fee:</th>
              <td id="tax"> 0.00</td>
            </tr>
            <tr>
              <th>Total:</th>
              <td id="total"> 0.00</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->






	 <!-- Table row -->
    <div class="row">
      <div class="col-xs-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
            <th>Qty</th>
            <th>Product</th>
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>

            <script type="text/javascript"> var subtotal = 0;</script>
          @foreach($orders as $order)
          <tr>
            <td>{{$order->quantity}}</td>

            @foreach($products as $product)
              @if($product->id == $order->productId)
              <td>{{$product->itemName}}</td>
              <td>{{$product->description}}</td>

              <script type="text/javascript">
                $(document).ready(function(){
                  //alert({{$order->quantity * $product->itemPrice}});
                  subtotal = subtotal + {{$order->quantity * $product->itemPrice}};
                  $('#subtotal').html(' '+subtotal.toFixed(2));
                  $('#tax').html(' '+ (subtotal * 0.12).toFixed(2));
                  $('#total').html(' '+ ((subtotal * 0.12) + subtotal).toFixed(2));
                });
              </script>
              <td onshow="alert(1); compute({{$order->quantity * $product->itemPrice}});">{{$order->quantity * $product->itemPrice}}</td>
              @endif
            @endforeach
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->



    <div class="row">
      <!-- accepted payments column -->
      <div class="col-xs-6">

        <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
          We only give the best service for our customer.
        </p>
      </div>
      <!-- /.col -->
      <div class="col-xs-6">
        <p class="lead">Delivery Date: </p>
        <b>From <font size="5"> {{$orders[0]->deliveryDateFrom}}</font> to <font size="5"> {{$orders[0]->deliveryDateTo}}</font></b>
        
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->




</div>

<script type="text/javascript">
  $(document).ready(function(){
    window.print();
  });

</script>

</body>
</html>