<!--BLOG SECTION-->
<section id="blog" class="padding-top padding-bottom-half" style="margin-top: -50px;">
  <div class="container">
    <div class="text-center"><h2 class="heading heading_space text">Galeri Video<span class="divider-center"></span></h2></div>
    <div class="row">
      <?php foreach($galerivideo->result() as $vid){ ?>
      <div class="col-md-4 col-sm-6 content_wrap heading_space wow fadeIn" data-wow-delay="300ms">
        <div class="image">
          <iframe class="img-responsive border_radius" src="<?php echo embedyoutube($vid->link_video); ?>" frameborder="0" allowfullscreen style="width: 358px; height: 234px;"></iframe>
        </div>
        <div class="news_box border_radius text-center">
          <ul class="commment">
            <li><a href="#."><i class="fa fa-calendar"></i> <?php echo tglwaktu($vid->tglinput_video); ?></a></li>
          </ul>
        </div>
      </div>
      <?php } ?>
    </div>
    <hr>
    <div class="pager_nav wow fadeIn" data-wow-delay="300ms">
      <ul class="pagination">
        <?php echo $pagination; ?>
      </ul>
    </div>
  </div>
</section>