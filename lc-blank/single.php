<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://livecomposerplugin.com/themes/
 *
 * @package LC Blank
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="tam">
	           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 		        <?php the_content(); ?>

	           <?php endwhile; ?>
	           <?php endif; ?>
            </div>
        </main>
    </div>
<?php get_footer(); ?>
