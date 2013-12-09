<?php get_header(); ?>
<div class="bannerContainerSub">
	<div class="bigBannerSub"></div>
</div>

<div class="container_12 content">
	<div id="content" class="content grid_12">
		<?php if (have_posts()) : while (have_posts()) : the_post(); the_title('<h1>', '</h1>'); the_content(); endwhile; endif; ?>
	</div>
</div>

<div class="footerBgContainer">
	<div class="footerBg"></div>
</div>



<?php get_footer(); ?>