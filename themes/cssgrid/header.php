<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cssgrid
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Montserrat:wght@200;500;700;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site container-max-width marginx-auto">
		<div class="hero-bg hero-size align-center pos-relative">
			<!-- hero.div -->
			<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'cssgrid'); ?></a>

			<header id="masthead" class="site-header">
				<div class="header-grid">
					<div class="logo align-left">
						<a href="<?php bloginfo('url'); ?>">
							<img src="<?php echo get_template_directory_uri() ?>/images/sneaker-tracker-logo-1.png" alt="Sneaker Tracker logo">
						</a>
					</div>

					<div class="align-right">
						<nav id="site-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'cssgrid'); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
									'link_before'				 => '+',
								)
							);
							?>
						</nav><!-- #site-navigation -->
					</div>
					<div class="align-left search-icon">
						<svg class="search-icon-adjust" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M11 4C7.13401 4 4 7.13401 4 11C4 14.866 7.13401 18 11 18C14.866 18 18 14.866 18 11C18 7.13401 14.866 4 11 4ZM2 11C2 6.02944 6.02944 2 11 2C15.9706 2 20 6.02944 20 11C20 15.9706 15.9706 20 11 20C6.02944 20 2 15.9706 2 11Z" fill="white" />
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.9429 15.9429C16.3334 15.5524 16.9666 15.5524 17.3571 15.9429L21.7071 20.2929C22.0977 20.6834 22.0977 21.3166 21.7071 21.7071C21.3166 22.0976 20.6834 22.0976 20.2929 21.7071L15.9429 17.3571C15.5524 16.9666 15.5524 16.3334 15.9429 15.9429Z" fill="white" />
						</svg>

					</div>



			</header><!-- #masthead -->
			<div class="sidebar">
				<div>
					<img class="sidebar-shoe" src="<?php echo get_template_directory_uri() ?>/images/shoe1_icon_1.png" alt="shoe">
					<h3 class="sidebar-text">What’s On your feet today?</h3>
					<img class="sidebar-arrow" src="<?php echo get_template_directory_uri() ?>/images/arrow_icon_1.png" alt="shoe">
				</div>
				<div id="collapse" class="collapse-form" >
					<div id="close-side-form" class="side-close" style="position: relative; padding-top: 37px; float: right; padding-right: 49px;">close X</div>
					<div class="align-center" style="padding-top: 87px; padding-left: 20px;">
						<img class="marginx-auto" src="<?php echo get_template_directory_uri() ?>/images/sneaker-tracker-logo_black-1.png" alt="Sneaker Tracker logo">
					</div>
					<h3 class="side-collapse-heading">What’s On your feet today?</h3>
					<p class="side-collapse-description marginx-auto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc commodo mauris nec sem euismod, at vulputate enim imperdiet</p>

					<nav class="side-collapse-nav">
						<a href="#" class="btn-black-side-insta" style="margin-right: 17px;"><svg style="position: relative; top: 4px; margin-right: 6px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M7 3C4.79086 3 3 4.79086 3 7V17C3 19.2091 4.79086 21 7 21H17C19.2091 21 21 19.2091 21 17V7C21 4.79086 19.2091 3 17 3H7ZM1 7C1 3.68629 3.68629 1 7 1H17C20.3137 1 23 3.68629 23 7V17C23 20.3137 20.3137 23 17 23H7C3.68629 23 1 20.3137 1 17V7Z" fill="black" />
								<path fill-rule="evenodd" clip-rule="evenodd" d="M12.4833 8.98918C11.8591 8.89662 11.2216 9.00324 10.6615 9.29386C10.1014 9.58449 9.64721 10.0443 9.36351 10.608C9.07982 11.1716 8.98107 11.8103 9.08132 12.4333C9.18157 13.0563 9.47571 13.6319 9.9219 14.0781C10.3681 14.5242 10.9436 14.8184 11.5666 14.9186C12.1896 15.0189 12.8283 14.9201 13.392 14.6364C13.9556 14.3527 14.4155 13.8985 14.7061 13.3384C14.9967 12.7783 15.1033 12.1409 15.0108 11.5167C14.9164 10.88 14.6197 10.2905 14.1645 9.83541C13.7094 9.38028 13.12 9.08359 12.4833 8.98918ZM9.74037 7.51862C10.6739 7.03424 11.7363 6.85655 12.7766 7.01081C13.8378 7.16817 14.8202 7.66264 15.5788 8.4212C16.3373 9.17975 16.8318 10.1622 16.9891 11.2233C17.1434 12.2636 16.9657 13.3261 16.4813 14.2596C15.997 15.1931 15.2306 15.9501 14.2912 16.4229C13.3518 16.8957 12.2872 17.0603 11.2489 16.8932C10.2105 16.7261 9.25134 16.2359 8.50768 15.4923C7.76403 14.7486 7.2738 13.7894 7.10672 12.7511C6.93964 11.7128 7.10422 10.6482 7.57704 9.70878C8.04987 8.76938 8.80687 8.00299 9.74037 7.51862Z" fill="black" />
							</svg>Login with Instagram</a>
						<a href="#" class="btn-black-side-face"><svg style="position: relative; top: 4px; margin-right: 6px;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.7574 2.75736C11.8826 1.63214 13.4087 1 15 1H18C18.5523 1 19 1.44772 19 2V6C19 6.55228 18.5523 7 18 7H15V9H18C18.3079 9 18.5987 9.14187 18.7882 9.38459C18.9777 9.6273 19.0448 9.94379 18.9701 10.2425L17.9701 14.2425C17.8589 14.6877 17.4589 15 17 15H15V22C15 22.5523 14.5523 23 14 23H10C9.44772 23 9 22.5523 9 22V15H7C6.44772 15 6 14.5523 6 14V10C6 9.44772 6.44772 9 7 9H9V7C9 5.4087 9.63214 3.88258 10.7574 2.75736ZM15 3C13.9391 3 12.9217 3.42143 12.1716 4.17157C11.4214 4.92172 11 5.93913 11 7V10C11 10.5523 10.5523 11 10 11H8V13H10C10.5523 13 11 13.4477 11 14V21H13V14C13 13.4477 13.4477 13 14 13H16.2192L16.7192 11H14C13.4477 11 13 10.5523 13 10V7C13 6.46957 13.2107 5.96086 13.5858 5.58579C13.9609 5.21071 14.4696 5 15 5H17V3H15Z" fill="black" />
							</svg>Login with Facebook</a>
					</nav>
					<form action="post" class="side">
						<input class="input-row" type="text" placeholder="NAME"><br>
						<input type="text" placeholder="AGE"><br>
						<input type="text" placeholder="EMAIL"><br>
						<input type="text" placeholder="SHOE"><br>

						<input type="button" value="SEND">
					</form>
				</div>
			</div>