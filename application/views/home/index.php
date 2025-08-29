<!--Slider-->
<section class="rev_slider_wrapper text-center">      
  <div id="rev_slider" class="rev_slider" data-version="5.0">
    <ul>
    <?php foreach($slider->result() as $sli){ ?>  
      <li data-transition="fade">
        <img src="<?php echo base_url($sli->foto_slider); ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg">             
        <div class="tp-caption tp-resizeme"               
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['326','270','270','150']" data-voffset="['0','0','0','0']"           
        data-responsive_offset="on"
        data-visibility="['on','on','on','on']"
        data-transform_idle="o:1;"
        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"               
        data-start="800" style="background-color: #16a085;opacity: 0.5; color: #fff;">
          <h2><?php echo $sli->ket_slider; ?></h2>
        </div>
        <div class="tp-caption tp-resizeme"               
        data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
        data-y="['380','340','300','350']" data-voffset="['0','0','0','0']"
        data-responsive_offset="on"
        data-visibility="['on','on','off','off']"
        data-transform_idle="o:1;"
        data-transform_in="opacity:0;s:1000;e:Power2.easeInOut;" 
        data-transform_out="opacity:0;s:1000;s:1000;"
        data-start="1500"><p><?php echo $sli->des_slider; ?></p>
        </div>
      </li>
    <?php } ?>
    </ul>       
  </div>
</section>  

<!--ABout US-->
<?php $iden = $website->row(); ?>
<section id="about" class="padding" style="margin-top: -160px;">
  <div class="container margin_top">
    <div class="row">
      <div class="col-md-9 col-sm-9 priorty wow fadeInLeft" data-wow-delay="300ms">
        <h2 class="heading bottom25">Sambutan Kepala Desa <span class="divider-left"></span></h2>
        <p class="half_space"><?php echo $iden->sambutan_kades; ?></p>
      </div>
      <div class="col-md-3 col-sm-3 wow fadeInRight" data-wow-delay="300ms">
         <img src="<?php echo base_url('media/kades/1546839813.jpg'); ?>" alt="our priorties" class="img-responsive" style="width:100%;height: 358px">
      </div>
    </div>
  </div>
</section>

<!-- Section Profil & Peta Desa -->
<section id="profil-desa" style="padding:50px 0;">
  <div class="container">
    
    <!-- Gambar & Peta dalam satu row -->
    <div class="row g-4 mb-5">
      
      <!-- Gambar Desa -->
      <div class="col-md-6 d-flex">
        <div class="w-100" style="border: 2px solid #ddd; border-radius: 10px; overflow: hidden;">
          <img src="media/fotoblog/1546832669.jpg" 
               alt="Foto Desa" 
               class="img-fluid w-100 h-100" 
               style="object-fit: cover; max-height: 356px;">
        </div>
      </div>

      <!-- Peta Desa -->
      <div class="col-md-6 d-flex">
        <div class="w-100" style="border: 2px solid #ddd; border-radius: 10px; overflow: hidden;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7909.798182894078!2d112.07107141556739!3d-7.585961784622059!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78464b463e1909%3A0xed04270d99d8a45e!2sKemaduh%2C%20Kec.%20Baron%2C%20Kabupaten%20Nganjuk%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1756300670852!5m2!1sid!2sid" 
            width="100%" 
            height="100%" 
            style="border:0; min-height: 350px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>
      </div>
    </div>

    <!-- Tentang Desa & Visi Misi -->
    <div class="row" style="padding-top: 40px;">
      <div class="col-md-6 border-end">
        <h3 class="mb-3">Tentang Desa</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Nullam at elit sit amet magna posuere tempus.
        </p>
      </div>
      <div class="col-md-6">
        <h3 class="mb-3">Visi & Misi</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
          Integer vitae dui euismod, ultricies neque at, cursus erat.
        </p>
      </div>
    </div>

  </div>
</section>

<!--About US-->
<section id="about" class="padding" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
       <h2 class="heading">Program & Pelayanan<span class="divider-center"></span></h2>
       <p class="heading_space margin10"></p>
      </div>
    </div>
    <div class="row">
    <div class="icon_wrap clearfix">
      <?php foreach($ourservice->result() as $our){ ?>
      <a href="<?php echo $our->link_ourservice; ?>">
      <div class="col-sm-3 icon_box text-center heading_space wow fadeInUp" data-wow-delay="300ms">
         <img src="<?php echo base_url($our->foto_ourservice); ?>" alt="" style="width:100px;">
         <h4 class="text-capitalize bottom20 margin10"><?php echo $our->judul_ourservice; ?></h4>
         <p class="no_bottom"><?php echo $our->ket_ourservice; ?></p>
      </div>
      </a>
      <?php } ?>
    </div>
    </div> 
  </div>
</section>

<!-- News -->
<section id="news" class="padding" style="margin-top: -140px;">
  <div class="container">
    <div class="row">
      <div class="text-center"><h2 class="heading heading_space">Berita & Agenda Terbaru <span class="divider-center"></span></h2></div>
    </div>
    <div class="row">
      <aside class="col-sm-6 wow fadeIn" data-wow-delay="300ms">
        <div class="widget heading_space">
          <?php foreach($lastblog->result() as $newb){ ?>
          <div class="media">
            <a class="media-left" href="#."><img src="<?php echo base_url($newb->foto_blog); ?>" alt="post" style="width:100px;height: 70px;"></a>
            <div class="media-body">
              <p><a href="<?php echo base_url('home/getblog/'.$newb->id_blog); ?>"><?php echo $newb->judul_blog; ?></a></p>
              <ul class="comment margin10">
                <li><a href="#."><i class="fa fa-calendar"></i> <?php echo tglwaktu($newb->tglinput_blog); ?></a></li>
                <li><a href="#."><i class="fa fa-tag"></i> <?php echo $newb->nama_kategoriblog; ?></a></li>
              </ul>
            </div>
          </div>
          <?php } ?>
        </div>
      </aside>
      <aside class="col-sm-6 wow fadeIn" data-wow-delay="300ms">
        <div class="widget heading_space">
          <?php foreach($lastagenda->result() as $newag){ ?>
          <div class="media">
            <a class="media-left" href="#."><img src="<?php echo base_url($newag->foto_agenda); ?>" alt="post" style="width:100px;height: 70px;"></a>
            <div class="media-body">
              <p><a href="<?php echo base_url('home/getagenda/'.$newag->id_agenda); ?>"><?php echo $newag->judul_agenda; ?></a></p>
              <ul class="comment margin10">
                <li><a href="#."><i class="fa fa-calendar"></i> <?php echo tglwaktu($newag->tgl_agenda.''.$newag->waktu_agenda); ?></a></li>
                <li><a href="#."><i class="fa fa-map-marker"></i> <?php echo $newag->tempat_agenda; ?></a></li>
              </ul>
            </div>
          </div>
          <?php } ?>
        </div>
      </aside>
    </div>
  </div>
</section>

<!--Fun Facts-->
<section id="facts" class="padding" style="margin-top: -120px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
        <h2 class="heading heading_space">
          Statistik Penduduk <small>(Tahun <?php echo $ambiltahun['tahun']; ?>)</small>
          <span class="divider-center"></span>
        </h2>
      </div>
    </div>

    <!-- Tambahkan Pie Chart -->
    <div class="chart-container" style="width: 100%; display: flex; justify-content: center; margin-bottom: 20px;">
      <div style="width: 400px; height: 400px;">
        <canvas id="chartPenduduk"></canvas>
      </div>
    </div>

    <div class="row number-counters">
      <div class="col-md-4 col-sm-4">
        <div class="counters-item">
          <i class="icon-male"></i>
          <strong data-to="<?php echo $ambiltahun['cowok']; ?>">0</strong>
          <p>Laki-Laki</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="counters-item">
          <i class="icon-female"></i>
          <strong data-to="<?php echo $ambiltahun['cewek']; ?>">0</strong>
          <p>Perempuan</p>
        </div>
      </div>
      <?php $totpen= $ambiltahun['cowok'] + $ambiltahun['cewek']; ?>
      <div class="col-md-4 col-sm-4">
        <div class="counters-item">
          <i class="icon-user"></i>
          <strong data-to="<?php echo $totpen; ?>">0</strong>
          <p>Penduduk</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Script Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  var ctx = document.getElementById('chartPenduduk').getContext('2d');
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Laki-Laki", "Perempuan"],
      datasets: [{
        data: [<?= $ambiltahun['cowok']; ?>, <?= $ambiltahun['cewek']; ?>],
        backgroundColor: ['#36A2EB', '#FF6384'],
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          position: 'bottom'
        }
      }
    }
  });
</script>


<!--Pricings-->
<section class="padding" id="pricing" style="margin-top: -120px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
        <h2 class="heading heading_space">
          Statistik Desa <small>(Tahun <?php echo $ambiltahun['tahun']; ?>)</small>
          <span class="divider-center"></span>
        </h2>
      </div>
      <div class="col-md-12">
        <div class="pricing">
          <div class="pricing_item wow fadeInUp" data-wow-delay="300ms">
            <h3>Agama</h3>
            <div class="pricing_price">
            <?php foreach($agama->result() as $ag){
              $L= $this->Magamapenduduk->hitungtahunjk($ag->kd_agama,'L', $ambiltahun['tahun'])->row_array();
              $P= $this->Magamapenduduk->hitungtahunjk($ag->kd_agama,'P', $ambiltahun['tahun'])->row_array();
            ?>
            <p class="hours">
              <?php echo $ag->nama_agama; ?> <br>
              <?php echo intval($L['jumlah']); ?> Laki-laki . 
              <?php echo intval($P['jumlah']); ?> Perempuan
            </p>
            <?php } ?>
            </div>
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="300ms">
            <h3>Pekerjaan</h3>
            <div class="pricing_price">
            <?php foreach($pekerjaan->result() as $ag){
              $L= $this->Mpekerjaanpenduduk->hitungtahunjk($ag->kd_pekerjaan,'L', $ambiltahun['tahun'])->row_array();
              $P= $this->Mpekerjaanpenduduk->hitungtahunjk($ag->kd_pekerjaan,'P', $ambiltahun['tahun'])->row_array();
            ?>
            <p class="hours">
              <?php echo $ag->nama_pekerjaan; ?> <br>
              <?php echo intval($L['jumlah']); ?> Laki-laki . 
              <?php echo intval($P['jumlah']); ?> Perempuan
            </p>
            <?php } ?>
            </div>
          </div>
          <div class="pricing_item wow fadeInUp" data-wow-delay="300ms">
            <h3>Pendidikan</h3>
            <div class="pricing_price">
            <?php foreach($pendidikan->result() as $ag){
              $L= $this->Mpendidikanpenduduk->hitungtahunjk($ag->kd_pendidikan,'L', $ambiltahun['tahun'])->row_array();
              $P= $this->Mpendidikanpenduduk->hitungtahunjk($ag->kd_pendidikan,'P', $ambiltahun['tahun'])->row_array();
            ?>
            <p class="hours">
              <?php echo $ag->nama_pendidikan; ?> <br>
              <?php echo intval($L['jumlah']); ?> Laki-laki . 
              <?php echo intval($P['jumlah']); ?> Perempuan
            </p>
            <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Pricings -->
 <section class="padding" id="pricing" style="margin-top: -120px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
        <h2 class="heading heading_space">Statistik Keuangan <span class="divider-center"></span></h2>
      </div>
      <div class="col-md-12">
        <div class="pricing">

          <!-- APDB Pelaksaan -->
          <div class="pricing_item wow fadeInUp" data-wow-delay="300ms">
            <h3>APDB Pelaksanaan <small>(<?= $ambilpel['tahun'] ?? date('Y'); ?>)</small></h3>
            <div class="pricing_price">
              <?php
              $items = [
                ['label'=>'Pendapatan','nilai'=>$ambilpel['dapat']??0,'pagu'=>$ambilpel['pagudapat']??0],
                ['label'=>'Pembelanjaan','nilai'=>$ambilpel['belanja']??0,'pagu'=>$ambilpel['pagubelanja']??0],
                ['label'=>'Pembiayaan','nilai'=>$ambilpel['biaya']??0,'pagu'=>$ambilpel['pagubiaya']??0],
              ];
              foreach($items as $item):
                $persen = ($item['pagu'] > 0) ? round(($item['nilai'] / $item['pagu']) * 100) : 0;
              ?>
              <p class="hours">
                <?= $item['label']; ?> <br>
                Rp. <?= number_format($item['nilai'],0,",","."); ?> s/d 
                <b class="text-success">Rp. <?= number_format($item['pagu'],0,",","."); ?></b>
              </p>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" 
                    aria-valuenow="<?= $persen; ?>" 
                    aria-valuemin="0" aria-valuemax="100" 
                    style="width:<?= $persen; ?>%;">
                  <?= $persen; ?>%
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- APDB Pendapatan -->
          <div class="pricing_item wow fadeInUp" data-wow-delay="300ms">
            <h3>APDB Pendapatan (<?= $ambilpel['tahun'] ?? date('Y'); ?>)</h3>
            <div class="pricing_price">
              <?php 
              if(!empty($jenisdapat) && is_object($jenisdapat) && method_exists($jenisdapat, 'result')):
                foreach($jenisdapat->result() as $ag):
                  // ambil data sesuai jenis & tahun terbaru otomatis
                  $dapat = $this->Mapbdesdapat->hitungtahunjenis($ag->kd_jenisdapat)->row_array() ?? [];
                  $penyerapan = $dapat['penyerapan'] ?? 0;
                  $pagu       = $dapat['pagu'] ?? 0;
                  $persen     = ($pagu > 0) ? round(($penyerapan / $pagu) * 100) : 0;
              ?>
              <p class="hours">
                <?= $ag->nama_jenisdapat ?? "Unknown"; ?> <br>
                Rp. <?= number_format($penyerapan,0,",","."); ?> s/d 
                <b class="text-success">Rp. <?= number_format($pagu,0,",","."); ?></b>
              </p>
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" 
                    aria-valuenow="<?= $persen; ?>" 
                    aria-valuemin="0" aria-valuemax="100" 
                    style="width:<?= $persen; ?>%;">
                  <?= $persen; ?>%
                </div>
              </div>
              <?php 
                endforeach; 
              endif;
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Fun Facts -->
 <section id="facts" class="padding" style="margin-top: -120px;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center wow fadeInDown">
       <h2 class="heading">Galeri Foto<span class="divider-center"></span></h2>
       <p class="heading_space margin10"></p>
      </div>
    </div>
    <div id="projects" class="cbp">
      <?php foreach($newfoto->result() as $gal){ ?>
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
  </div>
</section>

<!--Pricings-->
<section class="padding bg_light" id="pricing" style="margin-top: -80px;">
  <div class="container">
    <div class="row" style="margin-top: -40px;">
      <div class="col-md-12 text-center wow fadeInDown">
        <h2 class="heading">Galeri Video <span class="divider-center"></span></h2>
        <p class="heading_space margin10">Dokumentasi berbagai kegiatan dan pembelajaran</p>
      </div>
      <div class="col-md-12">
        <?php foreach($newvideo->result() as $vid){ ?>
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
    </div>
  </div>
</section>

