<!DOCTYPE html>
<html lang="en">
  <head>
    <title>RITZ CAFFEE</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../../landing/images/logo.png" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

    <link rel="stylesheet" href="../../../landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../../../landing/css/animate.css">
    
    <link rel="stylesheet" href="../../../landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../landing/css/magnific-popup.css">

    <link rel="stylesheet" href="../../../landing/css/aos.css">

    <link rel="stylesheet" href="../../../landing/css/ionicons.min.css">

    <link rel="stylesheet" href="../../../landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../landing/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../../../landing/css/flaticon.css">
    <link rel="stylesheet" href="../../../landing/css/icomoon.css">
    <link rel="stylesheet" href="../../../landing/css/style.css">
  </head>
  <body>
  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><small>RITz</small>Caffee</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="{{route('page.home')}}" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="{{route('page.menu')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{route('page.services')}}" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="{{route('page.about')}}" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('page.shop')}}">Shop</a>
                <a class="dropdown-item  active" href="{{route('page.product-single')}}">Single Product</a>
                <a class="dropdown-item" href="{{route('page.cart')}}">Cart</a>
                <a class="dropdown-item" href="{{route('page.checkout')}}">Checkout</a>
              </div>
			  </li>
	          <li class="nav-item"><a href="{{route('page.contact')}}" class="nav-link">Contact</a></li>
	          <li class="nav-item cart"><a href="{{route('page.cart')}}" class="nav-link"><span class="icon icon-shopping_cart"></span><span class="bag d-flex justify-content-center align-items-center"><small>2</small></span></a></li>
	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">

      <div class="slider-item" style="background-image: url(../../../landing/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Product Detail</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('page.home')}}">Home</a></span> <span>Product Detail</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-6 mb-5 ftco-animate">
    				<a href="images/menu-2.jpg" class="image-popup"><img src="../../../landing/images/menu-2.jpg" class="img-fluid" alt="Colorlib Template"></a>
    			</div>
    			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
    				<h3>Creamy Latte Coffee</h3>
    				<p class="price"><span>₱79.00</span></p>
    				<p>In the heart of Naga City, where the sun kisses the rolling hills and the sea whispers stories, there lies a little haven 𝘙𝘪𝘵𝘻 𝘊𝘢𝘧𝘧𝘦. Here, each cup is a gentle poem, brewed slowly with love, where the aroma of roasted beans dances with the warm Cebuano breeze. It’s a place where time softens, conversations bloom, and strangers become friends over the quiet hum of shared moments
						</p>
						<div class="row mt-4">
							<div class="col-md-6">
								<div class="form-group d-flex">
		              <div class="select-wrap">
	                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                  <select name="" id="" class="form-control">
	                  	<option value="">Small</option>
	                    <option value="">Medium</option>
	                    <option value="">Large</option>
	                    <option value="">Extra Large</option>
	                  </select>
	                </div>
		            </div>
							</div>
							<div class="w-100"></div>
							<div class="input-group col-md-6 d-flex mb-3">
	             	<span class="input-group-btn mr-2">
	                	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
	                   <i class="icon-minus"></i>
	                	</button>
	            		</span>
	             	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
	             	<span class="input-group-btn ml-2">
	                	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
	                     <i class="icon-plus"></i>
	                 </button>
	             	</span>
	          	</div>
          	</div>
          	<button type="button" class="btn btn-primary py-3 px-5" data-bs-toggle="modal" data-bs-target="#addToCartModal">
				Add to Cart
			  </button>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Related products</h2>
            <p>At Ritz Caffee, beyond the noise of everyday life, you’ll find a place where rich brews and peaceful moments come together a cozy escape inspired by stories and flavors from around the world.</p>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(../../../landing/images/menu-1.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Coffee Capuccino</a></h3>
    						<p>A cappuccino is a rich, creamy coffee drink topped with frothy steamed milk.</p>
    						<p class="price"><span>₱79.00</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(../../../landing/images/menu-2.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Mocha</a></h3>
    						<p>Mocha is a chocolate-flavored coffee delight blending espresso and steamed milk.</p>
    						<p class="price"><span>₱79.00</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(../../../landing/images/menu-3.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Expresso</a></h3>
    						<p>Espresso is a strong, concentrated shot of coffee bursting with bold flavor.</p>
    						<p class="price"><span>₱79.00</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        	<div class="col-md-3">
        		<div class="menu-entry">
    					<a href="#" class="img" style="background-image: url(../../../landing/images/menu-4.jpg);"></a>
    					<div class="text text-center pt-4">
    						<h3><a href="#">Americano</a></h3>
    						<p>Americano is a smooth, diluted espresso with hot water for a lighter taste.</p>
    						<p class="price"><span>₱79.00</span></p>
    						<p><a href="#" class="btn btn-primary btn-outline-primary">Add to Cart</a></p>
    					</div>
    				</div>
        	</div>
        </div>
    	</div>
    </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Founded with a love for locally-sourced beans and a passion for crafting the perfect cup, we aim to bring people together through the simple joy of coffee.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/reytzzz"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/reytzzz/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Services</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Cooked</a></li>
                <li><a href="#" class="py-2 d-block">Deliver</a></li>
                <li><a href="#" class="py-2 d-block">Quality Foods</a></li>
                <li><a href="#" class="py-2 d-block">Mixed</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">826 Bonifacio St. West Poblacion, Ciy of Naga, Cebu</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">09562784659</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">ritzleyfernandez@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  <div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <h5 class="modal-title" id="addToCartModalLabel">Add to Cart</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
		</div>
		<div class="modal-body">
		  <p>Do you want to add this item to your cart?</p>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
		  <button type="button" class="btn btn-primary">Add to Cart</button>
		</div>
	  </div>
	</div>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../../../landing/js/jquery.min.js"></script>
  <script src="../../../landing/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../landing/js/popper.min.js"></script>
  <script src="../../../landing/js/bootstrap.min.js"></script>
  <script src="../../../landing/js/jquery.easing.1.3.js"></script>
  <script src="../../../landing/js/jquery.waypoints.min.js"></script>
  <script src="../../../landing/js/jquery.stellar.min.js"></script>
  <script src="../../../landing/js/owl.carousel.min.js"></script>
  <script src="../../../landing/js/jquery.magnific-popup.min.js"></script>
  <script src="../../../landing/js/aos.js"></script>
  <script src="../../../landing/js/jquery.animateNumber.min.js"></script>
  <script src="../../../landing/js/bootstrap-datepicker.js"></script>
  <script src="../../../landing/js/jquery.timepicker.min.js"></script>
  <script src="../../../landing/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../../../landing/js/google-map.js"></script>
  <script src="../../../landing/js/main.js"></script>

  <script>
		$(document).ready(function(){

		var quantitiy=0;
		   $('.quantity-right-plus').click(function(e){
		        
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		            
		            $('#quantity').val(quantity + 1);

		          
		            // Increment
		        
		    });

		     $('.quantity-left-minus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        var quantity = parseInt($('#quantity').val());
		        
		        // If is not undefined
		      
		            // Increment
		            if(quantity>0){
		            $('#quantity').val(quantity - 1);
		            }
		    });
		    
		});
	</script>

    
  </body>
</html>