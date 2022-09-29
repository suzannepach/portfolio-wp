<?php
/**
 * The template for displaying the projects archive
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package suzannepach-portfolio-wp
 */

get_header();
?>

	<main id="primary" class="site-main site-content">

        <div class="main-content" role="main">
            <?php while ( have_posts() ) : the_post(); 
                $services = get_field('skills');
                $image_1 = get_field('image_1');
                $size = "full";
            ?>
                <article class="case-study clearfix">
                    <aside class="case-study-sidebar">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
                        <h4><span><?php echo $skills; ?></span></h4>

                        <?php the_excerpt(); ?>

                        <p><a href="<?php the_permalink(); ?>" class="read-more-link">View Project &rsaquo;</a></p>
                    </aside>
                    <div class="case-study-images">
                        <a href="<?php the_permalink(); ?>">
                            <?php if($image_1) { 
                                echo wp_get_attachment_image( $image_1, $size );
                            } ?>
                        </a>
                    </div>
                </article>
            <?php endwhile; // end of the loop. ?>
        </div><!-- .main-content -->

	</main><!-- #main -->

<?php
get_footer();
?>