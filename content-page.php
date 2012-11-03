<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

    <!-- <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->

            <header class="page-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <!-- .entry-header -->
            <div class="ArticleGrid-1 LayoutWideGrid-1 TextSmall PrintLayoutHide">
                &nbsp;
            </div>
            <div class="ArticleGrid-2-4">
                <div class="Column mnemonic photoshop-color">
                    <div class="the_content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '
                        <div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>
                        ' ) ); ?>
                    </div>
                </div>
            </div><!-- ArticleGrid -->
            <!-- .entry-content -->
            <div class="entry-meta">
                <?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
    <!-- .entry-meta -->
    <!-- </article><!-- #post-<?php the_ID(); ?> -->

