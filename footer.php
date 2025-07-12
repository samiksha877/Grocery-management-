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
                <li><a href="https://www.facebook.com/ImagineScript/" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://x.com/imaginescripts" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="https://in.linkedin.com/company/imaginescript" class="linkedin"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="https://www.imaginescript.com/" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>

                    <ul class="phone_email">
                        <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+919979331605">(+91) 9979331605</a></li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:hello@imaginescript.com">hello@imaginescript.com</a></li>
				    </ul>
				</ul>
			</div>

			<div class="clearfix"></div>
			<div class="wthree_footer_copy">
				<p>© <?=date('Y')?> GroceryPoint. All rights reserved | Design by <a href="http://w3layouts.com/">Imaginescript Pvt.Ltd.</a></p>
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

