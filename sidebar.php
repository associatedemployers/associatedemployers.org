<?php if(is_page('training')) {
	echo '<div style="display:none" class="fancybox-hidden"><div id="class_form">';
	echo do_shortcode('[gravityform id="1" name="Class Registration Form" title="true" description="false" ajax="true"]');
	echo '</div></div>';
} ?>



<?php if(is_page('hr') || is_page('membership')) { ?>
	<div class="loginContainer" style="display: block;">
		<div class="loginBg"></div>
		<a class="login" href="<?php echo home_url('/');?>membership/members-only/">Member Login</a>
	</div>

	<strong>For Our Members</strong><br/>
	<div class="hrAnswers" style="border-bottom: none;">
		<p style="margin: 0;">Online HR resource that is available to you 24 hours a day, 7 days a week, 365 days a year. <a href="<?php echo home_url('/');?>hr/hr-answers-now/" class="more">more</a></p>
		<p style="margin: 0;">
			<a href="<?php echo home_url('/');?>hr/newsletter">HR Newsletter ></a><br/>
			<a href="<?php echo home_url('/');?>hr/hotline">HR Hotline ></a>
		</p>
		</p>
	</div>
<?php } ?>


<?php
$query = get_post($post->ID);
if($query) { $post_count = $query->post_sidebar; }
wp_reset_postdata();
?>

<?php if($post_count) { ?>
<ul id="side_widgets">
	<?php dynamic_sidebar('Sidebar Widget Area'); ?>
</ul>
<?php } ?>