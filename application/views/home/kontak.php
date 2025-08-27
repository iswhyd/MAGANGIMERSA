<?php foreach($website->result() as $iden); ?>
<!--Contact Deatils -->
<section id="contact" class="padding" style="margin-top: -50px;">
  <div class="container">
    <div class="row padding-bottom">
      <div class="col-md-4 contact_address heading_space wow fadeInLeft" data-wow-delay="300ms">
        <h2 class="heading heading_space">Akses Cepat <span class="divider-left"></span></h2>
        <div class="address">
          <i class="icon icon-map-pin border_radius"></i>
          <h4>Alamat</h4>
          <p><?php echo $iden->alamat_sekolah; ?></p>
        </div>
        <div class="address">
          <i class="icon icon-mail border_radius"></i>
          <h4>Email</h4>
          <p><a href="mailto:<?php echo $iden->email_sekolah; ?>"><?php echo $iden->email_sekolah; ?></a></p>
        </div>
        <div class="address">
          <i class="icon icon-phone4 border_radius"></i>
          <h4>Telepon</h4>
          <p><?php echo $iden->tlp_sekolah; ?></p>
        </div>
        <ul class="social_icon black top30">
          <li><a href="<?php echo $iden->facebook; ?>" class="facebook"><i class="fa fa-facebook"></i></a></li>
          <li><a href="<?php echo $iden->twitter; ?>" class="twitter"><i class="icon-twitter4"></i></a></li>
          <li><a href="<?php echo $iden->youtube; ?>" class="youtube"><i class="icon-youtube"></i></a></li>
          <li><a href="<?php echo $iden->instagram; ?>" class="instagram"><i class="icon-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-md-8 wow fadeInRight" data-wow-delay="300ms">
        <h2 class="heading heading_space">Kirim Pesan Kepada Kami<span class="divider-left"></span></h2>
        <form class="form-inline findus" id="contact-form" onSubmit="return false">
          <div class="row">
            <div class="col-md-12">
              <div id="result"></div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Nama Anda"  name="name" id="name" required>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" id="email" required>
              </div>
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Website" name="website" id="website" required>
              </div>
            </div>
            <div class="col-md-12">
              <textarea placeholder="Pesan"  name="message" id="message"></textarea>
              <button class="btn_common yellow border_radius" id="btn_submit">kirim</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="row wow bounceIn" data-wow-delay="300ms" style="margin-top: -40px;">
      <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.7437841037527!2d106.5454876146914!3d-6.553995965892921!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69df4d4f236f71%3A0x16ff2e5ea4787d3a!2sSMAIT+RAUDHATUL+ULUM!5e0!3m2!1sid!2sid!4v1546687304160" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<!--Contact Deatils -->