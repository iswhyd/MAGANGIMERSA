<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Staff</h4>
      	</div>
      	<form action="<?php echo base_url('staff/tambah') ?>" method="post" enctype="multipart/form-data">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">NIP Staff</label>
      			<input type="text" name="nip_staff"  class="form-control">
      		</div>
            <div class="form-group">
               <label for="">Nama Staff</label>
               <input type="text" name="nama_staff"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Jabatan Staff</label>
               <input type="text" name="jabatan_staff"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Tempat Lahir Staff</label>
               <input type="text" name="teml_staff"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Tanggal Lahir Staff</label>
               <input type="text" class="form-control datepicker" name="tangl_staff" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="">Alamat Staff</label>
               <textarea class="form-control" name="alamat_staff"></textarea>
            </div>
            <div class="form-group">
               <label for="">Pilih Foto</label>
               <input type="file" name="filestaff"  class="form-control">
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
<script>
   $(function(){
      $('.datepicker').datepicker({
         format : "yyyy-m-d",
      });
   })
</script>