<?php /* Template Name: Page w/ Sidebar */ ?>

<?php get_header(); ?>
<div class="bannerContainerSub">
	<div class="bigBannerSub"></div>
</div>

<div class="container_12 content">
	<div id="content" class="content grid_9">
		<div id="content_wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); the_title('<h1>', '</h1>'); the_content(); endwhile; endif; ?>
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