@extends('layouts.products')

@section('content')



<!-- Trigger/Open The Modal -->
        <!-- Featured Items -->
      <div class="items">
        <div class="shell">
          <h4>Products</h4>

          <div class="shop-by">
            {{$products['list']->links()}}  
          </div>
          <!-- Products -->
          <div class="products">
          @foreach($products['list'] as $product_list)
            <div class="product-frame" id="item{{$product_list->id}}">
              <div class="product">
                @foreach($products['image'] as $img)
                  @if($img->productId == $product_list->id)
                  <a title="View product" onclick="openModal('{{$product_list->id}}');" class="view-button" href="#item{{$product_list->id}}">view product</a>
                    <div class="img-holder">  
                        <a title="View product" href="#"><img src="{{ url('public/images/'.$img->productPicture)}}" alt="Images of agrishop" /></a>
                    </div> 
                  @endif
                @endforeach  
                <div class="img-bottom"></div>
                <div class="price-box">
                  <p>price</p>
                  <p class="price"><span class="dollar"></span><span style="font-size: 14px;">{{ $product_list->itemPrice }}</span><sup></sup></p>
                </div>
                <div class="product-entry">
                  <p class="model" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;">{{ $product_list->itemName }}</p>
                  <p class="model"><span>Item Left: {{ $product_list->quantity }}</span></p>
                  <p class="product-info" style="text-overflow: ellipsis;white-space: nowrap;overflow: hidden;">{{ $product_list->description }}</p>
                </div>
              </div>
            </div>
          @endforeach

            <div class="cl"></div>
          </div>
          <!-- END Products -->
        </div>
      </div>
      <!-- END Featured Items -->
      
<div >
  

</div>

@endsection