<?php
/**
 * worldカテゴリーの一覧のテンプレート
 *
 * @package WordPress
 * @subpackage ji-no-theme
 * @since 1.0
 * @version 1.1
 */?>

<?php
#カテゴリー内の投稿をタグごとにまとめる
if ( have_posts() ){
    $tags = array();
    while ( have_posts() ){
        the_post();
        $post_tags = get_the_tags();
        foreach ( $post_tags as $tag){
            $tag_title = $tag->name;
            if ( !array_key_exists($tag_title,$tags) ){
                $tags[$tag_title] = array();
            }
            $post = array( 'title' => the_title('','',false),
                           'url' => esc_url( get_permalink() ) );
            array_push($tags[$tag_title],$post);
        }
    }
}?>

<?php
#タグごとに記事を表示
ksort($tags);
foreach( $tags as $tag_title => $posts ){
    echo '<h2>' . $tag_title . '</h2>';
    echo '<ul>';
    foreach( $posts as $post) {
        echo '<li><h3><a href="' . $post['url'] . '">' . $post['title'] . '</a></h3></li>';
    }
    echo '</ul>';
}?>
