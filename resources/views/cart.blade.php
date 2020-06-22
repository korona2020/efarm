@extends('layouts.master')

@section('title')
	Cart
@endsection

@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('{{ asset('images/bg_1.jpg') }}');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Cart</span></p>
            <h1 class="mb-0 bread">My Cart</h1>
          </div>
        </div>
      </div>
    </div>

	@if($products->count() > 0)
    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Product name</th>
						        <th>Price</th>
						        <th>Quantity</th>
						        <th>Total</th>
						      </tr>
						    </thead>
						    <tbody>
							  @foreach($products as $product)
							  <tr class="text-center">
								  <td class="product-remove"><a href="{{route('product.removeFromCart',$product->rowId)}}"><span class="ion-ios-close"></span></a></td>

								  <td class="image-prod"><div class="img" style="background-image:url('{{ asset('images/'.$product->model->image) }}');"></div></td>

								  <td class="product-name">
									  <h3>{{ $product->name }}</h3>
									  <p>{{$product->model->description}}</p>
								  </td>

								    <td class="price">{{ $product->price }} LEKE</td>

								  <td class="quantity">
									  <div class="input-group mb-3">

										    <input type="text" data-id="{{$product->rowId}}" name="quantity" id="updateqty" class="quantity form-control input-number" value="{{ $product->qty }}"  min="1" max="100">

                                      </div>
								  </td>

								  <td class="total">{{ $product->price * $product->qty }} LEKE</td>
							  </tr><!-- END TR-->
							  @endforeach
						    </tbody>
						  </table>
					  </div>
    			</div>
    		</div>

    		<div class="row justify-content-end">
    			<!--<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Coupon Code</h3>
    					<p>Enter your coupon code if you have one</p>
  						<form action="#" class="info">
                          <div class="form-group">
                            <label for="">Coupon code</label>
                            <input type="text" class="form-control text-left px-3" placeholder="">
                          </div>
                        </form>
    				</div>
    				<p><a href="checkout.blade.php" class="btn btn-primary py-3 px-4">Apply Coupon</a></p>
    			</div>
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Estimate shipping and tax</h3>
    					<p>Enter your destination to get a shipping estimate</p>
  						<form action="#" class="info">
	              <div class="form-group">
	              	<label for="">Country</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">State/Province</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	              <div class="form-group">
	              	<label for="country">Zip/Postal Code</label>
	                <input type="text" class="form-control text-left px-3" placeholder="">
	              </div>
	            </form>
    				</div>
    				<p><a href="checkout.blade.php" class="btn btn-primary py-3 px-4">Estimate</a></p>
    			</div>-->
    			<div class="col-lg-4 mt-5 cart-wrap ftco-animate">
    				<div class="cart-total mb-3">
    					<h3>Cart Totals</h3>
    					<p class="d-flex">
    						<span>Subtotal</span>
    						<span>{{$subtotal}} LEKE</span>
    					</p>
    					<p class="d-flex">
    						<span>Delivery</span>
    						<span>0.00 LEKE</span>
    					</p>
						<p class="d-flex">
							<span>Tax</span>
							<span>0.00 LEKE</span>
						</p>
    					<hr>
    					<p class="d-flex total-price">
    						<span>Total</span>
    						<span>{{$subtotal}} LEKE</span>
    					</p>
    				</div>
    				<p>
					<form id="logout-form" action="" method="POST">

						<input type="hidden" name="id" value="">
						<button type="submit" class="btn btn-primary py-3 px-4">Proceed to Checkout</button>
					</form>

    			</div>
    		</div>

			</div>

		</section>
	@else


		<div class="hero-wrap hero-bread">
			<div class="container">
				<div class="row no-gutters slider-text align-items-center justify-content-center">
					<div class="col-md-9 ftco-animate text-center">
						<h1 class="mb-0">Your basket is empty!</h1>
						<p class="page-link"><span class="mr-2"><a href="{{ route('shop') }}">Shop here</a></span></p>
					</div>
				</div>
			</div>
		</div>
	@endif
    <!--<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
      <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
          <div class="col-md-6">
          	<h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
          	<span>Get e-mail updates about our latest shops and special offers</span>
          </div>
          <div class="col-md-6 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>-->
	@include('partials.footer')

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

@endsection

@section('scripts')
    <script src="{{asset('js/app.js')}}"></script>
<script>
    $(document).ready(function()
    {
        const className = document.querySelectorAll('.quantity')

        Array.from(className).forEach(function(element){
            element.addEventListener('change',function(){

                const id = element.getAttribute('data-id')

                axios.patch('/cart/${id}', {
                    quantity: this.value,
                    })
                    .then(function (response) {
                        console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            })
        })
    });
</script>
@endsection
