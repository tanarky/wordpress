<?php

get_header();
get_template_part('category_tab');
get_template_part('itiran');
get_footer();

//<div id="content" class="clearfix">
//  <div id="contentInner">
//    <main>
//      <article>
//          <h2>「
//            <?php
//               if(is_category()){
//                   single_cat_title();
//               }
//               elseif(is_tag()){
//                   single_tag_title();
//               }
//               elseif(is_tax()){
//                   single_term_title();
//               }
//               elseif(is_day()){
//                   echo '日別アーカイブ：'. get_the_time('Y年m月d日');
//               }
//               elseif(is_month()){
//                   echo '月別アーカイブ：'. get_the_time('Y年m月');
//               }
//               elseif(is_year()){
//                   echo '年別アーカイブ：'. get_the_time('Y年');
//               }
//               elseif(is_author()){
//                   echo '投稿者アーカイブ：'. esc_html(get_queried_object()->display_name);
//               }
//               elseif(isset($_GET['paged']) && !empty($_GET['paged'])){
//                   echo 'ブログアーカイブ';
//               }
//            ?>
//            」 一覧 
//          </h2>
//          <?php
//             get_template_part('itiran');
//             if (function_exists("pagination")) {
//                 pagination($wp_query->max_num_pages);
//             }?>
//      </article>
//    </main>
//  </div>
//</div>


