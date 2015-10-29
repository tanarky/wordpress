<?php
if(have_posts()){
   while(have_posts()){
       the_post();
?>
<div class="row">
  <div class="col-lg-10">
    <div class="row">
      <div class="col-lg-12">
        <div class="article-header">
          <div class="media">
            <div class="media-left">
              <?php echo the_post_thumbnail('thumb150');?>
            </div>
            <div class="media-body">
              <h1 class="article-title"><?php the_title();?></h1>
              <div class="article-post-date">
                <span class="glyphicon glyphicon-time"></span>
                <?php the_time('Y/m/d');?>
              </div>
              <div>
                <?php
                   the_tags(
                   '<span class="btn btn-info">',
                   '</span><span class="btn btn-info">',
                   '</span>'); ?>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <hr>
        <div class="article-body">
          <?php the_content();?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
   }
}
?>

<div class="row" style="padding-top: 20px;">
  <div class="col-lg-10">
    <div class="row">
      <div class="col-lg-6">
        <div class="content-ad">
          <img src="http://placehold.it/300x250">
        </div>
        <h3>タグ</h3>
        <div>
          <?php
             the_tags(
             '<span class="btn btn-info">',
             '</span><span class="btn btn-info">',
             '</span>'); ?>
        </div>

        <h3>シェア</h3>
        <div>
          <div class="clearfix">
            <a target="_blank" onclick="ga('send', 'event', 'button_fb', 'click', '/165027/chandon-summer-bottle/')"
               href="http://www.facebook.com/sharer.php?src=bm&amp;u=http://tabi-labo.com/165027/chandon-summer-bottle/&amp;t="
               class="share_fb"
               style="background:#3b5998 none repeat scroll 0 0;height:63px;float:left;width:63px;">
              <img alt="facebook" src="<?php echo get_template_directory_uri(); ?>/images/btn_f.png" style="width:69px;height:63px;">
            </a>
            <a target="_blank"
               style="background:#00acee none repeat scroll 0 0;height:63px;float:left;"
               onclick="ga('send', 'event', 'button_tw', 'click', '/165567/girls-sunday/')"
               href="http://twitter.com/intent/tweet?url=http://tabi-labo.com/165567/girls-sunday/&amp;text=%E5%A5%B3%E6%80%A7%E3%81%8C%E6%97%A5%E6%9B%9C%E6%97%A5%E3%81%AB%E3%82%84%E3%82%8A%E3%81%8C%E3%81%A1%E3%81%AA%E3%80%8C45%E3%81%AE%E3%82%B3%E3%83%88%E3%80%8D%E3%80%82%E3%82%B8%E3%83%A3%E3%83%BC%E3%82%B8%E3%81%AB%E7%9D%80%E6%9B%BF%E3%81%88%E3%82%8B%E3%81%93%E3%81%A8%E3%82%92%E3%80%8C%E9%83%A8%E6%B4%BB%E3%80%8D%E3%81%A8%E5%91%BC%E3%81%B6%EF%BC%9F&amp;via=tabilabo_news" class="share_tw">
              <img alt="twitter" src="<?php echo get_template_directory_uri(); ?>/images/btn_t.png" style="height:63px;">
            </a>
            <div id="fb-root" style="margin-left:10px;"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=145000258915381";
              //fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like" data-layout="box_count"></div>
          </div>
          <br><br>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="content-ad">
          <img src="http://placehold.it/300x250">
        </div>

<?php
// 関連記事
// 同一カテゴリから新着記事をひっぱってきてる
// TODO: $post == NULL の時の対応
$categories = get_the_category($post->ID);
$category_ids = array();
foreach($categories as $c){
    array_push($category_ids, $c->cat_ID);
}
$args = array(
    'post__not_in'  => array($post->ID),
    'posts_per_page'=> 10,
    'category__in'  => $category_ids,
    'orderby'       => 'rand',
);
$st_query = new WP_Query($args);
if($st_query->have_posts()){
    echo '<h3>関連記事</h3><div><ol>';
    while($st_query->have_posts()){
        $st_query->the_post();
?>
        <li>
          <div class="media">
            <div class="media-left">
              <a href="<?php the_permalink();?>">
                <?php the_post_thumbnail('thumb100');?>
              </a>
            </div>
            <div class="media-body">
                <a href="<?php the_permalink();?>">
                  <h4 class="media-heading"><?php the_title(); ?></h4>
                </a>
              <?php the_excerpt();?>
            </div>
          </div>
        </li>
<?php
    }
    echo '</ol></div>';
}
?>
  </div>
</div>
  </div>
</div>
