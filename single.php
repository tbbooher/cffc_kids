<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>
<div class="LayoutGrid LayoutCenter ArticleGrid LayoutWideGrid LayoutP">
    <div class="LayoutRow Link">
        <div class="LayoutBreakAfter">

            <?php while ( have_posts() ) : the_post(); ?>

            <nav id="nav-single">
                <span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Previous', 'twentyeleven' ) ); ?></span>
                <span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></span>
            </nav><!-- #nav-single -->

            <?php get_template_part( 'content', 'single' ); ?>

            <?php comments_template( '', true ); ?>

            <?php endwhile; // end of the loop. ?>

        </div>
    </div>

<?php get_footer(); ?>


