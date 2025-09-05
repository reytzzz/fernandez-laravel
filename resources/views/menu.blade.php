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
	          <li class="nav-item active"><a href="{{route('page.menu')}}" class="nav-link">Menu</a></li>
	          <li class="nav-item"><a href="{{route('page.services')}}" class="nav-link">Services</a></li>
	          <li class="nav-item"><a href="{{route('page.about')}}" class="nav-link">About</a></li>
	          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="room.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
                <a class="dropdown-item" href="{{route('page.shop')}}">Shop</a>
                <a class="dropdown-item" href="{{route('page.product-single')}}">Single Product</a>
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
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="{{route('page.home')}}">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>

     <section class="ftco-intro">
    	<div class="container-wrap">
    		<div class="wrap d-md-flex align-items-xl-end">
	    		<div class="info">
	    			<div class="row no-gutters">
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-phone"></span></div>
	    					<div class="text">
	    						<h3>09562784659</h3>
	    						<p>Ritz Caffee</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-my_location"></span></div>
	    					<div class="text">
	    						<h3>826 Bonifacio St.</h3>
	    						<p>West Poblacion, City of Naga, Cebu</p>
	    					</div>
	    				</div>
	    				<div class="col-md-4 d-flex ftco-animate">
	    					<div class="icon"><span class="icon-clock-o"></span></div>
	    					<div class="text">
	    						<h3>Open Monday-Friday</h3>
	    						<p>8:00am - 9:00pm</p>
	    					</div>
	    				</div>
	    			</div>
	    		</div>
	    		<div class="book p-4">
	    			<h3>Book a Table</h3>
	    			<form action="#" class="appointment-form">
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="First Name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Last Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea name="" id="" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
		            </div>
	    				</div>
	    			</form>
	    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Starter</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Cornish - Mackerel</span></h3>
	        				<span class="price">₱149.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>pan-seared to perfection, rich in flavor and bursting with coastal freshness.</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Steak</span></h3>
	        				<span class="price">₱149.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Juicy and tender, our roasted steak is seared to perfection with bold, smoky flavor.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Seasonal Soup</span></h3>
	        				<span class="price">₱99.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Warm up with our seasonal soup fresh, hearty, and crafted from local ingredients.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chicken Curry</span></h3>
	        				<span class="price">₱199.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Rich and aromatic, our chicken curry blends spices and creaminess in every bite.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6 mb-5 pb-3">
        		<h3 class="mb-5 heading-pricing ftco-animate">Main Dish</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-5.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Sea Trout</span></h3>
	        				<span class="price">₱199.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Delicately cooked sea trout with a crisp skin and melt-in-your-mouth freshness.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-6.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Roasted Beef</span></h3>
	        				<span class="price">₱289.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Slow-roasted beef, deeply flavorful and perfectly seasoned for a comforting classic.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-7.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Butter Fried Chicken</span></h3>
	        				<span class="price">₱149.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Crispy outside, buttery tender inside our fried chicken is pure comfort food.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dish-8.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chiken Filet</span></h3>
	        				<span class="price">₱149.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Lightly grilled chicken filet, juicy and lean with a subtle blend of herbs.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Desserts</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dessert-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Chow Nai Sundae</span></h3>
	        				<span class="price">₱149.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A delightful twist of creamy ice cream, rich toppings, and sweet Asian-inspired flair.</p>
	        			</div>
        			</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dessert-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Ultimate Coconut Cake</span></h3>
	        				<span class="price">₱199.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Moist and fluffy with layers of coconut goodness — a tropical dream come true.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dessert-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Bill-E's Chocolate Belly</span></h3>
	        				<span class="price">₱59.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Decadent and indulgent, this chocolate-packed treat melts right into happiness.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/dessert-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Baked Hawaii</span></h3>
	        				<span class="price">₱249.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>A fiery showstopper golden meringue, tropical fruit, and ice cream in perfect harmony.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>

        	<div class="col-md-6">
        		<h3 class="mb-5 heading-pricing ftco-animate">Drinks</h3>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/menu-4.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Americano</span></h3>
	        				<span class="price">₱79.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Smooth and bold, the Americano delivers pure coffee strength in every sip.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/menu-3.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Capuccino</span></h3>
	        				<span class="price">$₱79.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Creamy foam meets rich espresso — a cappuccino classic done just right.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/menu-2.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Mocha</span></h3>
	        				<span class="price">₱79.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p> sweet fusion of coffee and chocolate, mocha brings comfort in every cup.</p>
	        			</div>
	        		</div>
        		</div>
        		<div class="pricing-entry d-flex ftco-animate">
        			<div class="img" style="background-image: url(../../../landing/images/menu-1.jpg);"></div>
        			<div class="desc pl-3">
	        			<div class="d-flex text align-items-center">
	        				<h3><span>Caramel</span></h3>
	        				<span class="price">₱79.00</span>
	        			</div>
	        			<div class="d-block">
	        				<p>Velvety espresso swirled with buttery caramel for a sweet, satisfying sip.</p>
	        			</div>
	        		</div>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-menu">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>At Ritz Caffee, beyond the noise of everyday life, you’ll find a place where rich brews and peaceful moments come together a cozy escape inspired by stories and flavors from around the world.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    		<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
		              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Main Dish</a>

		              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Drinks</a>

		              <a class="nav-link" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">Desserts</a>
		            </div>
		          </div>
		          <div class="col-md-12 d-flex align-items-center">
		            
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">

		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/Braised\ Chicken\ Legs\ With\ Grapes\ and\ Fennel.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Braised Chicken Legs</a></h3>
		              					<p>Tender braised chicken legs simmered with sweet grapes and aromatic fennel for a rich, savory-sweet delight.</p>
		              					<p class="price"><span>₱299.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/Cedar-Plank\ Salmon.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Cedar Plank Salmon</a></h3>
		              					<p>Perfectly grilled with a smoky aroma and rich, woodsy flavor in every bite.</p>
		              					<p class="price"><span>₱299.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/Seared\ Scallops\ With\ Brown\ Butter\ and\ Lemon\ Pan\ Sauce.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Seared Scallops With Brown Butter</a></h3>
		              					<p>Seared Scallops with Brown Butter, golden-crisp and drizzled with nutty, rich goodness for a melt-in-your-mouth finish..</p>
		              					<p class="price"><span>₱299.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/drink-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Lemonade Juice</a></h3>
		              					<p>Bright and tangy, lemon juice delivers a crisp burst of citrus freshness.</p>
		              					<p class="price"><span>₱99.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/drink-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Pineapple Juice</a></h3>
		              					<p>Sweet and tropical, pineapple juice brings a sunny splash of island flavor.</p>
		              					<p class="price"><span>₱99.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/drink-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Soda Drinks</a></h3>
		              					<p>Light and bubbly, soda drinks add a fizzy kick to any moment.</p>
		              					<p class="price"><span>₱99.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>

		              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
		                <div class="row">
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/dessert-1.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Hot Cake Honey</a></h3>
		              					<p>Warm, fluffy hot cake drizzled with golden honey for a comforting sweet treat.</p>
		              					<p class="price"><span>₱99.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/dessert-2.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Carrot Cake</a></h3>
		              					<p>Moist and spiced, carrot cake delights with every bite of creamy frosting and tender crumb.</p>
		              					<p class="price"><span>₱99.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              		<div class="col-md-4 text-center">
		              			<div class="menu-wrap">
		              				<a href="#" class="menu-img img mb-4" style="background-image: url(../../../landing/images/dessert-3.jpg);"></a>
		              				<div class="text">
		              					<h3><a href="#">Cheese Cake</a></h3>
		              					<p>Smooth and rich, cheesecake melts on the tongue with a perfect balance of sweet and tangy.</p>
		              					<p class="price"><span>₱99.00</span></p>
		              					<p><a href="#" class="btn btn-primary btn-outline-primary">Add to cart</a></p>
		              				</div>
		              			</div>
		              		</div>
		              	</div>
		              </div>
		            </div>
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
    
  </body>
</html>