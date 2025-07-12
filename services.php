<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Services :: w3layouts</title>
<body>
<?php
require 'dbcon.php';
require 'header.php';
?>
		<div class="w3l_banner_nav_right">
<!-- services -->
		<div class="services">
			<h3>Services</h3>
			<div class="w3ls_service_grids">
				<div class="col-md-5 w3ls_service_grid_left">
					<h4>Core Services Provided by the Grocery Store System</h4>
					<p>The Grocery Management System provides important services like managing stock, handling customer and supplier details, processing orders and bills, and showing sales reports.
					 It also helps with online shopping, discounts, and sending alerts to keep everything running smoothly.</p>
				</div>
				<div class="col-md-7 w3ls_service_grid_right">
					<div class="col-md-4 w3ls_service_grid_right_1">
						<img src="images/18.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-4 w3ls_service_grid_right_1">
						<img src="images/19.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="col-md-4 w3ls_service_grid_right_1">
						<img src="images/20.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_service_grids1">
				<div class="col-md-6 w3ls_service_grids1_left">
					<img src="images/4.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3ls_service_grids1_right">
					<ul>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Inventory Management</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Customer Management</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Order and Billing System

					</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Supplier and Purchase Management

</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Sales and Reporting Dashboard</li>
						<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Online Storefront & Delivery Integration</li>
					</ul>
					<a href="single.html">Shop Now</a>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //services -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
<!-- services-bottom -->
	<div class="services-bottom">
		<div class="container">
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
				<p class="counter">89,147</p> 
				<h3>Followers</h3>
			</div>
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-piggy-bank" aria-hidden="true"></i>
				<p class="counter">54,598</p> 
				<h3>Savings</h3>
			</div>
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-export" aria-hidden="true"></i>
				<p class="counter">83,983</p> 
				<h3>Support</h3>
			</div>
			<div class="col-md-3 about_counter_left">
				<i class="glyphicon glyphicon-bullhorn" aria-hidden="true"></i>
				<p class="counter">45,894</p> 
				<h3>Popularity</h3>
			</div>
			<div class="clearfix"> </div>
			<!-- Stats-Number-Scroller-Animation-JavaScript -->
				<script src="js/waypoints.min.js"></script> 
				<script src="js/counterup.min.js"></script> 
				<script>
					jQuery(document).ready(function( $ ) {
						$('.counter').counterUp({
							delay: 10,
							time: 1000
						});
					});
				</script>
			<!-- //Stats-Number-Scroller-Animation-JavaScript -->

		</div>
	</div>
<!-- //services-bottom -->

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<!-- //here ends scrolling icon -->
<script src="js/minicart.js"></script>
<script>
		paypal.minicart.render();

		paypal.minicart.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});

	</script>
</body>
</html>

    <!-- footer -->
     
	<div class="footer">
		<div class="container">
			<div class="col-md-4 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
				    <li><a href="events.php">Events</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="products.php">Best Deals</a></li>
                    <li><a href="services.php">Services</a></li>

				</ul>
			</div>






			<div class="col-md-4 w3_footer_grid">
				<h3>Others</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="products.php">Grocery</a></li>
					<li><a href="household.php">Households</a></li>
                    <li><a href="faq.php">FAQ</a></li>
                    <li><a href="privacy.php">privacy policy</a></li>
                    <li><a href="TC.php">terms of use</a></li>

				</ul>
			</div>

            <div class="agile_footer_grids">
                <div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
                    <div class="w3_footer_grid_bottom">
                        <h4>100% secure payments</h4>
                        <img src="images/card.png" alt=" " class="img-responsive" />
                    </div>
                </div>
            </div>


			<div class="col-md-4 w3_footer_grid">
				<h3>Contact Us</h3>
				<ul class="w3_footer_grid_list1">
                    <ul class="agileits_social_icons">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i> </a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i> </a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i> </a></li>
                        <li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				    </ul>
                    <ul class="phone_email">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+919979331605">(+91) 9979331605</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:hello@imaginescript.com">hello@imaginescript.com</a></li>
				    </ul>
				</ul>
			</div>




			<div class="clearfix"></div>
			<div class="wthree_footer_copy">
				<p>© <?=date('Y')?> Grocery Store. All rights reserved | Design by <a href="http://w3layouts.com/">Imaginescript Pvt.Ltd.</a></p>
			</div>
		</div>
</div>
<!-- //footer -->

    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>

    <!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
    <!-- //script-for sticky-nav -->

    <!-- start-smoth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){		
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
    <!-- start-smoth-scrolling -->

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <script>
    $(document).ready(function(){
        $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');        
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');       
            }
        );
    });
    </script>

    <!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
    <!-- //here ends scrolling icon -->

    <script src="js/minicart.js?a=<?php echo time(); ?>"></script>
    <script>
            paypal.minicart.render();

            paypal.minicart.cart.on('add', function (idx, product, isExisting) {
				/*var txt = "";
                for (i in product) {
                    txt += product[i] + " ";
                };
                alert(txt);*/
            });
            paypal.minicart.cart.on('checkout', function (evt) {
                var items = this.items(),
                    len = items.length,
                    total = 0,
                    i;

                // Count the number of each item in the cart
                for (i = 0; i < len; i++) {
                    total += items[i].get('quantity');
                }

                if (total < 1) {
                    alert('The minimum order quantity is 1. Please add something to your shopping cart before checking out');
                    evt.preventDefault();
                }
            });

        </script>

