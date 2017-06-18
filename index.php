<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="main" class="site-main" role="main">
    <h2></h2>
    <ul>
    <?php
    $args = array( 'posts_per_page' => 5, 'category' => 1 );
    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) :
        setup_postdata( $post ); ?>
	    <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>
    <?php endforeach;
    wp_reset_postdata(); ?>
    </ul>
</main>

<?php get_footer();
