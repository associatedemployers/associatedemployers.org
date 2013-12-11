<?php
/*
Template Name: Frontpage
*/
?>
<?php get_header(); ?>
<div class="bannerContainer">
	<div class="bigBanner"><div class="slider">
		<div class="slide ac">
			<div class="slide-image" style="background: url('<?php echo esc_url(ae_options('slider_slide1_image')); ?>') center no-repeat; background-size:contain;"></div>
			<div class="slide-text">
				<h1 class="slide-heading"><?php echo ae_options('slider_slide1_heading'); ?></h1>
				<h2 class="slide-subheading"><?php echo ae_options('slider_slide1_subheading'); ?></h2>
			</div>
		</div>
		<div class="slide">
			<div class="slide-image" style="background: url('<?php echo esc_url(ae_options('slider_slide2_image')); ?>') center no-repeat; background-size:contain;"></div>
			<div class="slide-text">
				<h1 class="slide-heading"><?php echo ae_options('slider_slide2_heading'); ?></h1>
				<h2 class="slide-subheading"><?php echo ae_options('slider_slide2_subheading'); ?></h2>
			</div>
		</div>
		<div class="slide">
			<div class="slide-image" style="background: url('<?php echo esc_url(ae_options('slider_slide3_image')); ?>') center no-repeat; background-size:contain;"></div>
			<div class="slide-text">
				<h1 class="slide-heading"><?php echo ae_options('slider_slide3_heading'); ?></h1>
				<h2 class="slide-subheading"><?php echo ae_options('slider_slide3_subheading'); ?></h2>
			</div>
		</div>
		<div class="slide">
			<div class="slide-image" style="background: url('<?php echo esc_url(ae_options('slider_slide4_image')); ?>') center no-repeat; background-size:contain;"></div>
			<div class="slide-text">
				<h1 class="slide-heading"><?php echo ae_options('slider_slide4_heading'); ?></h1>
				<h2 class="slide-subheading"><?php echo ae_options('slider_slide4_subheading'); ?></h2>
			</div>
		</div>
		<div class="slide">
			<div class="slide-image" style="background: url('<?php echo esc_url(ae_options('slider_slide5_image')); ?>') center no-repeat; background-size:contain;"></div>
			<div class="slide-text">
				<h1 class="slide-heading"><?php echo ae_options('slider_slide5_heading'); ?></h1>
				<h2 class="slide-subheading"><?php echo ae_options('slider_slide5_subheading'); ?></h2>
			</div>
		</div>
		<div class="slide">
			<div class="slide-image" style="background: url('<?php echo esc_url(ae_options('slider_slide6_image')); ?>') center no-repeat; background-size:contain;"></div>
			<div class="slide-text">
				<h1 class="slide-heading"><?php echo ae_options('slider_slide6_heading'); ?></h1>
				<h2 class="slide-subheading"><?php echo ae_options('slider_slide6_subheading'); ?></h2>
			</div>
		</div>
		<div class="c-strip">
			<div class="c-cont c-container-1"><div class="c-circle c-active" data-dtlt="1"></div></div>
			<div class="c-cont c-container-2"><div class="c-circle" data-dtlt="2"></div></div>
			<div class="c-cont c-container-3"><div class="c-circle" data-dtlt="3"></div></div>
			<div class="c-cont c-container-4"><div class="c-circle" data-dtlt="4"></div></div>
			<div class="c-cont c-container-5"><div class="c-circle" data-dtlt="5"></div></div>
			<div class="c-cont c-container-6"><div class="c-circle" data-dtlt="6"></div></div>
		</div>
		<div class="loginContainer">
			<div class="loginBg"></div>
			<a class="login" href="<?php echo home_url('/');?>membership/members-only/">Member Login</a>
		</div>
	</div></div>
<script>
function animateSlide(){$(".ac").toggle("clip",{duration:"350",easing:"swing"},function(){$(this).removeClass("ac");if($(this).next().hasClass("slide")){$(this).next(".slide").toggle("clip",{duration:"350",easing:"swing"}).addClass("ac")}else{$(".slide").first().toggle("clip",{duration:"350",easing:"swing"}).addClass("ac")}});var e=$(".c-circle").filter(".c-active");var t=parseFloat(e.attr("data-dtlt"))+1<=6?parseFloat(e.attr("data-dtlt"))+1:1;var n=$(".c-circle[data-dtlt='"+t+"']");e.removeClass("c-active");n.addClass("c-active")}function overrideSlide(e){var t=$(".slide").eq(e);var n=$(".ac");n.toggle("clip",{duration:"150",easing:"swing"},function(){t.toggle("clip",{duration:"150",easing:"swing"}).addClass("ac")}).removeClass("ac");$(".c-active").removeClass("c-active");$(".c-circle").eq(e).addClass("c-active")}$(document).ready(function(){$(".slide:not(.ac)").hide();var e=setInterval("animateSlide()",parseFloat(<?php echo ae_options('slider_slide_speed'); ?>));$(".c-circle").click(function(){var t=$(this).index(".c-circle");clearInterval(e);e=setInterval("animateSlide()",parseFloat(<?php echo ae_options('slider_slide_speed_after_click'); ?>));overrideSlide(t)})})
</script>
</div>
<div class="container_12 content">
	<div id="content" class="content grid_9">
		<div class="loginContainer">
			<div class="loginBg"></div>
			<a class="login" href="<?php echo home_url('/');?>membership/members-only/">Member Login</a>
		</div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); 
		echo '<h1>Your Success is Our Business</h1>';
		the_content(); endwhile; endif; ?>
		<div>
			<div class="circle humanResources"><a href="<?php echo home_url('/');?>hr"><h3>Human<br/>Resources</h3><p>Professional expert HR advice, support, research, and training.</p></a></div>
			<div class="circle healthBenefits"><a href="<?php echo home_url('/');?>insurance"><h3>Health<br/>Benefits</h3><p>High quality employee benefits.</p></a></div>
			<div class="circle workersCompensation"><a href="<?php echo home_url('/');?>work-comp"><h3>Workers<br/>Compensation</h3><p>Explore options with us to potentially save money.</p></a></div>
			<div class="circle recruiting"><a href="<?php echo home_url('/');?>recruiting"><h3>Recruiting</h3><p>Top recruiters at a fraction of the price.</p></a></div>
			<div class="circle training"><a href="<?php echo home_url('/');?>training"><h3>Training</h3><p>World class training professionals.</p></a></div>
			<div class="circle payrolServices"><a href="<?php echo home_url('/');?>payroll"><h3>Payroll<br/>Services</h3><p>Serving our members with complete payroll services.</p></a></div>
			<div class="circle businessSolutions"><a href="<?php echo home_url('/');?>business-solutions"><h3>Business<br/>Solutions</h3><p>Increase the relevance and viability of your organization.</p></a></div>
			<div class="circle safetyServices"><a href="<?php echo home_url('/');?>safety"><h3>Safety<br/>Services</h3><p>Safety of your employees should be a top priority.</p></a></div>
			<div class="circle surveyCompensation"><a href="<?php echo home_url('/');?>survey-compensation"><h3>Survey &amp;<br/>Compensation</h3><p>Employee opinion surveys, comp plans, salary advice and much more.</p></a></div>
			<div class="clear"></div>
		</div>
	</div>
	<div id="sidebar" class="grid_3">
		<div class="loginContainer">
			<div class="loginBg"></div>
			<a class="login" href="<?php echo home_url('/');?>">Member Login</a>
		</div>
		<strong>For Our Members</strong><br/>
		<div class="hrAnswers">
			<p style="margin: 0;">Online HR resource that is available to you 24 hours a day, 7 days a week, 365 days a year. <a href="<?php echo home_url('/');?>hr/hr-answers-now/" class="more">more</a></p>
			<p style="margin: 0 0 15px 0;">
				<a href="<?php echo home_url('/');?>hr/newsletter">HR Newsletter ></a><br/>
				<a href="<?php echo home_url('/');?>hr/hotline">HR Hotline ></a><br/>
			</p>
		</div>
		<div class="news">
			<h3>The Latest</h3>
			<?php $query = query_posts('posts_per_page=1'); while (have_posts()) : the_post(); ?>
			<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<div><?php echo content(16); ?></div>
			<div><a href="<?php the_permalink(); ?>">more ></a></div>
			<?php endwhile;?> <?php wp_reset_query(); ?>
		</div>
		<div class="survey">
			<p>Are you an Executive that wants to take your skills to next level?<a href="<?php echo home_url('/');?>wp-content/uploads/2013/04/Exec-Dev-booklet-2013-.pdf" class="more">Learn More!</a></p></div>
	</div>
</div>

<div class="frontpageFooterBgContainer">
	<section class="testimonials container_12">
		<div class="head"></div>
		<h2>Why Associated Employers?</h2>
		<p>"We have received outstanding support from Associated Employers for both management training and company strategic planning.  We have learned so much to help us grow and be successful, and we look forward to our continued relationship with this great professional organization."</p>
		<p class="author">Anna Landers &bull; Chief Operating Officer, PDT, Inc.</p>
	</section>

	<div class="frontPageFooterBg"></div>
	<div class="frontPageFooterBgCont"></div>
</div>
<?php get_footer(); ?>