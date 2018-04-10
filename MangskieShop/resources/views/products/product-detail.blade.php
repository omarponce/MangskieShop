
  <div><span class="close" onclick="closeModal();">X</span></div>

    <div style="width:390px;height: 250px;background: #111111;padding: 5px;">
      <img src="{{url('public/images/'.$image->productPicture)}}" style="width: 100%;height: 250px;box-shadow: 2px 2px 2px #111111;" id="image">
    </div>

    <br/>
    <div style="width: 100%;margin-left:5%; ">
      <h3 style="color: #f6c80e;font-size: 20px;word-break: break-all;" id="itemName">{{$product->itemName}}</h3>
      <br/>
      <p style="color: #ff7200;line-height: 20px;">Item left: <span id="itemLeft">{{$product->quantity}}</span></p>
      <div>
        <p style="line-height: 20px;">Description:</p>
        <p id="description" style="word-break: break-all;">{{$product->description}}</p>
      </div>

      <h3 style="line-height: 40px;">Price: <span id="price">$ {{$product->itemPrice}}</span></h3>


      <div id="cart-button" style="clear:both;">
        @if($status == "added")
          <button type="button"  class="add-to-cart" onclick="addToCart('{{$product->id}}');" href="" disabled>Already added.</button>
        @else
        <button type="button"  class="add-to-cart" onclick="addToCart('{{$product->id}}');" href="">Add to cart</button>

        @endif
      </div>

      <div style="clear: both;"></div>
    </div>
    <div>
      <br/>
      <br/>
    </div>