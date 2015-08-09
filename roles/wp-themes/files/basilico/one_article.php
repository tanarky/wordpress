<?php
if(have_posts()){
   while(have_posts()){
       the_post();
?>
<div class="row" style="background-color:#f8f8f8">
  <div class="col-lg-10">
    <div class="row">
      <div class="col-lg-12">
        <div class="article-heading" style="margin-top:20px;">
          <div class="media">
            <div class="media-body">
              <h1 style="margin:5px 0"><?php the_title();?>ああああああああああああああああああああああああああ</h1>
              <div style="font-size:16px;"><?php the_time('Y/m/d');?></div>
            </div>
            <div class="media-right">
              <a href="#">
                <?php echo the_post_thumbnail('thumb150');?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <hr>
        <div style="font-size:16px;line-height:1.6em">
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

<div class="row" style="background-color:#f8f8f8">
  <div class="col-lg-10">
    <div class="row">
  <div class="col-lg-6">
    <div style="text-align:center;margin-top:10px;padding-top:10px">
      <img src="http://placehold.it/300x250">
    </div>
    <h3>タグ</h3>
    <div style="padding:0 10px;">
      <span class="btn btn-info">子猫</span>
      <span class="btn btn-info">動画</span>
      <span class="btn btn-info">爆笑</span>
      <span class="btn btn-info">癒やし</span>
      <span class="btn btn-info">まとめ</span>
      <span class="btn btn-info">短編</span>
      <span class="btn btn-info">海外</span>
    </div>

    <h3>シェア</h3>
    <div style="padding:0 10px;">
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
           href="http://twitter.com/intent/tweet?url=http://tabi-labo.com/165567/girls-sunday/&amp;text=%E5%A5%B3%E6%80%A7%E3%81%8C%E6%97%A5%E6%9B%\
9C%E6%97%A5%E3%81%AB%E3%82%84%E3%82%8A%E3%81%8C%E3%81%A1%E3%81%AA%E3%80%8C45%E3%81%AE%E3%82%B3%E3%83%88%E3%80%8D%E3%80%82%E3%82%B8%E3%83%A3%E3%83%BC%E3%82%B8\
%E3%81%AB%E7%9D%80%E6%9B%BF%E3%81%88%E3%82%8B%E3%81%93%E3%81%A8%E3%82%92%E3%80%8C%E9%83%A8%E6%B4%BB%E3%80%8D%E3%81%A8%E5%91%BC%E3%81%B6%EF%BC%9F&amp;via=tabi\
labo_news" class="share_tw">
          <img alt="twitter" src="<?php echo get_template_directory_uri(); ?>/images/btn_t.png" style="height:63px;">
        </a>
        <div id="fb-root" style="margin-left:10px;"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4&appId=145000258915381";
          fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like" data-layout="box_count"></div>
      </div>
    </div>
  </div>
  <div class="col-lg-5">
    <div style="text-align:center;margin-top:10px;padding-top:10px">
      <img src="http://placehold.it/300x250">
    </div>

    <h3>関連記事</h3>
    <div style="padding:0 10px;">
      <ol>
        <li>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img alt="64x64" src="http://placehold.it/64x64">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </li>
        <li>
          <div class="media">
            <div class="media-left">
              <a href="#">
                <img alt="64x64" src="http://placehold.it/64x64">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">Media heading</h4>
              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
            </div>
          </div>
        </li>
      </ol>
    </div>
  </div>
</div>
  </div>
</div>
