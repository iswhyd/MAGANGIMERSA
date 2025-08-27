<?php foreach($website->result() as $iden); ?>
<div class="row">
	<div class="col-md-6">
		<div class="box box-solid">
			<div class="box-header bg-info">
				<h3 class="box-title">Identitas Website</h3>
			</div>
			<form action="<?php echo base_url('website/edit') ?>" method="post">
      	<div class="box-body">
      		<div class="form-group">
      			<label for="">Nama Website</label>
      			<input type="text" name="nama_website"  class="form-control" value="<?php echo $iden->nama_website; ?>">
      		</div>
            <div class="form-group">
               <label for="">Nama Email</label>
               <input type="text" name="nama_email"  class="form-control" required="" value="<?php echo $iden->nama_email; ?>">
            </div>
            <div class="form-group">
               <label for="">Protocol Email</label>
               <input type="text" name="protocol_email"  class="form-control" required="" value="<?php echo $iden->protocol_email; ?>">
            </div>
            <div class="form-group">
               <label for="">SMTP Host Email</label>
               <input type="text" name="smtp_host_email"  class="form-control" required="" value="<?php echo $iden->smtp_host_email; ?>">
            </div>
            <div class="form-group">
               <label for="">SMTP User Email</label>
               <input type="text" name="smtp_user_email"  class="form-control" required="" value="<?php echo $iden->smtp_user_email; ?>">
            </div>
            <div class="form-group">
               <label for="">SMTP Password Email</label>
               <input type="text" name="smtp_pass_email"  class="form-control" required="" value="<?php echo $iden->smtp_pass_email; ?>">
            </div>
            <div class="form-group">
               <label for="">SMTP Port Email</label>
               <input type="text" name="smtp_port_email"  class="form-control" required="" value="<?php echo $iden->smtp_port_email; ?>">
            </div>
            <div class="form-group">
               <label for="">Alamat Desa</label>
               <textarea name="alamat_desa" class="form-control"><?php echo $iden->alamat_desa; ?></textarea>
            </div>
            <div class="form-group">
               <label for="">Telepon Desa</label>
               <input type="text" name="tlp_desa"  class="form-control" required="" value="<?php echo $iden->tlp_desa; ?>">
            </div>
            <div class="form-group">
               <label for="">Email Desa</label>
               <input type="text" name="email_desa"  class="form-control" required="" value="<?php echo $iden->email_desa; ?>">
            </div>
            <div class="form-group">
               <label for="">Link Facebook</label>
               <input type="text" name="facebook"  class="form-control" required="" value="<?php echo $iden->facebook; ?>">
            </div>
            <div class="form-group">
               <label for="">Link Twitter</label>
               <input type="text" name="twitter"  class="form-control" required="" value="<?php echo $iden->twitter; ?>">
            </div>
            <div class="form-group">
               <label for="">Link Youtube</label>
               <input type="text" name="youtube"  class="form-control" required="" value="<?php echo $iden->youtube; ?>">
            </div>
            <div class="form-group">
               <label for="">Link Instagram</label>
               <input type="text" name="instagram"  class="form-control" required="" value="<?php echo $iden->instagram; ?>">
            </div>
      	</div>
      	<div class="box-footer">
      		<button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
      	</div>
      	</form>
		</div>
	</div>
   <div class="col-md-6">
      <div class="box box-solid">
         <div class="box-header bg-info">
            <h3 class="box-title">Logo</h3>
         </div>
         <form action="<?php echo base_url('website/editlogo') ?>" method="post" enctype="multipart/form-data">
         <div class="box-body">
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group"><img src="<?php echo base_url($iden->logo_website); ?>" alt="" width="100px"></div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label for="">Pilih Logo Website</label>
                     <input type="file" name="filelogo"  class="form-control">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="form-group"><img src="<?php echo base_url($iden->logo_menu); ?>" alt="" width="200px"></div>
               </div>
               <div class="col-md-8">
                  <div class="form-group">
                     <label for="">Pilih Logo Menu</label>
                     <input type="file" name="filelogomenu"  class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="box-footer">
            <button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
         </div>
         </form>
      </div>
      <div class="box box-solid">
         <div class="box-header bg-info">
            <h3 class="box-title">Sambutan Kepala Sekolah</h3>
         </div>
         <form action="<?php echo base_url('website/sambutan') ?>" method="post" enctype="multipart/form-data">
         <div class="box-body">
            <div class="form-group">
               <label for="">Sambutan</label>
               <textarea name="sambutan_kades" class="form-control" id="editor1"><?php echo $iden->sambutan_kades; ?></textarea>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <div class="form-group"><img src="<?php echo base_url($iden->foto_kades); ?>" alt="" width="100px"></div>
               </div>
               <div class="col-md-9">
                  <div class="form-group">
                     <label for="">Pilih Foto</label>
                     <input type="file" name="filekepsek"  class="form-control">
                  </div>
               </div>
            </div>
         </div>
         <div class="box-footer">
            <button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
         </div>
         </form>
      </div>
   </div>
</div>
<script>
   $(function(){
    CKEDITOR.replace('editor1');
   });
</script>
<?php if($this->session->flashdata('msg')=='edit'){ ?>
<script>
	iziToast.show({timeout:5000,color:'blue',title: 'Berhasil Diedit',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='gagal'){ ?>
<script>
   iziToast.show({timeout:5000,color:'red',title: 'Gagal Diedit',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>