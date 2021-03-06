<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package portfolio
 */

get_header(); ?>


    <main>
        <?php if( have_posts() ) : ?>
            <header>
                <h2><?php the_title(); ?></h2>
            </header>

            <?php while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', 'page' );
            endwhile; ?>

            <footer>
                <?php // pagination ?>
            </footer>
        <?php else :
            get_template_part( 'template-parts/content', 'none' ); ?>
        <?php endif; ?>
    </main>


<?php
get_sidebar();
get_footer();
