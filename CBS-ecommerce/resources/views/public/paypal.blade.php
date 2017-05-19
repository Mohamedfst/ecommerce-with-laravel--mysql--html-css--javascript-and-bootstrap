<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_cart">
<input type="hidden" name="upload" value="1">
<input type="hidden" name="business" value="seller@dezignerfotos.com">

<?php $count =0;?>
 @foreach($contents as $key => $item)
   <?php $count++; ?>

<input type="hidden" name="item_name_{{$count}}" value="{{ $item->name }}">
<input type="hidden" name="item_number_{{$count}}" value="{{ $item->sku}}">
<input type="hidden" name="quantity_{{$count}}" value="{{$item->quantities[$key]}}">
<input type="hidden" name="amount_{{$count}}" value="{{ number_format($item->getFinalPrice(), 2) }}">
<input type="hidden" name="shipping_{{$count}}" value="0.30"> 
<input type="hidden" name="tax_{{$count}}" value="0.12">

<!-- after payment -->
 <input type="hidden" name="return" id="return" value="http://localhost/order-confirmation" />
<!-- Cancel payment -->
  <input type="hidden" name="cancel_return" id="cancel_return" value="http://localhost:8000/cart" />
  <br>

@endforeach
<input name="submit" id="paypalbtn" type="image" src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/checkout-logo-medium.png"  value="PayPal" formaction="https://www.paypal.com/cgi-bin/webscr">

