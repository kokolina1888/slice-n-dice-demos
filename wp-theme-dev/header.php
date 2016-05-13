<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title><?php wp_title();?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />
<?php wp_enqueue_script('jquery'); ?>
<script src="<?php bloginfo('template_url');?>/js/cufon-yui.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/cufon-replace.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/Myriad_Pro_400.font.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_url');?>/js/Myriad_Pro_600.font.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
<![endif]-->
<?php wp_head();?>
</head>
<body id="page1">
<!-- header -->
<div id="header">
	<div class="container">
<!-- .logo -->
		<div class="logo">
			<a href="index.html"><img src="<?php echo get_template_directory_uri();?>/images/logo.gif" alt="" /></a>
		</div>
<!-- /.logo -->
		<form action="" id="search-form">
			<fieldset>
				<input type="text" class="text" /><input type="submit" value="Search" class="submit" />
			</fieldset>
		</form>
<!-- .nav -->
<?php 
          if (has_nav_menu('header-menu')) :
            wp_nav_menu(array('theme_location' => 'header-menu',
            					'menu_class' =>'nav',
            					'link_before'=>'<span>',
            					'link_after'=>'</span>' 
                   ));
          else: 
?>
        <ul class="nav">
			<li><a href="index.html" class="current"><span>home</span></a></li>
			<li><a href="about.html"><span>about</span></a></li>
			<li><a href="projects.html"><span>projects</span></a></li>
			<li><a href="contacts.html"><span>Contacts</span></a></li>
			<li><a href="sitemap.html"><span>SiteMap</span></a></li>
		</ul>
<?php
         endif; 
?>

		<!-- <ul class="nav">
			<li><a href="index.html" class="current"><span>home</span></a></li>
			<li><a href="about.html"><span>about</span></a></li>
			<li><a href="projects.html"><span>projects</span></a></li>
			<li><a href="contacts.html"><span>Contacts</span></a></li>
			<li><a href="sitemap.html"><span>SiteMap</span></a></li>
		</ul> -->
<!-- /.nav -->
<!-- .extra-box -->
		<div class="extra-box">
			<div class="inner">
				<h2>architectural<span>services for customers</span></h2>
				<ul>
					<li><a href="#">Structural engineering</a></li>
					<li><a href="#">Building services</a></li>
					<li><a href="#">Specialist consulting</a></li>
					<li><a href="#">Urban design</a></li>
					<li><a href="#">Transportation</a></li>
					<li><a href="#">Design development</a></li>
					<li><a href="#">Planning</a></li>
				</ul>
				<div class="wrapper"><a href="#" class="link1"><em><b>More Services</b></em></a></div>
			</div>
		</div>
<!-- /.extra-box -->
<!-- .intro-text -->
		<div class="intro-text">
			<h1>Accuracity<span>is the main feature</span><em>of our drawings</em></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolo- re magna aliqua.</p>
			<div class="wrapper"><a href="#" class="button">View Our Works</a></div>
		</div>
<!-- /.intro-text -->
	</div>
</div>