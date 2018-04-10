@extends('layouts.admin')


@section('content')
 <!-- TABLE: LATEST ORDERS -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>
              <h5>"<span class="glyphicon glyphicon-plane"></span>" Shipped | "<span class="glyphicon glyphicon-road"></span>" Delivered |
                "<span class="glyphicon glyphicon-user"></span>" Buyers Information 
              </h5>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>-->
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th style="width: 30px;">Order ID</th>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Delivery Date</th>
                    <th>Status</th>
                    <th style="text-align: center;width: 125px;">Update Status</th>
                  </tr>
                  </thead>

                  @if($orders)
                  <tbody>


                  @foreach($orders as $order)
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$order->id}}</a></td>
                    <td>
                    @if($products)
                      @foreach($products as $prod)
                        @if($prod->id == $order->productId)
                          {{$prod->itemName}}
                        @endif
                      @endforeach
                    @endif
                    </td>
                    <td><span class="label label-success">{{$order->quantity}}</span></td>
                    <td>
                      <div class="sparkbar" data-color="#00a65a" data-height="20">From {{$order->deliveryDateFrom}} to {{$order->deliveryDateTo}}</div>
                    </td>
                    <td>{{$order->status}}</td>
                    <td style="text-align: center;">
                      <div class="btn-group">
                        
                        <button type="button" title="Change status to shipped" class="btn btn-success btn-sm" onclick="updateOrderStatus('<?php echo url('admin/orders/'.$order->id.'/Shipped'); ?>');"><span class="glyphicon glyphicon-plane"></span></button>
                      <button type="button" title="Change status to delivered"  class="btn btn-warning btn-sm" onclick="updateOrderStatus('<?php echo url('admin/orders/'.$order->id.'/Delivered'); ?>');"><span class="glyphicon glyphicon-road"></span></button>

                      <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-info btn-sm" onclick="buyer('<?php echo url('admin/orders/'.$order->id); ?>');"><span class="glyphicon glyphicon-user"></span></button>

                      </div>
                        

                      
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                  <tfoot>
                    <th colspan="6">{{$orders->links()}}</th>
                  </tfoot>


                  @endif
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <!--<div class="box-footer clearfix">-->
              <!--<a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>-->
              
            <!--</div>-->
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Buyer's Information</h4>
        </div>
        <div class="modal-body" id="modalBody">
          <p>Loading...</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
@endsection