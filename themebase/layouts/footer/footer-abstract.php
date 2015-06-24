
  
<footer id="colophon" class="site-footer mainfooter" role="contentinfo">
</footer><!-- #colophon -->
    <div class="site-info header-abstract">
        <div class="site-branding">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo wp_get_attachment_image( get_option( 'logo_img' ), 'full', false, array( 'alt' => trim(strip_tags( get_post_meta( get_option( 'logo_img' ), '_wp_attachment_image_alt', true) )), 'id' => 'logo' ) ); ?></a>
			
			 <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		  </div><!-- .site-branding -->	
    </div><!-- .site-info -->


<nav id="site-navigation" class="main-navigation nav-abstract" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'themebase' ); ?></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->