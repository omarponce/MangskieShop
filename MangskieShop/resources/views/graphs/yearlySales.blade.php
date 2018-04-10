<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        
        
        
        <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-base.min.js"></script>
        
        <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-ui.min.js"></script>
        
        <script src="https://cdn.anychart.com/releases/8.0.1/js/anychart-exports.min.js"></script>
        
        
        <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.0.1/css/anychart-ui.min.css" />
        
        <link rel="stylesheet" href="https://cdn.anychart.com/releases/8.0.1/fonts/css/anychart-font.min.css" />
        
        <title>MangskieShop</title>
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
// create area chart
chart = anychart.area();

// turn on chart animation
chart.animation(true);

// set chart title text settings
chart.title()
        .enabled(true)
        .useHtml(true)
        .text('Total sales for the year {{$year}}<br/>' +
                '<span style="color:#212121; font-size: 13px;">(Monthly basis)</span>');

// axis title
chart.yAxis().title('Sales in dollar');

// create a logarithmic scale
var logScale = anychart.scales.log();
logScale.minimum(1) // set scale minimum value
        .maximumGap(0.2); // increase scale maximum gap
logScale.ticks().count(6); // set fixed major ticks count
logScale.minorTicks().mode('logarithmic'); // set minor ticks to use logarithmic mode

// set scale for the chart
// it force to use passed scale in all scale dependent entries such axes, grids, crosshairs etc
chart.yScale(logScale);

// create area series on passed data
var series = chart.area([

    ['Jan', {{$sales[0][0]}}],
    ['Feb', {{$sales[0][1]}}],
    ['Mar', {{$sales[0][2]}}],
    ['Apr', {{$sales[0][3]}}],
    ['May', {{$sales[0][4]}}],
    ['Jun', {{$sales[0][5]}}],
    ['Jul', {{$sales[0][6]}}],
    ['Aug', {{$sales[0][7]}}],
    ['Sep', {{$sales[0][8]}}],
    ['Oct', {{$sales[0][9]}}],
    ['Nov', {{$sales[0][10]}}],
    ['Dec', {{$sales[0][11]}}]
]);

// set series data labels settings
series.labels()
        .enabled(true)
        .fontColor('#212121')
        .position('center-top')
        .anchor('center-bottom');

// turn on series markers
series.markers(true);

// set series name
series.name('Number of Visitors');

// set up tooltips and interactivity settings
series.tooltip()
        .position('center-top')
        .positionMode('point')
        .anchor('left-top')
        .offsetX(5)
        .offsetY(5);

chart.interactivity().hoverMode('by-x');

// set container for the chart
chart.container('container');
// initiate chart drawing
chart.draw();
    });
        </script>




        <p>TOTAL SALES: {{$sales[0][0] + $sales[0][1] + $sales[0][2] + $sales[0][3] + $sales[0][4] + $sales[0][5] + $sales[0][6] + $sales[0][7] + $sales[0][8] + $sales[0][9] + $sales[0][10] + $sales[0][11]}}</p>
    </body>
</html>
