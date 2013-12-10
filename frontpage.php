<?php
/*
Template Name: Frontpage
*/
?>

<?php get_header(); ?>
<div class="bannerContainer">
	<div class="bigBanner"></div>

	<div class="bannerContent">
		
              
               <div id="slide1" class="slide act" style="top: 395px;">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/webexec2.png" /></div>
			<h2 class="headline">
				<span class="slot1">Let Our Executive Leadership</span>
				<span class="slot2">Training Take You to the Next Level</span>
			</h2>
		</div>
		<div id="slide2" class="slide">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/training05.png" /></div>
			<h2 class="headline">
				<span class="slot1">Professional&nbsp;&nbsp;<br/>Programs&nbsp;&nbsp;</span>
				<span class="slot2">60+ Members Attend 2013<br/>Employment Law &nbsp;&nbsp;&nbsp;</span>
			</h2>
		</div>
		<div id="slide3" class="slide">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/03.png" /></div>
			<h2 class="headline">
				<span class="slot1">Ask About our Payroll Services</span>
			</h2>
		</div>
		<div id="slide4" class="slide">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/04.png" /></div>
			<h2 class="headline">
				<span class="slot1">Searching for Workers<br/>Compensation Savings?</span>
				<span class="slot2">If you haven't Received a Quote from Us...<br/>You haven't Explored All Your Options</span>
			</h2>
		</div>
		<div id="slide4" class="slide">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/sick.jpg" /></div>
			<h2 class="headline">
				<span class="slot1">Associated Employers <br/>Makes House Calls!</span>
				<span class="slot2">Is Your Organization Feeling <br/>A Little Under The Weather?</span>
			</h2>
		</div>
	                

                <div id="slide1" class="slide">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/06.jpg" /></div>
			<h2 class="headline">
				<span class="slot1">AE's New Location</span>
				<span class="slot2">1535 Liberty Lane, suite 110F<br/>Missoula, MT 59808</span>
			</h2>
		</div>

		<div id="slide2" class="slide">
			<div class="img_wrap"><img src="<?php echo get_bloginfo('template_directory'); ?>/img/banner/hrmetrics.jpg" /></div>
			<h2 class="headline">
				<span class="slot1">HR Metrics Calculator</span>
				<span class="slot2">Members Only Area</span>
			</h2>
		</div>



</div>
<script>
	function nextSlide() { 
		var active = $('.act'); 
		//$('.slide').hide(); 

		if($(active).next().hasClass('slide')) { 
			$(active).animate({ top: '-395px' }, 500, function() {
				$(active).next().animate({ top: '395px' }, 500).addClass('act'); 
			}).removeClass('act');
		} else { 
			$(active).animate({ top: '-395px' }, 500, function() {
				$('.slide:first').animate({ top: '395px' }, 500).addClass('act'); 
			}).removeClass('act');
		} 
	}

	$(document).ready(function(){
		var timer = setInterval('nextSlide()', 6000);
		$('.slide').hover(function(){ clearInterval(timer); }, function() { timer = setInterval('nextSlide()', 6000); });
	});

</script>
	<div class="loginContainer">
		<div class="loginBg"></div>
		<a class="login" href="<?php echo home_url('/');?>membership/members-only/">Member Login</a>
	</div>
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