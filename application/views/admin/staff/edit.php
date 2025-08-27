<?php foreach($staff->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit staff</h4>
      	</div>
      	<form action="<?php echo base_url('staff/edit') ?>" method="post" enctype="multipart/form-data">
         <input type="hidden" name="id_staff"  class="form-control" value="<?php echo $r->id_staff; ?>">
      	<div class="modal-body">
      		<div class="form-group">
               <label for="">NIP Staff</label>
               <input type="text" name="nip_staff"  class="form-control" value="<?php echo $r->nip_staff; ?>">
            </div>
            <div class="form-group">
               <label for="">Nama Staff</label>
               <input type="text" name="nama_staff"  class="form-control" value="<?php echo $r->nama_staff; ?>">
            </div>
            <div class="form-group">
               <label for="">Jabatan Staff</label>
               <input type="text" name="jabatan_staff"  class="form-control" value="<?php echo $r->jabatan_staff; ?>">
            </div>
            <div class="form-group">
               <label for="">Tempat Lahir Staff</label>
               <input type="text" name="teml_staff"  class="form-control" value="<?php echo $r->teml_staff; ?>">
            </div>
            <div class="form-group">
               <label for="">Tanggal Lahir Staff</label>
               <input type="text" class="form-control datepicker" name="tangl_staff" autocomplete="off" value="<?php echo $r->tangl_staff; ?>">
            </div>
            <div class="form-group">
               <label for="">Alamat Staff</label>
               <textarea class="form-control" name="alamat_staff"><?php echo $r->alamat_staff; ?></textarea>
            </div>
            <div class="row">
               <div class="col-md-3">
                  <img src="<?php echo base_url($r->foto_staff); ?>" alt="" width="100px" height="100px">
               </div>
               <div class="col-md-9">
                  <div class="form-group">
                     <label for="">Pilih Foto</label>
                     <input type="file" name="filestaff"  class="form-control">
                  </div>
               </div>
            </div>
      	</div>
      	<div class="modal-footer">
      		<button class="btn btn-success"><i class="fa fa-check"></i> Simpan</button>
      		<a href="#" class="btn btn-default" data-dismiss="modal">Tutup</a>
      	</div>
      	</form>
      </div>
   </div>
</div>