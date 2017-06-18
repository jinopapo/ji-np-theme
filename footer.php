<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
            </div>
        </div>
    </div>

    <footer id="colophon" class="site-footer" role="contentinfo">
	<?php
	if ( has_nav_menu( 'social' ) ) : ?>
	    <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
	    <?php
		wp_nav_menu( array(
		    'theme_location' => 'social',
    		'menu_class'     => 'social-links-menu',
	        'depth'          => 1,
		    'link_before'    => '<span class="screen-reader-text">',
	   	    'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
        ) );
	    ?>
	    </nav>
	<?php endif;
    //コピーライトとかのサイト情報のテンプレート呼び出し
	get_template_part( 'template-parts/footer/site', 'info' );
	?>
    </footer>
<?php //プラグインが独自のjsを使っていたときに対応するために入れておく
wp_footer();
?>

</body>
</html>
