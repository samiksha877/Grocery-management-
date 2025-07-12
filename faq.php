<?php include 'header.php'; ?>
<?php include 'dbcon.php'; ?>

<?php
// Insert default FAQs only if the table is empty
$check = mysqli_query($conn, "SELECT COUNT(*) as total FROM faq");
$count = mysqli_fetch_assoc($check)['total'];

if ($count == 0) {
    $insertQuery = "INSERT INTO faq (question, answer) VALUES 
        ('How do I place an order?', 'Browse products, add to cart, and proceed to checkout.'),
        ('What payment methods are supported?', 'We support UPI, cards, and cash on delivery.'),
        ('How can I track my order?', 'Visit your dashboard and go to \"My Orders\".'),
        ('Can I return an item?', 'Yes, you can request a return within 7 days.')";

    if (mysqli_query($conn, $insertQuery)) {
        echo "<p style='color: green; text-align: center;'>FAQs inserted successfully.</p>";
    } else {
        echo "<p style='color: red; text-align: center;'>Error inserting FAQs: " . mysqli_error($conn) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FAQs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #ffffff;
        }

        .faq-container {
            width: 900px;
            margin: 50px 0 50px 300px; /* Push to left edge */
            padding: 20px;
            background: #f1f1f1;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }

        .faq-container h2 {
            text-align: left;
            font-size: 28px;
            margin-bottom: 30px;
            color: #333;
        }

        .faq-item {
            background: white;
            padding: 15px 20px;
            margin-bottom: 15px;
            border-left: 4px solid #28a745;
            border-radius: 6px;
        }

        .faq-item h4 {
            margin-bottom: 10px;
            font-size: 18px;
            color: #222;
        }

        .faq-item p {
            font-size: 15px;
            color: #555;
        }

        @media (max-width: 600px) {
            .faq-container {
                width: auto;
                margin: 20px 10px;
                padding: 10px;
            }

            .faq-container h2 {
                font-size: 22px;
            }

            .faq-item h4 {
                font-size: 16px;
            }

            .faq-item p {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="faq-container">
    <h2>Frequently Asked Questions</h2>

    <?php
    $query = "SELECT * FROM faq ORDER BY id ASC";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="faq-item">';
            echo '<h4>Q: ' . htmlspecialchars($row['question']) . '</h4>';
            echo '<p>A: ' . htmlspecialchars($row['answer']) . '</p>';
            echo '</div>';
        }
    } else {
        echo "<p style='text-align:left;'>No FAQs found.</p>";
    }
    ?>
</div>

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

