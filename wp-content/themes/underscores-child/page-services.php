<?php
/**
 * The template for displaying the Services page.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
        
            $serv_incl = get_field('services_included_title');
            $serv_1 = get_field('services_included_1');
            $serv_2 = get_field('services_included_2');

			?>
        
        <section class="services-info">
            <div class="content-wrapper">
                    <?php the_content(); ?>
            </div>
        </section>
        
        <section class="service-categories">
            <div class="content-wrapper">
                <div class="featured-service">
                    <?php query_posts('post_type=services_offered&order=ASC'); ?>
                    <?php while ( have_posts()) : the_post();
                      $sub_title_1 = get_field('sub_service_1_title');
                      $sub_title_2 = get_field('sub_service_2_title');
                      $sub_title_3 = get_field('sub_service_3_title');
                      $sub_title_4 = get_field('sub_service_4_title');
                      $sub_serv_1 = get_field('sub_service_1');
                      $sub_serv_2 = get_field('sub_service_2');
                      $sub_serv_3 = get_field('sub_service_3');
                      $sub_serv_4 = get_field('sub_service_4');
                    ?>
                    
                    <div class="main-service reveal">
                        <h1><?php echo the_title(); ?></h1>
                        <p><?php echo the_content(); ?></p>
                        
                        <div class="sub-services">
                            
                            <?php if($sub_title_1): ?>
                            <div class="sub">
                                <h3><?php echo $sub_title_1; ?></h3>
                                <p><?php echo $sub_serv_1; ?></p>
                            </div>
                            <?php endif; ?>
                           
                   
                            <?php if($sub_title_2): ?>
                            <div class="sub">
                                <h3><?php echo $sub_title_2; ?></h3>
                                <p><?php echo $sub_serv_2; ?></p>
                            </div>
                            <?php endif; ?>
                          
                            <?php if($sub_title_3): ?>
                            <div class="sub">
                                <h3><?php echo $sub_title_3; ?></h3>
                                <p><?php echo $sub_serv_3; ?></p>
                            </div>
                            <?php endif; ?>
                          
                            <?php if($sub_title_4): ?>
                            <div class="sub">
                                <h3><?php echo $sub_title_4; ?></h3>
                                <p><?php echo $sub_serv_4; ?></p>
                            </div>
                            <?php endif; ?>
                            
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </section>
        <?php endwhile; ?>
        
        <section id="testimonials">
            <?php echo do_shortcode ('[smartslider3 slider="2"]'); ?>
            
        </section>
        <section id="contact-section">
            <?php if(is_active_sidebar('sidebar-2')): ?>
                <div id="contact-sidebar" class="chat-container">
                    <div class="content-wrapper">
                        <?php dynamic_sidebar('sidebar-2'); ?>
                        <?php query_posts('pagename=Contact'); ?>
                        <?php while (have_posts()): the_post(); ?>
                        <div class="contact-btn-link">
                            <a href="<?php the_permalink(); ?>" class="chat-btn">Get Organized</a>
                        </div>
                        <?php endwhile; //end of loop ?>
                </div>
            </div>
            <?php endif; ?>
        </section>
	</main><!-- #main -->

<?php

get_footer();