<?php
/**
 * The header for the child theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400;1,600&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'underscores' ); ?></a>
    
    <?php global $post; $post_slug = $post -> post_name;?>

	<header id="masthead" class="site-header <?php echo $post_slug; ?>">
        <div class="content-wrapper">
            <div class="header-content">
                <div class="site-branding">
                    <?php
                    the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                        ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <?php
                    else :
                        ?>
                        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                        <?php
                    endif;
                    $underscores_description = get_bloginfo( 'description', 'display' );
                        ?>

                </div><!-- .site-branding -->

                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'underscores' ); ?></button>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        )
                    );
                    ?>
                </nav><!-- #site-navigation -->
            </div> <!-- .header-content -->
         </div> <!-- .content-wrapper -->  
            
            <div class="page-title-hero">
               <?php
                if (is_front_page()) : ?>
                
                        <h1><?php echo get_bloginfo('name'); ?></h1>
                        <h3><?php echo get_bloginfo('description'); ?></h3>

                <?php
                elseif ( $post_slug == 'contact') :
                ?>
                <div class="contact-container">
                    <div class="content-wrapper">
                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>    
                    </div>
                </div>
                <?php elseif ( $post_slug == 'main-navigation-drop-down-menu') :
                ?>
                    <section class="error-404 not-found">
                        <div class="content-wrapper">
                             <header class="page-header">
                                <h1 class="page-title"><?php esc_html_e( 'We already tidied this area!', 'underscores' ); ?></h1>
                             </header><!-- .page-header -->


                             <div class="page-content">
                                    <p><?php esc_html_e( 'This page was recycled or donated. Use the above navigation to view other parts of our website!', 'underscores' ); ?></p>

                             </div><!-- .page-content -->
                        </div>
		              </section><!-- .error-404 -->
                
                <?php else : ?>
                
                <h1><?php the_title(); ?></h1>
                <?php endif;?>
                
           
        </div><!-- .page-title-hero -->
        
	</header><!-- #masthead -->
