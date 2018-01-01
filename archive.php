<?php
/**
 * ヘッダーのリンクをクリックすると表示される基本的なページ
 *
 * @package WordPress
 * @subpackage ji-no-theme
 * @since 1.0
 * @version 1.1
 */

get_header(); ?>

<div class="wrap">

	<?php
    if ( have_posts() ) :
    ?>
	<header class="page-header">
        <h1 class="page-title">
	        <?php
            #カテゴリー名タイトルとして表示
            $cat_id = get_query_var( "cat" );
            $cats = get_the_category();
            foreach ( $cats as $cat ) :
                if ( $cat->term_id === $cat_id ) :
                    echo $cat->name;
                endif;
            endforeach;
			?>
        </h1>
	</header><!-- .page-header -->
	<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
     	    <?php
            #投稿の有無を判定する。
            #なかった場合は、coming soonを表示。
            #あった場合は、template-parts/archive/content-{カテゴリー}を表示する。
		    if ( have_posts() ) :
                $cats = get_the_category();
                get_template_part( 'template-parts/archive/content', $cats[0]->name);
		    else :
    			get_template_part( 'template-parts/archive/content', 'none' );
    		endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
