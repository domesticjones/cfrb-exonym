<?php
  /* ==============
     DEFAULT HEADER
     ============== */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title><?php wp_title(); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div id="container">
			<?php
				if(get_field('enable_cta')):
				$ctaImage = get_field('event_image', 'options');
				$ctaDate = get_field('event_date', 'options');
				$ctaStart = get_field('event_start', 'options');
				$ctaEnd = get_field('event_end', 'options');
				$ctaLink = get_field('ticketing_link' , 'options');
			?>
				<header id="global-cta">
					<div class="wrap">
						<div class="global-cta-left">
							<img src="<?php ex_logo(); ?>" alt="Logo for <?php ex_brand(); ?>" />
						</div>
						<div class="global-cta-right global-cta-image animate-parallax animate-z-extreme">
							<div class="module-bg"<?php if(!empty($ctaImage)) { echo 'style="background-image: url(' . $ctaImage['sizes']['medium'] . ');"'; } ?>></div>
						</div>
					</div>
					<div class="wrap">
						<p class="global-cta-left">
							<?php echo $ctaDate; ?>
							<br />
							<?php echo $ctaStart . ' - ' . $ctaEnd; ?>
						</p>
						<div class="global-cta-right">
							<?php if($ctaLink): ?>
								<a href="<?php echo $ctaLink['url']; ?>" target="<?php echo $ctaLink['title']; ?>" class="button">
									<?php echo $ctaLink['title']; ?>
								</a>
							<?php endif; ?>
						</div>
					</div>
				</header>
			<?php endif; ?>
      <header id="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
        <div class="wrap">
	        <a href="https://alamedabgc.org/" target="_blank" class="logo-parent-header">
						<img src="<?php echo asset_path('images/abgc-logo.svg'); ?>" alt="Logo for Alameda Boys and Girls Club" />
					</a>
          <a href="<?php echo get_home_url(); ?>" class="logo-header">
						<img src="<?php ex_logo('alternate'); ?>" alt="Logo for <?php ex_brand(); ?>" />
					</a>
          <?php ex_social(); ?>
					<a href="#" id="responsive-nav-toggle">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</a>
        </div>
				<nav id="header-sub" class="nav-header menu-dropdown" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
						'container' => false,								// remove nav container
						'container_class' => '',						// class of container (should you choose to use it)
						'menu' => __('Header', 'exonym'),	  // nav name
						'menu_class' => '',									// adding custom nav class
						'theme_location' => 'header-menu',	// where it's located in the theme
						'before' => '',											// before the menu
						'after' => '',											// after the menu
						'link_before' => '',								// before each link
						'link_after' => '',									// after each link
						'depth' => 0,												// limit the depth of the nav
						'fallback_cb' => ''									// fallback function (if there is one)
					)); ?>
					<?php wp_nav_menu(array(
						'container' => false,								// remove nav container
						'container_class' => '',						// class of container (should you choose to use it)
						'menu' => __('Header Side', 'exonym'),	  // nav name
						'menu_class' => '',									// adding custom nav class
						'theme_location' => 'header-side-menu',	// where it's located in the theme
						'before' => '',											// before the menu
						'after' => '',											// after the menu
						'link_before' => '',								// before each link
						'link_after' => '',									// after each link
						'depth' => 0,												// limit the depth of the nav
						'fallback_cb' => ''									// fallback function (if there is one)
					)); ?>
				</nav>
      </header>
			<nav id="nav-responsive">
				<?php wp_nav_menu(array(
					'container' => false,								// remove nav container
					'container_class' => '',						// class of container (should you choose to use it)
					'menu' => __('Responsive', 'exonym'),	  // nav name
					'menu_class' => '',									// adding custom nav class
					'theme_location' => 'responsive-menu',	// where it's located in the theme
					'before' => '',											// before the menu
					'after' => '',											// after the menu
					'link_before' => '',								// before each link
					'link_after' => '',									// after each link
					'depth' => 0,												// limit the depth of the nav
					'fallback_cb' => ''									// fallback function (if there is one)
				)); ?>
				<div id="nav-close">
					<img src="<?php echo asset_path('images/icon-close.svg'); ?>" alt="Close Navigation Icon" />
				</div>
			</nav>
			<div id="content">
