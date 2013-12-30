<?php /* Template Name: Webinars w/ Sidebar */ ?>

<?php get_header(); ?>
<div class="bannerContainerSub">
	<div class="bigBannerSub"></div>
</div>

<div class="container_12 content">
	<div id="content" class="content grid_9">
		<div id="content_wrap">
		<?php if (have_posts()) : while (have_posts()) : the_post(); the_title('<h1>', '</h1>'); the_content(); endwhile; endif; ?>
		<?php
			if(current_user_can('dev_access')) { //Restrict Access to this development portion until it's complete.
			echo ('<strong>The following content is only available to Administrators. Wordpress has detected that you are logged in as an Administrator.</strong>');
		?>
			<div class="errorBox"></div>
			<div id="webinar-list" class="page">
			<style>
				html,body {
    				height:100%;
				}
				#content {
					float:none;
				}
				#webinars li {list-style-type:none; display:inline-block; width:33%;}
				li.webinar-price {display:none !important;}
				.hidden-label {
					display: none;
				}
				.page { display: none;} /* Intially hide all pages until js controller is loaded */
  				.vjs-default-skin { color: #0092ff; }
 				.vjs-default-skin .vjs-play-progress,
 				.vjs-default-skin .vjs-volume-level { background-color: #ffd900 }
 				.vjs-default-skin .vjs-control-bar,
 				.vjs-default-skin .vjs-big-play-button { background: rgba(0,56,64,0.63) }
 				.vjs-default-skin .vjs-slider { background: rgba(0,56,64,0.21) }
 				.vjs-default-skin .vjs-control-bar { font-size: 200% }
				.cartBtn {
					-moz-box-shadow:inset 0px 1px 0px 0px #cf866c;
					-webkit-box-shadow:inset 0px 1px 0px 0px #cf866c;
					box-shadow:inset 0px 1px 0px 0px #cf866c;
					background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #d0451b), color-stop(1, #bc3315));
					background:-moz-linear-gradient(top, #d0451b 5%, #bc3315 100%);
					background:-webkit-linear-gradient(top, #d0451b 5%, #bc3315 100%);
					background:-o-linear-gradient(top, #d0451b 5%, #bc3315 100%);
					background:-ms-linear-gradient(top, #d0451b 5%, #bc3315 100%);
					background:linear-gradient(to bottom, #d0451b 5%, #bc3315 100%);
					filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#d0451b', endColorstr='#bc3315',GradientType=0);
					background-color:#d0451b;
					-moz-border-radius:20px;
					-webkit-border-radius:20px;
					border-radius:20px;
					border:1px solid #942911;
					display:inline-block;
					cursor:pointer;
					color:#ffffff;
					font-family:Trebuchet MS;
					font-size:14px;
					font-weight:bold;
					padding:7px 14px;
					text-decoration:none;
					text-shadow:0px 1px 0px #854629;
				}
				.cartBtn:hover {
					background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #bc3315), color-stop(1, #d0451b));
					background:-moz-linear-gradient(top, #bc3315 5%, #d0451b 100%);
					background:-webkit-linear-gradient(top, #bc3315 5%, #d0451b 100%);
					background:-o-linear-gradient(top, #bc3315 5%, #d0451b 100%);
					background:-ms-linear-gradient(top, #bc3315 5%, #d0451b 100%);
					background:linear-gradient(to bottom, #bc3315 5%, #d0451b 100%);
					filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#bc3315', endColorstr='#d0451b',GradientType=0);
					background-color:#bc3315;
				}
				.cartBtn:active {
					top:1px;
				}
 				.errorBox {
 					display: none;
 					border: 1px;
 					border-color: red;
 					background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIj8+PHN2ZyB3aWR0aD0iMzEyIiBoZWlnaHQ9IjMyMCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KIDx0aXRsZT53YXJuaW5nIHNpZ248L3RpdGxlPgoKIDxtZXRhZGF0YSBpZD0ibWV0YWRhdGE3Ij5pbWFnZS9zdmcreG1sPC9tZXRhZGF0YT4KIDxnPgogIDx0aXRsZT5MYXllciAxPC90aXRsZT4KICA8cGF0aCBpZD0icGF0aDMxNjIiIGQ9Im0xNDcuMTYwMDA0LDQxLjM1NDU5OWMtMjMuMzA2MDA3LDQwLjYwNDQwMSAtOTAuMjAxNjAzLDE1Ni41NjQ0MDcgLTEzNC4yMzQ1MDQsMjMzLjk4NjQwNGMtMy4zNzgxNyw1Ljk1MTk5NiAzLjQ0NjIsMTcuOTkzOTg4IDguOTUxMiwxNy45OTMwMTFjNTMuNTgzODAzLC0wLjAxMTAxNyAyMTkuMjU2Mjk2LC0wLjA3NzAyNiAyNzUuNjI3Mjk4LC0wLjEyMDAyNmM2LjI0MzAxMSwtMC4wMDQ5NzQgMTEuNjcwOTksLTEzLjE0ODk4NyA4LjM4Mjk5NiwtMTguOTQ0OTc3Yy0zNi4yNjA5ODYsLTYzLjkyNjAxIC0xMDMuMTM4LC0xNzkuMzI0NTA5IC0xMzMuNTA4OTg3LC0yMzIuNjg4MDExYy0wLjY0NDAxMiwtMS4xMzIgLTYuOTgxMDAzLC02LjIzOTEwMSAtMTIuMjEyMDA2LC02LjE3ODJjLTUuMzMyMDAxLDAuMDYxMTk5IC0xMS44OTUwMDQsNC4wMTY5OTggLTEzLjAwNTk5Nyw1Ljk1MTc5N2wwLDB6IiBzdHJva2Utd2lkdGg9IjFweCIgZmlsbC1ydWxlPSJldmVub2RkIiBmaWxsPSIjZmZmZmZmIi8+CiAgPHBhdGggZD0ibTE0OC41ODQ5NDYsNTUuNDMzNTcxYy0yMC42OTczMjcsMzYuODI2MTggLTgwLjEwNjQ5OSwxNDEuOTk2MDU2IC0xMTkuMjExMzg2LDIxMi4yMTQ0MDljLTMuMDAwMDU5LDUuMzk3Njc1IDMuMDYwNTcyLDE2LjMxOTMzNiA3Ljk0OTQzLDE2LjMxODMyOWM0Ny41ODY4MDcsLTAuMDA5OTE4IDE5NC43MTc0NzYsLTAuMDY5MjQ0IDI0NC43ODAxNTksLTAuMTA4ODI2YzUuNTQ0MjgxLC0wLjAwNDM2NCAxMC4zNjQ2MjQsLTExLjkyNTI5MyA3LjQ0NDc2MywtMTcuMTgyMDM3Yy0zMi4yMDMyNzgsLTU3Ljk3NzI0OSAtOTEuNTk1MDc4LC0xNjIuNjM4NDEyIC0xMTguNTY3MjE1LC0yMTEuMDM2NTc1Yy0wLjU3MjExMywtMS4wMjY2MTEgLTYuMTk5NTcsLTUuNjU4NTg4IC0xMC44NDU3MDMsLTUuNjAzMjcxYy00LjczNTM4MiwwLjA1NTQ3IC0xMC41NjM3ODIsMy42NDMxNjIgLTExLjU1MDA0OSw1LjM5Nzk3MnoiIHN0cm9rZS13aWR0aD0iMXB4IiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGZpbGw9IiMwMDAwMDAiIGlkPSJzdmdfMSIvPgogIDxwYXRoIGlkPSJwYXRoMjM4NCIgZD0ibTE1OS40NDE1NTksMTExLjE4MTgyNGMtMy43MDUyNDYsLTAuMDY3Nzg3IC05LjI0MzE0OSwxLjE3MjQ0IC0xMy4wMzI3OTEsNC4zODQwNDhjLTMuOTEwMDE5LDMuMzEzNjI5IC01LjQ3MDU1MSw1LjgwMDI0NyAtNS40OTUzNDYsOC45NDkyOGMtMC4yMDQxNzgsMjUuOTQxNTU5IDYuMTQxNTcxLDg3LjI1NzI2MyA2LjE0MTU3MSw4Ny4yNTcyNjNjMCwwIDIuMzQ5MjQzLDkuNjI2MDIyIDExLjY5MzkyNCw5LjE5Mjk0N2M4LjkxMzIyMywtMC40MjEwODIgMTEuMzk1MzU1LC03Ljk3MTcyNSAxMS4zOTUzNTUsLTcuOTcxNzI1YzAuMDczODgzLDAgNi40NDA1NTIsLTYyLjYyMTM4NCA2LjA5MzgyNiwtODguNDc4NDg1Yy0wLjA0MTUzNCwtMy4wOTgxMjIgLTEuMjE5NDgyLC00Ljk0MDA0MSAtNS4wNjc0NDQsLTguNDUzNjI5Yy0zLjM5MzE4OCwtMy4wOTgzNDMgLTguMzQ5NjA5LC00LjgxNzg4NiAtMTEuNzI5MDk1LC00Ljg3OTd6IiBzdHJva2Utd2lkdGg9IjFweCIgZmlsbC1ydWxlPSJldmVub2RkIiBmaWxsPSIjZmZmZmZmIi8+CiAgPHBhdGggZD0ibTE3My44MTMxNTYsMjQ4LjkzMDc0YTE0LjcxODU1LDEyLjAzNDYzIDAgMSAxIC0yOS40MzcxMTksMGExNC43MTg1NSwxMi4wMzQ2MyAwIDEgMSAyOS40MzcxMTksMHoiIGlkPSJwYXRoMzE1NiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIHN0cm9rZS1taXRlcmxpbWl0PSI0IiBzdHJva2Utd2lkdGg9IjUiIGZpbGwtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI2ZmZmZmZiIvPgogPC9nPgo8L3N2Zz4=);
 					background-size: contain; /* not using shorthand because of svg sizing here. :C */
 					background-repeat: no-repeat;
 					background-position: left;
 					background-color: #FF9494; /* add this color to fill background */
 					width: 100%;
 					height: auto;
 					text-align: center;
 					font-size: 20px;
 					position: absolute;
 					overflow: auto;
 					top: 0;
 					right: 0;
 					left: 0;
 				}
 				h1 {
 					padding-top:20px;
 				}
				#cart {
					display:none;
				}
				#cart li {
					list-style-type:none;
					margin-bottom:2px;
					font-size:14px;
					color:#666;
					width:100%;
					position: static;
				}
				#cart h1 {
					font-size:20px;
					color:#0d3f7c;
					padding-top:0px;
				}
				#cart .cart-total {
					text-align:right;
					font-size:18px;
					color:#3C6;
					width:100%;
					padding-bottom:5px;
				}
				#cart .cart-content {
					width:100%;
					text-align:left;
				}
				.left-addon .form-control {
					padding-left: 30px;
				}
				.form-control + .glyphicon {
					position: absolute;
					left: 0;
					padding: 8px 10px;
				}
				.left-addon {
					position: relative;	
				}
				.nonmember { 
					background:url('<?php echo plugins_url('webinars/img/aedisabled.png') ?>') no-repeat left;
				}
				.activemember {
					background:url('<?php echo plugins_url('webinars/img/aeactive.png') ?>') no-repeat left;
				}
				#company-greeting {
					display:none;	
				}
				#cart .price-difference {
					text-align:right;
					font-size:14px;
					color:#3C6;
					width:100%;
					padding-bottom:3px;
				}
				.checkout-cart-content {
					margin-left:20px;
				}
				#paymentModal .invalid {
					background-color:#FFB9B9;
				}
			</style>
			<noscript>
				<p>Please enable Javascript to properly show the webinars page.</p>
			</noscript>
			<label class="hidden-label ajaxlocation-checkuser"><?php echo plugins_url('webinars/checkuser.php') ?></label>
			<label class="hidden-label ajaxlocation-processpayment"><?php echo plugins_url('webinars/paymentController.php') ?></label>
			<label class="hidden-label ajaxlocation-addorder"><?php echo plugins_url('webinars/addOrder.php') ?></label>
			<label class="hidden-label ajaxlocation-sendmail"><?php echo plugins_url('webinars/sendMail.php') ?></label>
            <br />
			<div class="row">
				<div class="col-md-4">
					<button id="toggleCart" class="btn btn-default" data-toggle="button"><span class="glyphicon glyphicon-shopping-cart"></span></button>
				</div>
				<div class="col-md-4"></div><!--spacer-->
				<div class="col-md-4">
					<div class="left-addon">
     					<input type="text" class="form-control webinar-search" placeholder="Live Search Webinars...">
						<span class="glyphicon glyphicon-search"></span>
            		</div>
				</div>
			
			</div>
            <br /><br />
			<div id="cart" class="panel panel-primary"><!--Start shopping cart here-->
				<div class="panel-heading">Webinar Cart</div>
            	<div class="panel-body cart-icon">
					<ul><div class="cart-content"></div></ul>
					<div class="price-difference"></div>
                	<div class="cart-total"></div>
					<button type="button" id="checkout-button" class="btn btn-primary btn-block">Checkout</button>
				</div>
            </div><!-- end shopping cart -->
			<?php
				global $wpdb; 
				$table_name = $wpdb->prefix . "webinars"; 
				$sql = "SELECT * FROM $table_name ORDER BY id DESC";
				$webinars = $wpdb->get_results($wpdb->prepare($sql));
				if(!empty($webinars)) { 
					echo '<hr /><div id="search-msg"></div><ul id="webinars">';
							foreach($webinars as $webinar) {
								echo '<li class="webinar-list-item">
									<div class="thumbnail webinar">
										<img src="test.jpg" width="300" height="200">
										<div class="caption content-slate">
											<h3 class="webinar-title">' . $webinar->title . '</h3>
											<p>' . $webinar->description . '</p>
											<p><em>$' . $webinar->price . ' for ' . $webinar->duration . ' day access</em></p>
											<p class="memberpriceelement"><em>AE Member Price: $' . $webinar->member_price . '</em></p>
											<label class="hidden-label uniqidlbl" id="' . $webinar->urlkey . '"></label>
											<label class="hidden-label price">' . $webinar->price . '</label>
											<label class="hidden-label memberprice">' . $webinar->member_price . '</label>
											<label class="hidden-label duration" id="' . $webinar->duration . '"></label>
											<button class="cartBtn">Add To Webinar Cart</button>
										</div>
									</div>
								</li>';
							} ?>
						</ul>
				<?php } ?>
				</div>
				<div class="page">

				</div>
				<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4 class="modal-title">Webinar Checkout</h4>
							</div>
							<div class="modal-body">
								<form role="form">
									<div class="panel panel-default">
										<div class="panel-body">
											<h4><span class="glyphicon glyphicon-envelope"></span> &nbsp;Digital Delivery Information</h4>
										</div>
									</div>
									<p class="help-block" id="company-greeting"></p>
									<div class="left-addon">
										<input type="email" id="pmt-email" class="form-control validate nonmember" placeholder="Email Address" data-validation-type="email" />
									</div>
									<p class="help-block">If you are an AE member, the AE logo will light up and apply the member discount&hellip;</p>
									<div class="panel panel-default">
										<div class="panel-body">
											<h4><span class="glyphicon glyphicon-user"></span> &nbsp;Billing Information</h4>
										</div>
									</div>
									<p class="help-block">Information below must match card</p>
									<div class="row">
										<div class="col-md-6">
												<input type="text" class="form-control validate" id="pmt-cc-first-name" placeholder="First name on card" />
										</div>
										<div class="col-md-6">
												<input type="text" class="form-control validate" id="pmt-cc-last-name" placeholder="Last name on card" />
										</div>
									</div><br />
									<input type="text" class="form-control validate" id="pmt-address-line1" placeholder="Street Address, P.O. Box" data-validation-type="street"/><br />
									<input type="text" class="form-control" id="pmt-address-line2" placeholder="Apartment, Suite, etc." /><br />
									<div class="row">
										<div class="col-md-4">
											<input type="text" class="form-control validate" id="pmt-address-city" placeholder="City" />
										</div>
										<div class="col-md-4">
											<select class="form-control validate" id="pmt-address-state">
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
										</div>
										<div class="col-md-4">
											<input type="text" class="form-control validate" id="pmt-address-zipcode" min="5" max="5" placeholder="Zipcode" data-validation-type="zipcode" />
										</div>
									</div><br />
									<br />
									<div class="panel panel-default">
										<div class="panel-body">
											<h4><span class="glyphicon glyphicon-credit-card"></span> &nbsp;Credit Card Information</h4>
										</div>
									</div>
									<div class="left-addon">
										<input type="number" class="form-control validate" id="pmt-cc-number" placeholder="Credit Card Number" data-validation-type="ccnumber" />
										<span class="glyphicon glyphicon-lock"></span>
									</div>
									<br />
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label for="pmt-cc-expire-month">Expiration Month</label>
												<select class="form-control" id="pmt-cc-expire-month">
													<option value="1" selected="selected">01 (Jan)</option>
													<option value="2">02 (Feb)</option>
													<option value="3">03 (Mar)</option>
													<option value="4">04 (Apr)</option>
													<option value="5">05 (May)</option>
													<option value="6">06 (Jun)</option>
													<option value="7">07 (Jul)</option>
													<option value="8">08 (Aug)</option>
													<option value="9">09 (Sep)</option>
													<option value="10">10 (Oct)</option>
													<option value="11">11 (Nov)</option>
													<option value="12">12 (Dec)</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="pmt-cc-expire-month">Expiration Year</label>
												<select class="form-control" id="pmt-cc-expire-year">
													<option value="2014" selected="selected">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
													<option value="2017">2017</option>
													<option value="2018">2018</option>
													<option value="2019">2019</option>
													<option value="2020">2020</option>
													<option value="2021">2021</option>
													<option value="2022">2022</option>
													<option value="2023">2023</option>
													<option value="2024">2024</option>
													<option value="2025">2025</option>
												</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label for="pmt-cc-expire-month">CCV2 Code</label>
												<input type="text" class="form-control validate" max="4" min="3" id="pmt-cc-cvv2" placeholder="CCV2" data-validation-type="cvv2" />
											</div>
										</div>
									</div>
									<div class="panel panel-default">
										<div class="panel-body">
											<h4><span class="glyphicon glyphicon-shopping-cart"></span> &nbsp;Review Your Order</h4>
										</div>
									</div>
									<ul class="checkout-cart-content">
									
									</ul>
									<div class="row">
										<div class="col-md-4">
											<div class="price-difference"></div>
										</div>
										<div class="col-md-4"></div><!--spacer-->
										<div class="col-md-4">
											<div class="cart-total"></div>
										</div>
									</div>
								</form>
							</div>
							<div class="modal-footer">
								<p class="text-center checkout-progress"></p><br />
								<div class="progress">
									<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
										<span class="sr-only">Checkout Progress</span>
									</div>
								</div>
								<button type="button" class="btn btn-primary btn-lg btn-block complete-checkout checkout-btns">Purchase</button>
								<button type="button" class="btn btn-default btn-block cancel-checkout checkout-btns" data-dismiss="modal">Cancel</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-hidden="true" data-backdrop="static">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h1 class="modal-title"><img src="<?php echo plugins_url('webinars/logosml.png') ?>" width="132" height="100" alt="AE Logo" />Thank you, <label class="fill-in-name"></label>.</h1>
							</div>
							<div class="modal-body">
								<p class="text-center"><strong>Your receipt and order instructions have been emailed to you.<br /></strong><em>This email contains your passkey that is linked with each webinar you purchased. Please keep that email safe until you no longer require access to the webinars.</em></p><br />
								<h1 class="text-center"><strong>Your Webinars Will Expire On <label class="fill-in-expiration"></label></strong></h1><br /><br /><br />
								<p><strong>Here are some tips on getting started with AE Webinars:</strong></p>
								<ul>
									<li>Click on a webinar link provided in the order email that was sent to you.</li>
									<li>Once the page has opened, you will be prompted with a passkey entry form, copy/paste the passkey that was sent in the order email.</li>
									<li>The video will appear, click the play button to begin the webinar.</li>
									<li>If you need to check the expiration date, it is listed on the webinar video and the order email.</li>
								</ul><br /><br />
								<p class="text-muted">If you experience any problems with webinar playback, please make sure your browser is updated to support HTML video. If you require further assistance, please <a href="http://www.associatedemployers.org/contact-us/">contact us</a>.</p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default btn-lg btn-block" data-dismiss="modal">Close</button>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
							
							
				<script src="<?php echo plugins_url('webinars/js/moment.min.js') ?>"></script>
				<script src="<?php echo plugins_url('webinars/js/jquery.creditCardValidator.js') ?>"></script>
				<script src="<?php echo plugins_url('webinars/js/controller.js') ?>"></script>
			<?php } ?> <!-- Development Restriction ending - NOTHING IN DEVELOPMENT PAST THIS POINT -->
		</div>
	</div>
</div>
<div class="footerBgContainer">
	<div class="footerBg sbar"></div>
</div>
<?php get_footer(); ?>