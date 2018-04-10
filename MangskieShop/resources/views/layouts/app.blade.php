<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '<MangskieShop') }}</title>

    <!-- Styles -->
    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
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
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-inverse">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="http://localhost/MangskieShop">
                        Mangskie Shop
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->firstName }}  {{ Auth::user()->middleName }} {{ Auth::user()->surname }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                                    <li><a href="{{url('home')}}">Dashboard</a></li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="container">

        @if(url()->current() == url('/login'))

        @elseif(url()->current() == url('/register'))

        @elseif(url()->current() == url('cart'))

        @elseif(url()->current() == url('cart/checkout'))

        @elseif(url()->current() == url('thankyou'))


        @else
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><b>Dashboard</b></div>

                <div class="panel-body">
                    <ul class="nav nav-pills nav-stacked" >
                        @if(url()->current() == url('home/orders'))
                            <li class="activeLink"><a href="{{url('home/orders')}}">Orders</a></li>
                        @else
                            <li><a href="{{url('home/orders')}}" style="color: #111111;font-weight: bold;">Orders</a></li>
                        @endif


                        @if(url()->current() == url('home/cancellations'))
                            <li class="activeLink"><a href="{{url('home/cancellations')}}">Cancellations</a></li>
                        @else
                            <li><a href="{{url('home/cancellations')}}" style="color: #111111;font-weight: bold;">Cancellations</a></li>
                        @endif

                        <!--
                        @if(url()->current() == url('home/returns'))
                            <li class="activeLink"><a href="{{url('home/returns')}}">Returns</a></li>
                        @else
                            <li class=""><a href="{{url('home/returns')}}" style="color: #111111;font-weight: bold;">Returns</a></li>
                        @endif
                        -->

                        @if(url()->current() == url('home/address_book'))
                            <li class="activeLink"><a href="{{url('home/address_book')}}">Address Book</a></li>
                        @else
                             <li class=""><a href="{{url('home/address_book')}}" style="color: #111111; font-weight: bold;">Address Book</a></li>
                        @endif


                        @if(url()->current() == url('home/personal_information'))
                            <li class="activeLink"><a  href="{{url('home/personal_information')}}" >Personal Information</a></li>
                        @else
                             <li class=""><a  href="{{url('home/personal_information')}}" style="color: #111111;font-weight: bold;">Personal Information</a></li>
                        @endif


                        @if(url()->current() == url('home/account_information'))
                            <li class="activeLink"><a  href="{{url('home/account_information')}}">Account</a></li>
                        @else
                            <li class=""><a  href="{{url('home/account_information')}}" style="color: #111111;font-weight: bold;">Account</a></li>
                        @endif
                  </ul>
                </div>
            </div>
        </div>
@endif


            @yield('content')
        </div>





    </div>

    <!-- Scripts -->
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script type="text/javascript">


        function compute(){
            var sum = 0;
            $('.total').each(function() {
              sum += +$(this).text()||0;
            });
            $('#subtotal').html(sum.toFixed(2));

            $('#tax').html((sum * .12).toFixed(2));
            $('#tot').html((sum + (sum * .12)).toFixed(2));
        }
        var sum = 0;

            $('.total').each(function() {
              sum += +$(this).text()||0;
            });
            $('#subtotal').html(sum.toFixed(2));
             $('#tax').html((sum * .12).toFixed(2));
            $('#tot').html((sum + (sum * .12)).toFixed(2));


function removeToCart(id){
  $.get('http://localhost/MangskieShop/cart/remove/'+ id,function(data){
    //alert(data);
  });
}





function checkOrder(frm){
   $.ajax({
            type:'post',
            url:$(frm).attr('action'),
            data:new FormData($(frm)[0]),
            success:function(data){
                if(data !== 'ok'){
                    alert(data);
                }else{
                    window.location = "{{url('/thankyou')}}";
                }


            },
            processData:false,
            contentType:false
        });
}


    </script>
</body>
</html>
