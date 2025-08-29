<?php if($getagenda->num_rows() == 0) { redirect(base_url('notfound')); } ?>
<?php foreach($getagenda->result() as $detail); ?>
<!-- EVENTS -->
<section id="event_detail" class="padding" style="margin-top: -50px;">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 event wow fadeIn" data-wow-delay="500ms">
        <img src="<?php echo base_url($detail->foto_agenda); ?>" alt="Teachers" class=" border_radius img-responsive bottom15" style="width: 764px;height: 392px;">
        <div class="detail_course">
          <div class="clearfix">
            <ul class="comment pull-left">
              <li><a href="#." class="facebook"><i class="icon-map-pin"></i> <?php echo $detail->tempat_agenda; ?></a></li>
              <li><a href="#." class="facebook"><i class="icon-icons20"></i> <?php echo tglwaktu($detail->tgl_agenda.''.$detail->waktu_agenda); ?></a></li>
            </ul>
          </div>
        </div>
        <h3 class="top30 bottom20"><?php echo $detail->judul_agenda; ?></h3>
        <p class="bottom25">
          <?php echo $detail->isi_agenda; ?>
        </p>
        <strong>Bagikan Agenda Ini :</strong>
          <br>
          <br>
          <p class="pull-left">
            <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
          </p>
      </div>
      <aside class="col-sm-4 wow fadeIn" data-wow-delay="300ms">
        <div class="widget heading_space">
          <h3 class="bottom20 heading">Agenda Terbaru<span class="divider-left"></span></h3>
          <?php foreach($newagenda->result() as $newag){ ?>
          <div class="media">
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
<!-- EVENTS ends -->