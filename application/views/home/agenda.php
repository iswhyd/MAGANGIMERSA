<!-- eventss -->
<section id="events" class="padding-top padding-bottom-half" style="margin-top: -50px;">
  <div class="container">
    <div class="text-center"><h2 class="heading heading_space text">Agenda Desa<span class="divider-center"></span></h2></div>
    <div class="row">
      <?php foreach($agenda->result() as $ag){ ?>
      <div class="col-sm-6 col-md-4">
        <div class="events wow fadeIn top30" data-wow-delay="300ms">
          <div class="image">
            <img src="<?php echo base_url($ag->foto_agenda); ?>" alt="eventss" class="border_radius" style="width:358px; height:264px;">
          </div>
          <p class="top30"><a href="<?php echo base_url('home/getagenda/'.$ag->id_agenda); ?>"><?php echo $ag->judul_agenda; ?></a></p>
          <p class="bottom20 margin10"><?php echo substr($ag->isi_agenda,0,100); ?>...</p>
          <div class="clearfix">
            <ul class="comment pull-left">
              <li><a href="#." class="facebook"><i class="icon-map-pin"></i> <?php echo $ag->tempat_agenda; ?></a></li>
            </ul>
            <ul class="comment pull-right">
              <li><a href="#." class="facebook"><i class="icon-icons20"></i> <?php echo tglwaktu($ag->tgl_agenda.''.$ag->waktu_agenda); ?></a></li>
            </ul>
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