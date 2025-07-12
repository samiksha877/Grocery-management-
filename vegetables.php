<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Grocery Store</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome for rupee and icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <style>
    /* Base reset and fonts */
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f7f7f7;
      color: #333;
    }

    img.img-responsive {
      width: 100%;
      height: auto;
      border-radius: 8px;
      object-fit: cover;
    }

    h3, h4, p {
      margin: 10px 0;
    }

    /* Banner */
    .w3l_banner_nav_right_banner5 {
      background: url('images/banner-bg.jpg') no-repeat center;
      background-size: cover;
      padding: 60px 30px;
      text-align: center;
      color: #fff;
      border-radius: 8px;
      margin-bottom: 30px;
    }

    .w3l_banner_nav_right_banner5 h3 {
      font-size: 2.5rem;
      font-weight: bold;
    }

    /* Blink animation */
    .blink_me {
      animation: blinker 1s linear infinite;
    }

    @keyframes blinker {
      50% { opacity: 0; }
    }

    /* Product Grid */
    .w3ls_w3l_banner_nav_right_grid {
      padding: 20px;
      background: #fff;
      border-radius: 8px;
      margin-bottom: 30px;
    }

    .w3l_fruit {
      font-size: 2rem;
      border-bottom: 2px solid #4CAF50;
      padding-bottom: 10px;
      margin-bottom: 20px;
      color: #4CAF50;
    }

    /* Product Card */
    .snipcart-item.block {
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 15px;
      transition: all 0.3s ease;
      background-color: #fff;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    .snipcart-item.block:hover {
      transform: scale(1.03);
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .snipcart-thumb p {
      font-weight: bold;
      font-size: 1.1rem;
      color: #222;
    }

    .snipcart-thumb h4 {
      color: #4CAF50;
      font-size: 1.2rem;
    }

    .snipcart-thumb h4 span del {
      color: #999;
      margin-left: 10px;
      font-size: 0.95rem;
    }

    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px 14px;
      font-size: 0.95rem;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      cursor: pointer;
      width: 100%;
      margin-top: 10px;
    }

    .button:hover {
      background-color: #45a049;
    }

    /* Grid columns */
    .col-md-3,
    .col-md-4 {
      float: left;
      padding: 10px;
      box-sizing: border-box;
    }

    .col-md-3 {
      width: 25%;
    }

    .col-md-4 {
      width: 33.33%;
    }

    .clearfix::after {
      content: "";
      display: table;
      clear: both;
    }

    /* Image hover effect */
    .view {
      position: relative;
      overflow: hidden;
      cursor: pointer;
      border-radius: 8px;
    }

    .mask {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background: rgba(76, 175, 80, 0.8);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: opacity 0.5s ease;
      border-radius: 8px;
    }

    .view:hover .mask {
      opacity: 1;
    }
  </style>
</head>
<!-- for-mobile-apps -->
<body>
		<?php include 'header.php'?>
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner5">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			<div class="w3l_banner_nav_right_banner3_btm">
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="images/18.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p></p>
						</div>
					</div>
					<h4> Vegetables</h4>
					
						
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="images/VAGITABLE.jpg" alt=" " class="img-responsive" height="266" width="400px" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p></p>
						</div>
					</div>
					<h4>Vegetables</h4>
					
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="images/20.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p></p>
						</div>
					</div>
					<h4>Vegetables</h4>
					
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_veg">
				<h3 class="w3l_fruit"> Vegetables</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
									<a href="#"><img src="images/o3jpg.jpg" alt=" " class="img-responsive" height="140px"  width="140px"/></a>
											<p>onion (1 kg)</p>
											<h4><i class="fa fa-rupee"> 40.00 </i><span><i class="fa fa-rupee"></i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Onion" />
													<input type="hidden" name="amount" value="45.00" />
													
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/30.png" alt=" " class="img-responsive"  /></a>
											<p>fresh cauliflower (1kg)</p>
											<h4><i class="fa fa-rupee"> 60.00 </i><span><i class="fa fa-rupee"></i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="fresh cauliflower" />
													<input type="hidden" name="amount" value="80.00" />
												
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php"><img src="images/31.png" alt=" " class="img-responsive" /></a>
											<p>fresh brinjal bharta (1 kg)</p>
											<h4><i class="fa fa-rupee"> 20.00 </i><span><i class="fa fa-rupee"></i></span></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="fresh brinjal bharta" />
													<input type="hidden" name="amount" value="30.00" />
													
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php"><img src="images/32.png" alt=" " class="img-responsive" /></a>
											<p>fresh sweet lime (500 gm)</p>
											<h4><i class="fa fa-rupee"> 10.00 </i><span><i class="fa fa-rupee"> </i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="fresh sweet lime" />
													<input type="hidden" name="amount" value="15.00" />
												
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php"><img src="images/poteto.jpg" alt=" " class="img-responsive" /></a>
											<p>potato(1kg)</p>
											<h4><i class="fa fa-rupee"> 30.00 </i><span><i class="fa fa-rupee"></i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="potato" />
													<input type="hidden" name="amount" value="40.00" />
											
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/m.jpg" alt=" " class="img-responsive" height="140px" width="140px"/></a>
											<p>Laal Mirchi (500 g)</p>
											<h4><i class="fa fa-rupee"> 30.00 </i><span><i class="fa fa-rupee"> </i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Laal Mirchi" />
													<input type="hidden" name="amount" value="40.00" />
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/lf.jpg" alt=" " class="img-responsive"  height="140px" width="140px"/></a>
											<p>bhindi (1 kg)</p>
											<h4><i class="fa fa-rupee"> 30.00 </i><span><i class="fa fa-rupee"></i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="bhindi" />
													<input type="hidden" name="amount" value="40.00" />
											
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php"><img src="images/t.jpg" alt=" " class="img-responsive" /></a>
											<p>Tamatar(1 kg)</p>
											<h4><i class="fa fa-rupee"> 80.00 </i><span><i class="fa fa-rupee"> </i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Tamatar" />
													<input type="hidden" name="amount" value="100.00" />
													
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="w3ls_w3l_banner_nav_right_grid1 w3ls_w3l_banner_nav_right_grid1_veg">
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asdfdfd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
															</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/cobage.jpg" alt=" " class="img-responsive" /></a>
											<p> Cabbage(1 kg)</p>
											<h4><i class="fa fa-rupee"> 50.00 </i><span><i class="fa fa-rupee"> </i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="cabbage" />
													<input type="hidden" name="amount" value="60.00" />
												
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
															</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/pv.jpg" alt=" " class="img-responsive"  height="140px" width="140px"/></a>
											<p> Peas(1 kg)</p>
											<h4><i class="fa fa-rupee"> 60.00 </i><span><i class="fa fa-rupee"> </i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="peas" />
													<input type="hidden" name="amount" value="70.00" />
													
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left w3ls_w3l_banner_left_asd">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
							<a href="single.php"><img src="images/spring.jpg" alt=" " class="img-responsive" height="140px"  width="140px"/></a>
											<p> Spring Onion (500gm)</p>
											<h4><i class="fa fa-rupee"> 20.00 </i><span><i class="fa fa-rupee"></i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Spring Onion" />
													<input type="hidden" name="amount" value="30.00" />
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
															</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="#"><img src="images/sm.jpg" alt=" " class="img-responsive" height="140px" width="140px" /></a>
											<p>Shimla Mirchi (250 gm)</p>
											<h4><i class="fa fa-rupee"> 20.00 </i><span><i class="fa fa-rupee"> </i></h4>
										</div>
										<div class="snipcart-details">
											<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="Shimla Mirchi" />
													<input type="hidden" name="amount" value="30.00" />
													
													<input type="hidden" name="currency_code" value="INR" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<?php include 'footer.php'?>
</body>
</html>