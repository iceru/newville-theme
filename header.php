<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Google Tag Manager -->
	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-WLB5VC5');
	</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<?php
	$navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body onload="location.hash='';" <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WLB5VC5" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>

	<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'newville' ); ?></a>

	<div id="wrapper">
		<header>
			<nav id="header"
				class="navbar navbar-expand-md <?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' fixed-top'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' fixed-bottom'; endif; if ( is_home() || is_front_page() ) : echo ' home'; endif; ?>">
				<div class="container">
					<div id="navbar" class="collapse navbar-collapse">
						<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu' => 'menu_left',
								'container'      => '',
								'menu_class'     => 'navbar-nav me-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
					?>
					</div><!-- /.navbar-collapse -->
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"
						title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>"
							alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
					</a>

					<a class="hamburger" data-bs-toggle="offcanvas" href="#sidebar" role="button"
						aria-controls="sidebar">
						<img src="<?php bloginfo('template_directory');?>/images/bars-solid.svg" alt="Menu">
					</a>

					<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
						aria-controls="navbar" aria-expanded="false"
						aria-label="<?php esc_attr_e( 'Toggle navigation', 'newville' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button> -->

					<div id="navbar" class="collapse navbar-collapse">
						<?php
						// Loading WordPress Custom Menu (theme_location).
						wp_nav_menu(
							array(
								'menu' => 'menu_right',
								'container'      => '',
								'menu_class'     => 'navbar-nav me-auto',
								'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);

						if ( '1' === $search_enabled ) :
					?>
						<form class="search-form my-2 my-lg-0" role="search" method="get"
							action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<div class="input-group">
								<input type="text" name="s" class="form-control"
									placeholder="<?php esc_attr_e( 'Search', 'newville' ); ?>"
									title="<?php esc_attr_e( 'Search', 'newville' ); ?>" />
								<button type="submit" name="submit"
									class="btn btn-outline-secondary"><?php esc_html_e( 'Search', 'newville' ); ?></button>
							</div>
						</form>
						<?php
						endif;
					?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav><!-- /#header -->
		</header>


		<script>
			// The debounce function receives our function as a parameter
			const debounce = (fn) => {

				// This holds the requestAnimationFrame reference, so we can cancel it if we wish
				let frame;

				// The debounce function returns a new function that can receive a variable number of arguments
				return (...params) => {

					// If the frame variable has been defined, clear it now, and queue for next frame
					if (frame) {
						cancelAnimationFrame(frame);
					}

					// Queue our function call for the next frame
					frame = requestAnimationFrame(() => {

						// Call our function and pass any params we received
						fn(...params);
					});

				}
			};


			// Reads out the scroll position and stores it in the data attribute
			// so we can use it in our stylesheets
			const storeScroll = () => {
				document.documentElement.dataset.scroll = window.scrollY;
			}

			// Listen for new scroll events, here we debounce our `storeScroll` function
			document.addEventListener('scroll', debounce(storeScroll), {
				passive: true
			});

			// Update scroll position for first time
			storeScroll();
		</script>

		<main id="main" class="container-fluid"
			<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 0;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
			<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
					<?php
			endif;
		?>