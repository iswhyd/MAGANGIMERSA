<style>
.org-chart {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.org-level {
  display: flex;
  justify-content: center;
  gap: 40px;
  margin: 30px 0;
  position: relative;
}

.org-card {
  background: #fff;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
  width: 160px;
  position: relative;
}

.org-card img {
  border-radius: 50%;
  width: 90px;
  height: 90px;
  object-fit: cover;
  margin-bottom: 10px;
}

/* Garis ke bawah */
.org-level:before {
  content: "";
  position: absolute;
  top: -20px;
  left: 50%;
  width: 2px;
  height: 20px;
  background: #333;
  transform: translateX(-50%);
}

.org-level:first-child:before {
  display: none;
}

/* Garis horizontal antar anak */
.org-level .org-card:before {
  content: "";
  position: absolute;
  top: -20px;
  left: 50%;
  width: 2px;
  height: 20px;
  background: #333;
}

.org-level .org-card:first-child:after,
.org-level .org-card:last-child:after {
  content: "";
  position: absolute;
  top: -20px;
  width: 50%;
  height: 2px;
  background: #333;
}

.org-level .org-card:first-child:after {
  left: 50%;
}

.org-level .org-card:last-child:after {
  right: 50%;
}
</style>

<section id="struktur" class="padding-top padding-bottom" style="background: #f9f9f9;">
  <div class="container">
    <div class="text-center">
      <h2 class="heading heading_space text">Struktur Organisasi Desa</h2>
      <span class="divider-center"></span>
    </div>

    <div class="org-chart">

      <!-- Kepala Desa -->
      <div class="org-level">
        <div class="org-card">
          <img src="<?php echo base_url('media/kades/1546839813.jpg'); ?>" alt="Kepala Desa">
          <h5>Kepala Desa</h5>
          <p class="text-muted">Budi Santoso</p>
        </div>
      </div>

      <!-- Sekretaris + Bendahara -->
      <div class="org-level">
        <div class="org-card">
          <img src="<?php echo base_url('media/gallery/orang.jpg'); ?>" alt="Sekretaris Desa">
          <h6>Sekretaris Desa</h6>
          <p class="text-muted">Siti Aminah</p>
        </div>
        <div class="org-card">
          <img src="<?php echo base_url('media/gallery/orang.jpg'); ?>" alt="Bendahara Desa">
          <h6>Bendahara Desa</h6>
          <p class="text-muted">Rahmat Hidayat</p>
        </div>
      </div>

      <!-- Kepala Urusan -->
      <div class="org-level">
        <div class="org-card">
          <img src="<?php echo base_url('media/gallery/orang.jpg'); ?>" alt="Kaur Pemerintahan">
          <h6>Kaur Pemerintahan</h6>
          <p class="text-muted">Andi Saputra</p>
        </div>
        <div class="org-card">
          <img src="<?php echo base_url('media/gallery/orang.jpg'); ?>" alt="Kaur Pembangunan">
          <h6>Kaur Pembangunan</h6>
          <p class="text-muted">Lina Wulandari</p>
        </div>
        <div class="org-card">
          <img src="<?php echo base_url('media/gallery/orang.jpg'); ?>" alt="Kaur Umum">
          <h6>Kaur Umum</h6>
          <p class="text-muted">Joko Widodo</p>
        </div>
      </div>

    </div>
  </div>
</section>
