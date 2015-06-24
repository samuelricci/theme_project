<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'themebase' ); ?></a>

	<header id="masthead" class="site-header headerlargeright" role="banner">
		<div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_get_attachment_image( get_option( 'logo_img' ), 'full', false, array( 'alt' => trim(strip_tags( get_post_meta( get_option( 'logo_img' ), '_wp_attachment_image_alt', true) )), 'id' => 'logo' ) ); ?></a>
			
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- .site-branding -->
  <div class="testingdiv">
    </div>
		
	</header><!-- #masthead -->

    <nav id="site-navigation" class="main-navigation navlargeright" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'themebase' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
  
	<div id="content" class="site-content largerightcontainer">
        <h1 class="site-title"><?php echo get_option( 'title_tag' ); ?></h1>