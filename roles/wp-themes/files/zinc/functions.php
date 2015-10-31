<?php
define("THEME_NAME", "zinc");

// アイキャッチサムネイル
add_theme_support('post-thumbnails');
add_image_size('thumb60',   60,  60, true);
add_image_size('thumb100', 100, 100, true);
add_image_size('thumb150', 150, 150, true);

// RSS
add_theme_support('automatic-feed-links');

// 管理画面にオリジナルのスタイルを適用
add_editor_style("style.css");	// メインのCSS
add_editor_style('editor-style.css');	// これは入れておこう
if ( ! isset( $content_width ) ) $content_width = 580;
function custom_editor_settings( $initArray ){
	$initArray['body_id'] = 'primary';	// id の場合はこれ
	$initArray['body_class'] = 'post';	// class の場合はこれ
	return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

//投稿用ファイルを読み込む
get_template_part('functions/create-thread');

//ページャー機能
function pagination($pages = '', $range = 4)
{
     $showitems = ($range * 2)+1;

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     } 

     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><span>Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link

(1)."'>&laquo; First</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;

Previous</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems

))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link

($i)."' class=\"inactive\">".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged +

1)."\">Next &rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a

href='".get_pagenum_link($pages)."'>Last &raquo;</a>";
         echo "</div>\n";
     }
}

//ヘッダーを綺麗に
remove_action( 'wp_head', 'feed_links_extra', 3 );
remove_action( 'wp_head', 'feed_links', 2 );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );

//moreリンク
function custom_content_more_link( $output ) {
    $output = preg_replace('/#more-[\d]+/i', '', $output );
    return $output;
}
add_filter( 'the_content_more_link', 'custom_content_more_link' );

//セルフピンバック禁止
function no_self_pingst( &$links ) {
    $home = home_url();
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_pingst' );

//iframeのレスポンシブ対応
function wrap_iframe_in_div($the_content) {
    $the_content = preg_replace('/< *?iframe/i', '<div class="embed-responsive embed-responsive-16by9"><iframe', $the_content);
    $the_content = preg_replace('/<\/ *?iframe *?>/i', '</iframe></div>', $the_content);
    return $the_content;
}
add_filter('the_content','wrap_iframe_in_div');


// サイドバーウィジェット
if(!function_exists('dynamic_sidebar') || !dynamic_sidebar(1)){
    register_sidebars(1,
                      array(
                          'name'=>'サイドバー',
                          'before_widget' => '',
                          'after_widget'  => '',
                          'before_title'  => '',
                          'after_title'   => '',
                      ));
}

// カスタムメニュー
register_nav_menu('global_header', 'グローバルヘッダー');

function wp_theme_customize_register($wp_customize) {
    $wp_customize->add_section(THEME_NAME. '_logo', array(
        'title'    => 'ロゴ画像',
        'priority' => 10,
    ));
    $wp_customize->add_setting(THEME_NAME. '_logo', array(
        'default'    => '',
        'type'       => 'option',
        'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'logo',
        array(
            'label'    => '画像',
            'section'  => THEME_NAME. '_logo',
            'settings' => THEME_NAME. '_logo',
        )
    ));
     
    // Color
    $wp_customize->add_section(THEME_NAME. '_section_color_theme', array(
        'title'    => 'テーマカラー',
        'priority' => 30,
    ));
	$wp_customize->add_setting(THEME_NAME. '_setting_color_main', array('default'=> '#486b00'));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,
                                       THEME_NAME. '_setting_color_main',
                                       array(
                                           'label'    => 'メインカラー',
                                           'section'  => THEME_NAME. '_section_color_theme',
                                           'settings' => THEME_NAME. '_setting_color_main',
                                       )
        )
    );
	$wp_customize->add_setting(THEME_NAME. '_setting_color_sub1', array('default'=> '#2e4600'));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,
                                       THEME_NAME. '_setting_color_sub1',
                                       array(
                                           'label'    => 'サブカラー1',
                                           'section'  => THEME_NAME. '_section_color_theme',
                                           'settings' => THEME_NAME. '_setting_color_sub1',
                                       )
        )
    );
	$wp_customize->add_setting(THEME_NAME. '_setting_color_sub2', array('default'=> '#a2c523'));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,
                                       THEME_NAME. '_setting_color_sub2',
                                       array(
                                           'label'    => 'サブカラー2',
                                           'section'  => THEME_NAME. '_section_color_theme',
                                           'settings' => THEME_NAME. '_setting_color_sub2',
                                       )
        )
    );
	$wp_customize->add_setting(THEME_NAME. '_setting_color_accent', array('default'=> '#7d4427'));
    $wp_customize->add_control(
        new WP_Customize_Color_Control($wp_customize,
                                       THEME_NAME. '_setting_color_accent',
                                       array(
                                           'label'    => 'アクセントカラー',
                                           'section'  => THEME_NAME. '_section_color_theme',
                                           'settings' => THEME_NAME. '_setting_color_accent',
                                       )
        )
    );
}
add_action('customize_register', 'wp_theme_customize_register');
