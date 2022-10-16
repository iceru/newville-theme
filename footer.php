			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
			</div><!-- /.col -->

			<?php
						get_sidebar();
					?>

			</div><!-- /.row -->
			<?php
				endif;
			?>
			</main><!-- /#main -->
			<footer id="footer">
				<div class="background">
					<img src="<?php bloginfo('template_directory');?>/images/bg-footer.png" alt="Footer">
				</div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="logo">
								<img src="<?php bloginfo('template_directory');?>/images/logo-white.png" alt="Newville">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 col-lg-8 mb-4 mb-lg-0">
							<div class="marketing">
								<div class="title">
									Marketing Gallery
								</div>
								<div class="address">
									M55F+G8W, Cibatu, Cikarang Sel., Kabupaten Bekasi, Jawa Barat
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="title">Social</div>
							<div class="socials">
								<div class="icon">
									<a href="https://www.instagram.com/newville.id/" target="_blank">
										<img src="<?php bloginfo('template_directory');?>/images/instagram.png"
											alt="Instagram Newville">
									</a>
								</div>
								<div class="icon">
									<a href="https://web.facebook.com/profile.php?id=100086262311561" target="_blank">
										<img src="<?php bloginfo('template_directory');?>/images/facebook.png"
											alt="Facebook Newville">
									</a>
								</div>
							</div>
						</div>
						<div class="col-6 col-lg-2">
							<div class="small">Presented by</div>
							<div class="logo-lippo">
								<img src="<?php bloginfo('template_directory');?>/images/lippo-cikarang.png"
									alt="Lippo Cikarang">
							</div>
						</div>
					</div>
					<div class="row disclaimer">
						<div class="col-12 col-lg-8">
							<div class="text">
								DISCLAIMER • While every reasonable care has been taken in the preparation of this website, the
								developer and its agent cannot be held responsible for any inaccuracies.
								All statements are believed to be correct but are not to be regarded as statements or
								representations
								of fact.
							</div>
						</div>
					</div>
					<div class="row copyright">
						<div class="col-12">
							<p><?php printf( esc_html__( '%2$s &copy; %1$s. All rights reserved.', 'newville' ), date_i18n( 'Y' ), 'Lippo Cikarang' ); ?>
							</p>
						</div>
					</div>

					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'col-md-6',
									'fallback_cb'     => '',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
									//'fallback_cb'    => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
								)
							);
						endif;

						if ( is_active_sidebar( 'third_widget_area' ) ) :
					?>
					<div class="col-md-12">
						<?php
								dynamic_sidebar( 'third_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
						<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>"
								class="badge badge-secondary"><?php esc_html_e( 'Edit', 'newville' ); ?></a></span>
						<!-- Show Edit Widget link -->
						<?php
								endif;
							?>
					</div>
					<?php
						endif;
					?>
				</div><!-- /.row -->
				</div><!-- /.container -->
			</footer><!-- /#footer -->
			</div><!-- /#wrapper -->
			<?php
		wp_footer();
	?>
			</body>

			</html>