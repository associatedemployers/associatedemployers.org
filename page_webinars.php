<?php /* Template Name: Webinars w/ Sidebar */ ?>

<?php get_header(); ?>
<div class="bannerContainerSub">
	<div class="bigBannerSub"></div>
</div>

<div class="container_12 content">
	<div id="content" class="content grid_9">
		<div id="content_wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); the_title('<h1>', '</h1>'); the_content(); endwhile; endif; ?>


			<style>
			#webinars li {list-style-type:none; padding-bottom:20px; display:inline-block;}
			#webinars h4 {margin-bottom:5px;}
			#webinars p {margin-bottom:0;}
			#webinars input[type="checkbox"] {float:left;}
			li.webinar-price {display:none !important;}
			</style>

			<?php
				global $wpdb; 
				$table_name = $wpdb->prefix . "webinars"; 
				$sql = "SELECT * FROM $table_name";
				$webinars = $wpdb->get_results($wpdb->prepare($sql));
				if(!empty($webinars)) { 
					echo '<hr />';
					if(isset($_POST['input_1'])) {
						echo do_shortcode('[gravityform id="8" name="Webinar Code Entry"]');
					} else {
						echo do_shortcode('[gravityform id="8" name="Webinar Code Entry"]'); ?>

						<form id="purchase_webinars" method="post" action="<?php echo home_url('/');?>training/webinars-for-purchase/webinar-payment/">
							<ul id="webinars">
								<?php foreach($webinars as $webinar) {
									if($webinar->unlimited) {$duration = 'unlimited';} else {$duration = $webinar->duration;}
									//<input type="checkbox" class="purchase_webinar" name="webinar_'.$webinar->id.'" value="'.$webinar->id.'"/>';
									echo '<li><div class="webinar"><br/>
									<h4>' . $webinar->title . '</h4>
									<p>' . $webinar->description . '</p>
									<em>$' . $webinar->price . ' for ' . $duration . ' days</em>
									</div></li>';
								} ?>
							</ul>
							<input type="submit" value="Purchase Webinars">
						</form>
					<?php } ?>
				<?php } ?>
		</div>
	</div>

	<div id="sidebar" class="grid_3">
		<?php get_sidebar(); ?>
	</div>
</div>

<div class="footerBgContainer">
	<div class="footerBg sbar"></div>
</div>


<?php get_footer(); ?>