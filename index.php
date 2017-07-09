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
    <h2>What's new</h2>
    <ul class="update">
    <?php
    $args = array( 'posts_per_page' => 5 );
    $myposts = get_posts( $args );
    if(count($myposts) > 0) :
        foreach ( $myposts as $post ) :
            setup_postdata( $post ); ?>
	        <li>
                <div class = "date"><?php the_time('m/d'); ?></div>
                <div class = "title">
                    <?php
                    $cat = get_the_category($post->id);
                    echo $cat[0]->cat_name;
                    ?>
                </div>
                <a href="<?php the_permalink(); ?>">
                     :<?php the_title(); ?>追加
                </a>
            </li>
        <?php endforeach;
        wp_reset_postdata();
    else:?>
    comming soon
    <?php
    endif;
    ?>
    </ul>
</main>

<?php get_footer();
