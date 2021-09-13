<?php
/**
 * The template for displaying the about page.
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
        
            $greeting = get_field('greeting');
            $word_change = get_field('word_change');

			?>
        
            <div class="welcome-message">
                <div class="content-wrapper">
                    <h1><?php echo $greeting; ?></h1>
                    <?php the_content(); ?>
<!-- CODE OUT WORD CHANGE!!!-->
                </div>
            </div>
        <?php endwhile; ?>
        
        <?php query_posts('pagename=Our-Process'); ?>
        <?php while (have_posts()) : the_post();
        
            $page_link = get_permalink(); ?>
        
        <?php endwhile; ?>
        <?php wp_reset_query(); ?>
        
        
        
        <div class="service-summary">
            <div class="content-wrapper">
                <?php query_posts('post_type=services_offered&order=ASC'); ?>
                <h1>Services</h1>
                <div class="summary-container">
                    <?php while (have_posts()): the_post(); 
                    $summary = get_field('service_summary');
                    $serv_img = get_field('service_image');
                    $size = "full";
                    ?>

                    <div class="service-short">
                        <a href="<?php echo $page_link; ?>"> 
                            <div class="service-img">
                                <?php if($serv_img){
                                        echo    wp_get_attachment_image    ($serv_img, $size);
                                } ?>
                            </div>
                        </a>
                        <h2><?php the_title();?></h2>
                        <p><?php echo $summary ?></p>
                    </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                
            </div>
        </div>
        
        
        
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
