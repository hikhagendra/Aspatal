<?php
    /* 
        This is the template for the footer.
        @package aspataltheme
    */
?>

        <footer class="aspatal-footer container-fluid px-5 pt-5">
            <div class="row main-footer">
                <div class="col-3 footer-one px-3">
                    <img src="<?php echo get_option( 'logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    <p class="caption"><?php echo get_option( 'full_address' ); ?></p>

                    <div class="contact-info">
                        <p><b>Tel: </b><?php echo get_option( 'phone' ); ?></p>
                        <p><b>Mail: </b><?php echo get_option( 'email' ); ?></p>
                    </div>

                    <div class="social-links">
                        <?php if ( get_option( 'facebook_link' ) ) : ?>
                            <a href="<?php echo get_option( 'facebook_link' ); ?>">
                                <i class="bi bi-facebook"></i>
                            </a>
                        <?php endif; ?>

                        <?php if ( get_option( 'youtube_link' ) ) : ?>
                            <a href="<?php echo get_option( 'youtube_link' ); ?>">
                                <i class="bi bi-youtube"></i>
                            </a>
                        <?php endif; ?>

                        <?php if ( get_option( 'twitter_link' ) ) : ?>
                            <a href="<?php echo get_option( 'twitter_link' ); ?>">
                                <i class="bi bi-twitter"></i>
                            </a>
                        <?php endif; ?>

                        <?php if ( get_option( 'linkedin_link' ) ) : ?>
                            <a href="<?php echo get_option( 'linkedin_link' ); ?>">
                                <i class="bi bi-linkedin"></i>
                            </a>
                        <?php endif; ?>

                        <?php if ( get_option( 'email' ) ) : ?>
                            <a href="mailto:<?php echo get_option( 'email' ); ?>">
                                <i class="bi bi-envelope"></i>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-3 footer-two px-3">
                    <?php if ( is_active_sidebar( 'footer-one' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-one' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-3 footer-three px-3">
                    <?php if ( is_active_sidebar( 'footer-two' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-two' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-3 footer-four px-3">
                    <?php if ( is_active_sidebar( 'footer-three' ) ) : ?>
                        <?php dynamic_sidebar( 'footer-three' ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row bottom-footer">
                <div class="copyright col-6">
                    <p><?php echo get_option( 'copyright_text' ); ?></p>
                </div>
                <div class="footer-menu col-6 text-end">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    =>  'footer',
                            'container'         =>  false,
                            'menu_class'        =>  'footer-menu'
                        ) );
                    ?>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>
    </body>
</html>