<h3>おすすめページ</h3>
<div class="link-menu">
<?php
$footer_tags = wp_nav_menu(
    array(
        'container'  => '',
        'theme_location' => 'footer_tags',
        'menu_class' => 'nav nav-pills nav-stacked',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'echo'       => false
    )
);
$footer_tags = preg_replace('/li id=".*?"/', 'li', $footer_tags);
$footer_tags = preg_replace('/ current_page_item/', '', $footer_tags);
$footer_tags = preg_replace('/ current-menu-item/', ' active', $footer_tags);
$footer_tags = preg_replace('/ menu-item[^\s"]*/', '', $footer_tags);
$footer_tags = preg_replace('/menu-item\s?/', '', $footer_tags);
echo $footer_tags;
//echo '<br><br>';
//echo '<pre>';
//echo htmlspecialchars($footer_tags);
//echo '</pre>';
?>
</div>
