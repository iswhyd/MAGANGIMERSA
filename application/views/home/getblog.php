<?php if($getblog->num_rows() == 0) { redirect(base_url('notfound')); } ?>
<?php foreach($getblog->result() as $detail); ?>
<!--BLOG SECTION-->
<section id="blog" class="padding-bottom-half padding-top" style="margin-top: -50px;">
 <div class="container">
     <div class="row">
      <div class="col-md-9 col-sm-8 wow fadeIn" data-wow-delay="300ms">
        
        <article class="blog_item padding-bottom-half heading_space">
          <div class="image bottom25">
            <img src="<?php echo base_url($detail->foto_blog); ?>" alt="blog" style="height: 370px;">
          </div>
          <h3 class="heading heading_space"><?php echo $detail->judul_blog; ?><span class="divider-left"></span></h3>
          <ul class="comment">
            <li><a href="#."><i class="fa fa-calendar"></i> <?php echo tglwaktu($detail->tglinput_blog); ?></a></li>
            <li><a href="#."><i class="fa fa-tag"></i> <?php echo $detail->nama_kategoriblog; ?></a></li>
            
          </ul>
          <p class="margin10"><?php echo $detail->isi_blog; ?></p>
            
          <strong>Bagikan Artikel Ini :</strong>
          <br>
          <br>
          <p class="pull-left">
            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
          </p>
        </article>
        <article>
        </article>
        <!--
        <article>
        <h3 class="heading bottom25">1 Komentar<span class="divider-left"></span></h3>
        <div class="profile_border">
          <div class="profile top20 bottom20">
            <div class="profile_text">
              <h5><strong>JOHN PARKER</strong>  -  <span> Great for Starters</span></h5>
              <ul class="comment">
                 <li><a href="#.">Jan 28, 2016 - 10:07 pm</a></li>
              </ul>
              <p>Vivamus bibendum nibh in dolor pharetra, a euismod nulla dignissim. Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium.</p>
            </div>
          </div>
        </div>
        <form class="findus heading_space">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Name" required>
        </div>
        <div class="form-group">
          <input type="email" class="form-control" placeholder="Email" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Website" required>
        </div>
        <textarea placeholder="Comment"></textarea>
        <button type="submit" class="btn_common yellow border_radius">post your comment</button>
      </form>
        </article>-->
      </div>
      <aside class="col-sm-3 wow fadeIn" data-wow-delay="300ms">
        <div class="widget heading_space">
          <form class="widget_search border-radius">
            <div class="input-group">
              <input type="search" class="form-control" placeholder="Cari Berita" required>
              <i class="input-group-addon icon-icons185"></i>
            </div>
          </form>
        </div>
        
        <div class="widget heading_space">
          <h3 class="bottom20">Berita Terbaru</h3>
          <?php foreach($newblog->result() as $newb){ ?>
          <div class="media">
            <a class="media-left" href="#."><img src="<?php echo base_url($newb->foto_blog); ?>" alt="post" style="width:60px;height: 50px;"></a>
            <div class="media-body">
              <p><a href="<?php echo base_url('home/getblog/'.$newb->id_blog); ?>"><?php echo $newb->judul_blog; ?></a></p>
              <ul class="comment margin10">
                <li><a href="#."><i class="fa fa-calendar"></i> <?php echo tglwaktu($newb->tglinput_blog); ?></a></li>
              </ul>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="widget heading_space">
          <ul class="tags">
            <?php foreach($kategoriblog->result() as $katblog){ $blogdikategori= $this->Mblog->blogdikategori($katblog->id_kategoriblog); ?>
            <li><a href="<?php echo base_url('home/kategoriblog/'.$katblog->parameter_kategoriblog); ?>"><?php echo $katblog->nama_kategoriblog.' ('.$blogdikategori->num_rows().')'; ?></a></li>
              <?php } ?>
          </ul>
        </div>
      </aside>
    </div>
  </div>
</section>