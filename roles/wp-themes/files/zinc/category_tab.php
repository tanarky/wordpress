<ul class="nav nav-tabs">
  <li role="presentation" class="active">
    <a href="/">HOME</a>
  </li>
<?php
$categories = get_the_category();
$separator = ' ';
$output = '';
if($categories){

    foreach($categories as $category){
        $output .= '<li role="presentation">';
        $output .= '<a href="'. get_category_link($category->term_id). '">';
        $output .= $category->name;
        $output .= '</a></li>';
    }
}
echo $output;
?>
</ul>
