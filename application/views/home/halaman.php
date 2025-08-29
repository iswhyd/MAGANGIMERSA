<?php if($halaman->num_rows() == 0) { redirect(base_url('notfound')); } ?>
<?php foreach($halaman->result() as $detail); ?>
<!--Page Header-->
<!--<section class="page_header padding-top">
  <div class="container">
    <div class="row">
      <div class="col-md-12 page-content">
        <h1><?php echo $detail->judul_halaman; ?></h1>
        <p>We offer the most complete house renovating services in the country</p>
        <div class="page_nav">
      <span>You are here:</span> <a href="index.html">Home</a> <span><i class="fa fa-angle-double-right"></i>About Us</span>
      </div>
      </div>
    </div>
  </div>
</section>-->
<!--Page Header-->

<!--ABout US-->
<section id="about" class="padding" style="margin-top: -50px;">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-12 wow fadeInLeft" data-wow-delay="300ms">
       <div class="text-center"><h2 class="heading heading_space" style="text-transform: uppercase;"><?php echo $detail->judul_halaman; ?> <span class="divider-center"></span></h2></div>
       <p class="bottom25"><?php echo $detail->isi_halaman; ?></p>

       <strong>Bagikan Halaman Ini :</strong>
          <br>
          <br>
          <p class="pull-left">
            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
          </p>
      </div>
    </div>
  </div>
</section>
<!--ABout US-->