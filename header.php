<?php
    /* 
        This is the template for the header.
        @package aspataltheme
    */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <title><?php bloginfo( 'name' ); wp_title(); ?></title>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11" >
        <?php if( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>

        <header class="container-fluid">
            <div class="row aspatal-top-header border-bottom px-5 py-2">
                <div class="col-6">
                    <?php
                        if ( get_option( 'address' ) ) :
                    ?>
                    <div class="aspatal-address">
                        <i class="bi bi-geo-alt"></i>
                        <span><?php echo get_option( 'address' ); ?></span>
                    </div>
                    <?php endif; ?>

                    <?php
                        if ( get_option( 'email' ) ) :
                    ?>
                    <div class="aspatal-email">
                        <a href="mailto:<?php echo get_option( 'email' ); ?>">
                            <i class="bi bi-envelope"></i>
                            <span><?php echo get_option( 'email' ); ?></span>
                        </a>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-6">
                    <div class="cta-button text-end">
                        <a href="tel:<?php echo get_option( 'phone' ); ?>">
                            <button type="button" class="btn btn-outline-primary btn-sm rounded-pill px-3">
                                <i class="bi bi-telephone"></i>
                                <?php echo get_option( 'phone' ); ?>
                            </button>
                        </a>
                    </div>
                </div>
            </div> <!-- .top-header -->

            <div class="row aspatal-main-header px-5 py-3">
                <div class="col-3 branding">
                    <a href="<?php echo get_site_url(); ?>">
                        <img src="<?php echo get_option( 'logo' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
                    </a>
                </div>
                <div class="col-9 text-end">
                    <?php
                        wp_nav_menu( array(
                            'theme_location'    =>  'primary',
                            'container'         =>  false,
                            'menu_class'        =>  'nav-menu',
                            'walker'            =>  new Aspatal_Walker_Nav_Primary()
                        ) );
                    ?>
                </div>
            </div> <!-- .main-header -->
        </header>