<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php wp_body_open(); ?>

	<?php do_action('storefront_before_site'); ?>

	<div id="page" class="hfeed site">
		<?php do_action('storefront_before_header'); ?>

		<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
			<div class="container">
				<nav class="navigation">
					<a href="<?php echo site_url(); ?>">
						<img src="<?php echo get_theme_file_uri('assets/src/images/logo.webp'); ?>" alt="Logo"
							class="navigation__logo">
					</a>
					<div class="menu-header-menu-container">
						<div class="menu-header-menu">
							<ul class="menu">
								<div class="dropdown">
									<li class="menu-item">
										<a href="javascript:void(0);">Нормативни актове</a>
									</li>
									<div class="dropdown__content">
										<?php
										$page = get_page_by_path('normative-acts');  // Replace 'your-page-slug' with the actual slug of the page
										if ($page) {
											$page_id = $page->ID;
										}

										$child_pages = get_pages(
											array(
												'sort_column' => 'menu_order',
												'child_of' => $page_id,
											)
										);

										if (!empty($child_pages)) {
											echo '<ul>';
											foreach ($child_pages as $child_page) {
												echo '<li><a href="' . get_permalink($child_page->ID) . '">' . esc_html($child_page->post_title) . '</a></li>';
											}
											echo '</ul>';
										} else {
											echo 'Няма открити страници';
										}
										?>
									</div>
								</div>
								<div class="dropdown">
									<li class="menu-item">
										<a href="javascript:void(0);">Проекти</a>
									</li>
									<div class="dropdown__content">
										<?php
										$page = get_page_by_path('projects');  // Replace 'your-page-slug' with the actual slug of the page
										if ($page) {
											$page_id = $page->ID;
										}

										$child_pages = get_pages(
											array(
												'sort_column' => 'menu_order',
												'child_of' => $page_id,
											)
										);

										if (!empty($child_pages)) {
											echo '<ul>';
											foreach ($child_pages as $child_page) {
												echo '<li><a href="' . get_permalink($child_page->ID) . '">' . esc_html($child_page->post_title) . '</a></li>';
											}
											echo '</ul>';
										} else {
											echo 'Няма открити страници.';
										}
										?>
									</div>
								</div>
								<div class="dropdown">
									<li class="menu-item">
										<a href="javascript:void(0);">Гражданска власт</a>
									</li>
									<div class="dropdown__content">
										<?php
										$page = get_page_by_path('civil-authority');  // Replace 'your-page-slug' with the actual slug of the page
										if ($page) {
											$page_id = $page->ID;
										}

										$child_pages = get_pages(
											array(
												'sort_column' => 'menu_order',
												'child_of' => $page_id,
											)
										);

										if (!empty($child_pages)) {
											echo '<ul>';
											foreach ($child_pages as $child_page) {
												echo '<li><a href="' . get_permalink($child_page->ID) . '">' . esc_html($child_page->post_title) . '</a></li>';
											}
											echo '</ul>';
										} else {
											echo 'Няма открити страници.';
										}
										?>
									</div>
								</div>
								<li class="menu-item">
									<a href="<?php echo site_url('/contacts'); ?>">Контакти</a>
								</li>
							</ul>
						</div>
					</div>
					<a href="<?php echo site_url('/membership'); ?>" class="btn btn--color">Членство</a>

					<!-- <div class="menu-header-menu-container sidebar">
						<div class="menu-header-menu">
							<span class="icon icon-x">&times;</span>
							<ul class="sidebar-menu-list">
								<div class="dropdown dropdown-responsive">
									<li class="menu-item sidebar-li"><a href="javascript:void(0);">Дестинации</a>
									</li>
									<div class="dropdown__content-responsive">
										<?php wp_list_categories(
											array(
												'title_li' => '',
												'child_of' => 10,
											)
										); ?>
									</div>
								</div>
								<div class="dropdown dropdown-responsive-2">
									<li class="menu-item sidebar-li"><a href="javascript:void(0)">Избрани
											пътешествия</a>
									</li>
									<div class="dropdown__content-responsive-2">
										<?php wp_list_categories(
											array(
												'title_li' => '',
												'child_of' => 11,
											)
										); ?>
									</div>
								</div>
								<li class="menu-item sidebar-li"><a
										href="<?php echo site_url('/avtopark'); ?>">Автобусен
										транспорт</a>
								</li>
								<li class="menu-item sidebar-li"><a href="<?php echo site_url('/za-nas'); ?>">За нас</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="hamburger-menu hidden-cross">
						<i class="fa-solid fa-bars"></i>
					</div> -->
				</nav>
			</div>
		</header><!-- #masthead -->

		<?php
		/**
		 * Functions hooked in to storefront_before_content
		 *
		 * @hooked storefront_header_widget_region - 10
		 * @hooked woocommerce_breadcrumb - 10
		 */
		do_action('storefront_before_content');
		?>

		<div id="content" class="site-content" tabindex="-1">

			<?php
			do_action('storefront_content_top');
