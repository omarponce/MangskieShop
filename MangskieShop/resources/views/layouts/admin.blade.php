
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'MangskieShop') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('public/AdminLTE-2.4.2/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('public/AdminLTE-2.4.2/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('public/AdminLTE-2.4.2/bower_components/Ionicons/css/ionicons.min.css') }}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{ asset('public/AdminLTE-2.4.2/bower_components/jvectormap/jquery-jvectormap.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('public/AdminLTE-2.4.2/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('public/AdminLTE-2.4.2/dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

 
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="{{url('/')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo"><b>Mangskie</b>Shop</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
                  <li>
                    <a href="{{ url('/') }}">Home</a>
                  </li>
          <li class="dropdown ">
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
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      </div>
      <!-- search form -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ url('admin/orders') }}">
            <i class="fa fa-shopping-cart"></i> <span>Orders</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>


         <!--<li>
          <a href="{{ url('admin/returns') }}">
            <i class="fa fa-times"></i> <span>returns</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>-->


        <li>
          <a href="{{ url('admin/cancellations') }}">
            <i class="fa fa-times"></i> <span>Cancellations</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>


        <li>
          <a href="{{ url('admin/reports') }}">
            <i class="fa fa-area-chart"></i> <span>Sales</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>

        <li>
          <a href="{{ url('admin/products') }}">
            <i class="fa fa-cubes"></i> <span>Products</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>


        <li>
          <a href="{{ url('admin/accounts') }}">
            <i class="fa fa-users"></i> <span>Account Management</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"></small>
            </span>
          </a>
        </li>



      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <small></small>
      </h1>
    </section>
<!--############################################################################-->
    <!-- Main content -->
    <section class="content" style="width: 100%; height: 100%;">
		@yield('content')
    </section>
    <!-- /.content -->
<!--#############################################################################-->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b></b>
    </div>
    <strong>Copyright &copy;  <a href="{{ url('/') }}">MangskieShop</a>.</strong> All rights
    reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ asset('public/AdminLTE-2.4.2/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('public/AdminLTE-2.4.2/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('public/AdminLTE-2.4.2/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('public/AdminLTE-2.4.2/dist/js/adminlte.min.js') }}"></script>
<!-- Sparkline -->
<script type="text/javascript">
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $(input).parent('label').children('#previewHolder').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
  }else{
     $(input).parent('label').children('#previewHolder').attr('src','{{ url("public/img/add-photo.png")}}');
  }
}


  function openLoc(url){
    $.get(url,function(data){
      $('#openHere').html(data);
      //alert(data);
      $("#myModal").modal('show');
    });

  }

   function buyer(url){
    $('#modalBody').html('loading...');
    $.get(url,function(data){
     //alert(data);
      $('#modalBody').html(data);
    });

  }

function del(url,id,name){
    var con = confirm("Are you sure you want to delete \"" + name + "\" ?");
    if(con == true){
      $.get(url,function(data){
        alert(data);
        $('#tr' + id).remove();   
      });
    }
}

  function saveProduct(frm,result){
    $.ajax({
            type:'post',
            url:$(frm).attr('action'),
            data:new FormData($(frm)[0]),
            success:function(data){
                alert(data);
                //$(result).html(data);
                if(data == 'Created successfully!' || data == 'Updated successfully!'){
                  window.location="{{ url ('admin/products') }}";
                }
            },
            processData:false,
            contentType:false
        });
  }



function updateOrderStatus(url){
  var d = confirm('Are you sure you want to change the status of order?');

  if(d == true){
    window.location = url;
  }
}

</script>
</body>
</html>
