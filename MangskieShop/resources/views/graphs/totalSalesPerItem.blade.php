 <!DOCTYPE html>
 <html>
 <head>
     <title>MangskieShop</title>
      <script src="{{url('public/anychart/js/anychart-base.min.js')}}"></script>
        
        <script src="{{url('public/anychart/js/anychart-ui.min.js')}}"></script>
        
        <script src="{{url('public/anychart/js/anychart-exports.min.js')}}"></script>
        
        <script src="{{url('public/anychart/js/anychart-cartesian-3d.min.js')}}"></script>
        
        
        <link rel="stylesheet" href="{{url('public/anychart/css/anychart-ui.min.css')}}" />
        
        <link rel="stylesheet" href="{{url('public/anychart/fonts/css/anychart-font.min.css')}}" />

<style>
         html, body, #container {
             width: 100%;
             height: 100%;
             margin: 0;
             padding: 0;
         }
        </style>
 </head>
 <body>
 <div id="container"></div>

        <script type="text/javascript">
             anychart.onDocumentReady(function () {
// create bar chart
chart = anychart.bar3d();

// turn on chart animation
chart.animation(true);

// set chart padding
chart.padding([10, 40, 5, 20]);

// set chart title text settings
chart.title('Total sales for each item.');


// create area series with passed data
chart.bar([
    @if(count($sales) > 0)
        @foreach($sales as $sale)
            ['{{$sale[0]}}', {{$sale[1]}}],
        @endforeach
    @endif
]);

// set tooltip settings
chart.tooltip()
        .positionMode('point')
        .format('${%Value}')
        .position('right')
        .anchor('left-center')
        .offsetX(5)
        .offsetY(0);

// set yAxis labels formatter
chart.yAxis().labels().format('${%Value}');


// set titles for axises
chart.xAxis().title('Products');
chart.yAxis().title('Sales in dollar per product');
chart.interactivity().hoverMode('by-x');

// set scale minimum
chart.yScale().minimum(0);

// set container id for the chart
chart.container('container');

// initiate chart drawing
chart.draw();
    });
        </script>

 </body>
 </html>

       


        