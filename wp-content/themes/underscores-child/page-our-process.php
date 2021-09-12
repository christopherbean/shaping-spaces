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
            
            $title_1 = get_field('title_1');
            $title_2 = get_field('title_2');
            $title_3 = get_field('title_3');
            $proc_1 = get_field('process_field_1');
            $proc_2 = get_field('process_field_2');
            $proc_3 = get_field('process_field_3');
        
			?>
        
        <section class="process-info">
            <div class="content-wrapper">
                    <?php the_content(); ?>
            </div>
        </section>
        
        <section class="process-exp">
            <div class="content-wrapper">
                <div class="process-cat reveal">
                    <h1><?php echo $title_1; ?></h1>
                    
                    <p><?php echo $proc_1; ?></p>
                </div>
                <div class="process-cat reveal">
                    <h1><?php echo $title_2; ?></h1>
                    
                    <p><?php echo $proc_2; ?></p>
                </div>
                <div class="process-cat reveal">
                    <h1><?php echo $title_3; ?></h1>
                    
                    <p><?php echo $proc_3; ?></p>
                   
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