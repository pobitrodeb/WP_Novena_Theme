<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novena
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'novena' ); ?></a>

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<?php $options = get_option('novena-options'); ?>
						<?php 
							if($options['header_email']){
								?>
								<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i><?php echo $options['header_email'];?></a></li>
								<?php
							}
						?>
						<?php
							if($options['header_address']){
								?>
								<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $options['header_address']; ?></li>
								<?php
							}
						?>
						
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:<?php echo $options['header_phone_text'];?>">
						<?php
							if($options['header_phone_text']){
								?>
								<span><?php echo $options['header_phone_text']; ?></span>
								<?php
							}
						?>
							<?php
							if($options['header_phone_number']){
								?>
								<span>+<?php echo $options['header_phone_number'];?></span>
								<?php
							}
						?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="<?php echo site_url(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="" class="img-fluid">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<!-- <?php
					// wp_nav_menu(
					// 	array(
					// 		'theme_location'		=> 'primary-menu', 
					// 		'menu_class'			=> 'navbar-nav ml-auto', 	
					// 	)
					// );
				?> -->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="http://localhost/WP_Novena_Theme/home/">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="http://localhost/WP_Novena_Theme/about/">About</a></li>
					<li class="nav-item"><a class="nav-link" href="http://localhost/WP_Novena_Theme/services/">Services</a></li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown02">
							<li><a class="dropdown-item" href="http://localhost/WP_Novena_Theme/depatments/">Departments</a></li>
							<li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="http://localhost/WP_Novena_Theme/doctors/">Doctors</a></li>
							<li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
							<li><a class="dropdown-item" href="http://localhost/WP_Novena_Theme/appoinment/">Appoinment</a></li>
						</ul>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown05">
							<li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>
							<li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
						</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="http://localhost/WP_Novena_Theme/contact/">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>
</header>
