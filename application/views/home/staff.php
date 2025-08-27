<!-- Teachers -->
<section id="teachers" class="padding-top padding-bottom-half" style="margin-top: -50px;">
  <div class="container">
    <div class="text-center"><h2 class="heading heading_space text">Staff Desa<span class="divider-center"></span></h2></div>
    <div class="row">
      <?php foreach($staff->result() as $st){ ?>
      <div class="col-sm-6 col-md-3">
        <div class="teacher wow fadeIn" data-wow-delay="300ms">
          <div class="image bottom25">
            <img src="<?php echo base_url($st->foto_staff); ?>" alt="Teachers" class="border_radius" style="height: 264px;">
            <span class="post"><?php echo $st->jabatan_staff; ?></span>
          </div>
          <h3><?php echo $st->nama_staff; ?></h3>
          <p class="bottom10 margin10">NIP. <?php echo $st->nip_staff; ?></p>
          <p class="bottom10 margin10"><?php echo $st->teml_staff.', '.dmy($st->tangl_staff); ?></p>
          <p class="bottom10 margin10"><?php echo $st->alamat_staff; ?></p>
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
<!-- Teachers -->
