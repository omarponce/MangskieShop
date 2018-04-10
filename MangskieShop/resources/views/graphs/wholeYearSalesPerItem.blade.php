<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <script src="{{url('public/anychart/js/anychart-base.min.js')}}"></script>
        
        <script src="{{url('public/anychart/js/anychart-ui.min.js')}}"></script>
        
        <script src="{{url('public/anychart/js/anychart-exports.min.js')}}"></script>
        
        <script src="{{url('public/anychart/js/anychart-cartesian-3d.min.js')}}"></script>
        
        
        <link rel="stylesheet" href="{{url('public/anychart/css/anychart-ui.min.css')}}" />
        
        <link rel="stylesheet" href="{{url('public/anychart/fonts/css/anychart-font.min.css')}}" />
        
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
// create data set on our data
var dataSet = anychart.data.set([

    @if(count($sales) > 0)
        @foreach($sales as $sale)
            ['{{$sale[0]}}',{{$sale[1]}},{{$sale[2]}},{{$sale[3]}},{{$sale[4]}},{{$sale[5]}},{{$sale[6]}},{{$sale[7]}},{{$sale[8]}},{{$sale[9]}},{{$sale[10]}},{{$sale[11]}},{{$sale[12]}}],
        @endforeach
    @endif
]);

// map data for the first series, take x from the zero column and value from the first column of data set
var seriesData_1 = dataSet.mapAs({'x': 0, 'value': 1});

// map data for the second series, take x from the zero column and value from the second column of data set
var seriesData_2 = dataSet.mapAs({'x': 0, 'value': 2});

// map data for the second series, take x from the zero column and value from the third column of data set
var seriesData_3 = dataSet.mapAs({'x': 0, 'value': 3});

// map data for the fourth series, take x from the zero column and value from the fourth column of data set
var seriesData_4 = dataSet.mapAs({'x': 0, 'value': 4});

var seriesData_5 = dataSet.mapAs({'x': 0, 'value': 5});

var seriesData_6 = dataSet.mapAs({'x': 0, 'value': 6});

var seriesData_7 = dataSet.mapAs({'x': 0, 'value': 7});

var seriesData_8 = dataSet.mapAs({'x': 0, 'value': 8});

var seriesData_9 = dataSet.mapAs({'x': 0, 'value': 9});

var seriesData_10 = dataSet.mapAs({'x': 0, 'value': 10});

var seriesData_11 = dataSet.mapAs({'x': 0, 'value': 11});

var seriesData_12 = dataSet.mapAs({'x': 0, 'value': 12});

// create bar chart
chart = anychart.bar3d();

// force chart to stack values by Y scale.
chart.yScale().stackMode('percent');

// turn on chart animation
chart.animation(true);

// set chart title text settings
chart.title('Whole year sale of each item for the year  {{$year}}');

// set yAxis labels formatting, force it to add % to values
chart.yAxis(0).labels().format('{%Value}%');

// helper function to setup label settings for all series
var setupSeriesLabels = function (series, name) {
    series.name(name)
            .stroke('3 #fff 1');
    series.hovered().stroke('3 #fff 1');
};

// temp variable to store series instance
var series;

// create first series with mapped data
series = chart.bar(seriesData_1);
setupSeriesLabels(series, 'January');

// create second series with mapped data
series = chart.bar(seriesData_2);
setupSeriesLabels(series, 'February');

// create third series with mapped data
series = chart.bar(seriesData_3);
setupSeriesLabels(series, 'March');

// create fourth series with mapped data
series = chart.bar(seriesData_4);
setupSeriesLabels(series, 'April');

// create fourth series with mapped data
series = chart.bar(seriesData_5);
setupSeriesLabels(series, 'May');

// create fourth series with mapped data
series = chart.bar(seriesData_6);
setupSeriesLabels(series, 'June');

// create fourth series with mapped data
series = chart.bar(seriesData_7);
setupSeriesLabels(series, 'July');

// create fourth series with mapped data
series = chart.bar(seriesData_8);
setupSeriesLabels(series, 'August');

// create fourth series with mapped data
series = chart.bar(seriesData_9);
setupSeriesLabels(series, 'September');


// create fourth series with mapped data
series = chart.bar(seriesData_10);
setupSeriesLabels(series, 'October');


// create fourth series with mapped data
series = chart.bar(seriesData_11);
setupSeriesLabels(series, 'November');

// create fourth series with mapped data
series = chart.bar(seriesData_12);
setupSeriesLabels(series, 'December');


// turn on legend
chart.legend()
        .enabled(true)
        .fontSize(14)
        .padding([0, 0, 15, 0]);
chart.interactivity().hoverMode('by-x');
chart.tooltip()
        .displayMode('union')
        .valuePrefix('$');

// set container id for the chart
chart.container('container');

// initiate chart drawing
chart.draw();
    });
        </script>
    </body>
</html>
