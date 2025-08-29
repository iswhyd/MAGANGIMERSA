<?php if($blog->num_rows() == 0) { redirect(base_url('notfound')); } ?>
<?php $katblog= $this->Mkategoriblog->getonepar($this->uri->segment(3)); foreach($katblog->result() as $kb); ?>
<!--BLOG SECTION-->
<section id="blog" class="padding" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-9">
        <h2 class="heading heading_space">Berita - <?php echo $kb->nama_kategoriblog; ?><span class="divider-left"></span></h2>
        <?php foreach($blog->result() as $ber){ ?>
        <article class="blog_item heading_space wow fadeInLeft" data-wow-delay="300ms">
          <div class="row">
            <div class="col-md-5 col-sm-5 heading_space">
              <div class="image"><img src="<?php echo base_url($ber->foto_blog); ?>" alt="blog" class="border_radius" style="height:180px;"></div>
            </div>
            <div class="col-md-7 col-sm-7 heading_space">
              <h3><a href="<?php echo base_url('home/getblog/'.$ber->id_blog); ?>"><?php echo $ber->judul_blog; ?></a></h3>
              <ul class="comment margin10">
                <li><a href="#."><i class="fa fa-calendar"></i> <?php echo tglwaktu($ber->tglinput_blog); ?></a></li>
                <li><a href="#."><i class="fa fa-tag"></i> <?php echo $ber->nama_kategoriblog; ?></a></li>
                
              </ul>
              <p class="margin10">
                <?php echo subber($ber->isi_blog); ?> ...
              </p>
            </div>
          </div>
        </article>
        <?php } ?>
        
        <div class="pager_nav wow fadeIn" data-wow-delay="300ms">
          <ul class="pagination">
            <?php echo $pagination; ?>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <aside class="sidebar bg_grey border-radius wow fadeIn" data-wow-delay="300ms">
          <div class="widget heading_space">
            <form class="widget_search border-radius">
              <div class="input-group">
                <input type="search" class="form-control" placeholder="Cari Berita" required>
                <i class="input-group-addon icon-icons185"></i>
              </div>
            </form>
          </div>
          <div class="widget heading_space">
            <h3 class="bottom20">Kategori Berita</h3>
            <ul class="tags">
              <?php foreach($kategoriblog->result() as $katblog){ $blogdikategori= $this->Mblog->blogdikategori($katblog->id_kategoriblog); ?>
              <li><a href="<?php echo base_url('home/kategoriblog/'.$katblog->parameter_kategoriblog); ?>"><?php echo $katblog->nama_kategoriblog.' ('.$blogdikategori->num_rows().')'; ?></a></li>
              <?php } ?>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>
<!--BLOG SECTION-->