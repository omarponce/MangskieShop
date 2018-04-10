@extends('layouts.admin')


@section('content')
<div class="panel panel-success">
    <div class="panel-heading">
        <p><b>Reports</b></p>
    </div>

    <div class="panel-body">
        <a href="{{url('graph/totalSalesPerItem')}}" target="_blank">Total sales of each item.</a>
        <br/>
        <a href="{{url('graph/wholeYearSalesPerItem/2018')}}" target="_blank" id="wholeYear">Sales of each item for the year  </a>
        <select onchange="$('#wholeYear').attr('href','<?php echo url('graph/wholeYearSalesPerItem'); ?>' + '/' + this.value);">
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option selected="">2018</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
        </select>

<br/>

        <a href="{{url('graph/yearlySales/2018')}}" target="_blank" id="yearly">Total sales for the year</a>
        <select onchange="$('#yearly').attr('href','<?php echo url('graph/yearlySales'); ?>' + '/' + this.value);">
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option selected>2018</option>
            <option>2020</option>
            <option>2021</option>
            <option>2022</option>
        </select>
        <!--<a href="#">Graph total sales of each item for month of:</a>
        <select>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
            <option>December</option>
        </select>
         year: 
         <select>
             <option></option>
         </select>-->
        <br/>
        <a href="#"></a>

    </div>
</div>

@endsection