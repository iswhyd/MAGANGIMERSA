<!-- Gallery -->
<section id="gallery" class="padding" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-5">
        <h2 class="heading heading_space">Galeri Foto<span class="divider-left"></span></h2>
      </div>
      <div class="col-sm-7">
        <div id="project-filter" class="cbp-l-filters-alignRight">
          <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">Semua</div>
          <?php foreach($kategorigallery->result() as $katgal){ ?>
          <div data-filter=".<?php echo $katgal->id_kategorigallery; ?>" class="cbp-filter-item"><?php echo $katgal->nama_kategorigallery; ?></div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div id="projects" class="cbp">
      <?php foreach($galerifoto->result() as $gal){ ?>
      <div class="cbp-item <?php echo $gal->id_kategorigallery; ?>">
        <img src="<?php echo base_url($gal->foto_gallery); ?>" alt="" style="width: 272px;height: 190px;">
        <div class="overlay">
          <div class="centered text-center">
            <a href="<?php echo base_url($gal->foto_gallery) ?>" class="cbp-lightbox opens"> <i class="icon-focus"></i></a> 
          </div>
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
<!-- Gallery -->