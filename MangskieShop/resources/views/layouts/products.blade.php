<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
  <title>MangskieShop</title>
  <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon" href="css/images/favicon.ico" />
  <link rel="stylesheet" href="{{ url('public/products/css/style.css') }}" type="text/css" media="all" />
  <script src="{{ url('public/products/js/jquery-1.7.min.js') }}" type="text/javascript"></script>
  <script src="{{ url('public/products/js/jquery.jcarousel.js') }}" type="text/javascript"></script>
  <script src="{{ url('public/products/js/DD_belatedPNG-min.js') }}" type="text/javascript"></script>
  <script src="{{ url('public/products/js/cufon-yui.js') }}" type="text/javascript"></script>
  <script src="{{ url('public/products/js/Tahoma_400-Tahoma_700.font.js') }}" type="text/javascript"></script>
  <script src="{{ url('public/products/js/functions.js') }}" type="text/javascript"></script>


  <style>
  .pagination {
    display: inline-block;
}

.pagination li {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    list-style:none;
    font-weight:bold;
}

.pagination li a,.pagination li a:visited{
  color:blue;
  font-size: 15px;
}
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 9999; /* Sit on top */
    padding-top: 50px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 0px;
    border: 1px solid #888;
    width: 400px;
    box-shadow: 3px 3px 3px #111111;
    height: auto;
}

/* The Close Button */
.close {
    color: #ffffff;
    float: right;
    font-size: 15px;
    font-weight: bold;
    background: #111111;
    position: absolute;
    padding: 5px;
    margin-left: 380px;
}

.close:hover,
.close:focus {
    color: #ffffff;
    text-decoration: none;
    cursor: pointer;
}




.add-to-cart{
  display: inline-block;
-webkit-box-sizing: content-box;
-moz-box-sizing: content-box;
box-sizing: content-box;
float: none;
z-index: auto;
width: auto;
height: auto;
/*position: static;*/
cursor: pointer;
opacity: 1;
margin: 0;
padding: 10px 20px;
overflow: visible;
border: 1px solid #018dc4;
-webkit-border-radius: 3px;
border-radius: 3px;
font: normal 16px/normal "Times New Roman", Times, serif;
color: rgba(255,255,255,0.9);
-o-text-overflow: clip;
text-overflow: clip;
background: #0199d9;
-webkit-box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
box-shadow: 2px 2px 2px 0 rgba(0,0,0,0.2) ;
text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
-webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
-webkit-transform: none;
transform: none;
-webkit-transform-origin: 50% 50% 0;
transform-origin: 50% 50% 0;
}
</style>
</head>
<body>
  <!-- Wrapper -->
  <div id="wrapper">
    <div class="shell">
      <!-- Header -->
      <div id="header">
        <!-- Logo -->
        <h3 id="logo"> <a title="home" href="#">MangskieShop</a></h3>
        <!-- Navigation -->
        <div id="navigation">
          <ul>
            <li><a title="Home" href="{{url('/')}}">Home<span></span></a></li>
            @guest
              <li><a href="{{ route('login') }}">Login<span></span></a></li>
              <li><a href="{{ route('register') }}">Register<span></span></a></li>
            @else
              <li><a href="{{url('home')}}">Dashboard<span></span></a></li>
              <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
            @endif
          </ul>
        </div>
        <!-- END Navigation -->
        <div class="cl"></div>
        <div id="cart">
          <p><a title="shopping bag" href="{{url('cart')}}">Shopping Cart</a></p>
        </div>
      </div>
    </div>
    <!-- END Header -->
    <!-- Main -->
    <div id="main">
      <!-- Slider Holder -->
      <div id="slider-holder">
        <div class="shell">
          <!-- Main Slider -->
          <div id="slider">
            <!--<a title="Details" class="main-button" href="#">view product</a>          -->


            <ul>
              @if(count($featured) > 0)
              @foreach($featured as $ft)
              <li>
                 @foreach($products['image'] as $img)
                  @if($img->productId == $ft->id)
                <img src="{{url('public/images/'.$img->productPicture)}}" alt="AgriShop" style="width: 468px;height: 352px;" />
                  @endif
                @endforeach

                <div class="caption">
                  <h2>Featured Products</h2>
                  <h3>{{$ft->itemName}}</h3>
                  <p  style="height: 100px;overflow-y: hidden;">{{$ft->description}}</p>
                </div>
                <div class="cl"></div>
              </li>
              @endforeach
              @endif
            </ul>
            <div id="slider-nav">
              @if(isset($featured[0]))
                @foreach($products['image'] as $img)
                  @if($img->productId == $featured[0]->id)

                 <a title="slide 1" href="#">1<span class="fade"></span><span class="active"></span><img src="{{url('public/images/'.$img->productPicture)}}" alt="AgriShop" style="width: 105;height: 75;"/></a>
                 @endif
                 @endforeach
              @endif


               @if(isset($featured[1]))
                @foreach($products['image'] as $img)
                  @if($img->productId == $featured[1]->id)
                   <a title="slide 2" href="#">2<span class="fade"></span><span class="active"></span><img src="{{url('public/images/'.$img->productPicture)}}" alt="AgriShop" style="width: 105;height: 75;"/></a>
                  @endif
                 @endforeach
              @endif

                @if(isset($featured[2]))
                @foreach($products['image'] as $img)
                  @if($img->productId == $featured[2]->id)


              <a title="slide 3" href="#">3<span class="fade"></span><span class="active"></span><img src="{{url('public/images/'.$img->productPicture)}}" alt="MangskieShop" style="width: 105;height: 75;" /></a>

               @endif
                 @endforeach
              @endif
            </div>
          </div>
          <!-- END Main Slider -->
        </div>
      </div>
      <!-- END Slider Holder -->

@yield('content')





      <div class="columns">
        <div class="shell">
          <div class="post">
            <div class="col about">
              <p class="heading">about MangskieShop</p>
              <p>MangskieShop is an online shop for Appliances made by TECO.We sell quality products only.We offer good services and we value our customers.</p>
              <!--<a title="Read more" href="#">&raquo;&nbsp;read more</a>-->
            </div>
            <div class="col categories">
              <!--<p class="heading">categories</p>
              <ul>
                <li><a title="Men sunglasses" href="#">Men</a></li>
                <li><a title="Women sunglasses" href="#">Women</a></li>
                <li><a title="Children sunglasses" href="#">Childern</a></li>
              </ul>-->
            </div>
            <div class="col info" style="float: right;">
              <p class="heading">informations</p>
              <ul class="first">
                <li><a title="Shopping Bag" href="#"></a></li>
                <li><a title="Returns" href="#"></a></li>
                <li><a title="Search" href="#"></a></li>
              </ul>
              <ul>
                <li><a title="About Us" href="#">Home</a></li>
                @guest
              <li><a href="{{ route('login') }}">Login<span></span></a></li>
              <li><a href="{{ route('register') }}">Register<span></span></a></li>
            @else
              <li><a href="{{url('home')}}">Dashboard<span></span></a></li>
              <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
            @endif
              </ul>
            </div>
            <div class="cl"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- END Main  -->
    <div id="footer-push"></div>
  </div>
  <!-- END Wrapper -->
  <!-- Footer -->
  <div id="footer">
    <div class="shell">
      <div id="bottom-logo"><a title="home" href="#">Bottom logo</a></div>
      <p>Copyright &copy; MangskieShop 2018. All Rights Reserved.</p>
      <div class="cl"></div>
    </div>
  </div>
  <!-- END Footer -->


<!-- The Modal -->
<div id="myModal" class="modal ">

  <!-- Modal content -->
  <div class="modal-content" id="product-info">



  <div style="clear: both;"></div>
  </div>
</div>



<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
/*btn.onclick = function() {
    modal.style.display = "block";
}*/

function openModal(id){
  /*$('#itemName').html(itemName);
  $('#itemLeft').html(itemLeft);
  $('#description').html(description);
  $('#price').html(itemPrice);
  $('#image').attr('src',"http://localhost/MangskieShop/" + picture);
*/
  $.get('http://localhost/MangskieShop/product/product_detail/'+ id,function(data){
    $('#product-info').html(data);
     modal.style.display = "block";
  });

}


function addToCart(id){
  $.get('http://localhost/MangskieShop/cart/add/'+ id,function(data){
    //$('#cart-button').html(data);
    $('#product-info').html(data);
     //modal.style.display = "block";
     //alert(data);
     //add disabled
  });
}






function closeModal(){
    modal.style.display = "none";
}
// When the user clicks on <span> (x), close the modal
/*span.onclick = function() {
    modal.style.display = "none";
}*/


// When the user clicks anywhere outside of the modal, close it

function addq(){

}








</script>


</body>
</html>
