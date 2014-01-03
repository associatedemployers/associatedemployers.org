<!doctype html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
	<meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width" />
	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/reset.css" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/css/960.css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<!--[if lt IE 9]>
	<script>
		document.createElement('header');
		document.createElement('section');
		document.createElement('article');
		document.createElement('aside');
		document.createElement('nav');
		document.createElement('footer');
	</script>
	<![endif]-->

	<!--[if IE 7]>
	<style>
	.content ul, .content ol { margin-left: 18px !important; padding-left: 0 !important; }
	.content ul li, .content ol li { left: 18px !important; }
	</style>
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/smoothness/jquery-ui-1.10.2.custom.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/css/jquery.qtip.css">
	<script type="text/javascript" src="//cdn.sublimevideo.net/js/kr4f9svj.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<!--<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.10.2.min.js"></script>-->
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!--<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-ui-1.10.2.custom.min.js" type="text/javascript"></script>-->
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.qtip.min.js" type="text/javascript"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/js.js" type="text/javascript"></script>
	<?php if(is_page_template('page_webinars.php')) { ?>
		<link href="http://vjs.zencdn.net/4.2/video-js.css" rel="stylesheet">
		<!-- bootstrap -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
		<!-- end bootstrap -->
	<?php } ?>
	<?php wp_head(); ?>
</head>

<?php if(is_page_template('page_sidebar.php') || is_page_template('page_member.php')) { ?>
<body class="sidebar_bg">
<?php } else { ?>
<body>
<?php } ?>

	<header class="container_12">
		<a class="logo" href='<?php echo home_url('/');?>' title="Associated Employers"></a>

		<p class="info">
			<span class="phoneNumber">406.248.6178</span>
			<span class="address" title="Corporate Office & Training Facility <br/> 2727 Central Avenue, suite 2 <br/> Billings, MT 59102">Billings &bull; Helena &nbsp;</span>
			<span class="address" title="Missoula Office & Training Facility <br/> 1535 Liberty Lane, suite 110F <br/>
Missoula, MT 59808">Missoula &nbsp; &nbsp; &nbsp; &nbsp;</span> 
		</p>

		<nav class="main"><ul><?php wp_list_pages('title_li=&sort_column=menu_order&depth=2&exclude=6,57,59,71,176,270,273,275,277,288,290,304,583,587,1624,1668,1791,1877'); ?></ul></nav>

		<a class="facebook" title="<p style='white-space: pre;'>Become our fan on Facebook</p>" href="https://www.facebook.com/pages/Associated-Employers/197713060277021" target="_blank"></a>
		<a class="twitter" title="<p style='white-space: pre;'>Follow us on Twitter</p>" href="https://www.twitter.com/aehumanresource/" target="_blank"></a>
		<a class="linkedin" title="<p style='white-space: pre;'>Follow us on LinkedIn</p>" href="http://www.linkedin.com/company/associated-employers/" target="_blank"></a>
		

	</header>