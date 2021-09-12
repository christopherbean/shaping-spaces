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
        
            $about = get_field('about_me');
            $image = get_field('self_portrait');
            $size = "full";

//			get_template_part( 'template-parts/content', 'page' );
			?>
        
            <div class="about-philosophy">
                <div class="content-wrapper">
                    <?php the_content(); ?>
                </div>
            </div>
        
        <div class="about-section">
            <div class="about-wrapper">
                <div class="about-text">
                <p><?php echo $about; ?></p>
                </div>
                <div class="self-portrait">
                <?php if($image){
                        echo wp_get_attachment_image($image, $size);
                }?>
                </div>
            </div>
        </div>
        
        <?php endwhile; ?>
        
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
