<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Pendidikan</h4>
      	</div>
      	<form action="<?php echo base_url('pendidikan/tambah') ?>" method="post">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Kode Pendidikan</label>
               <input type="text" name="kd_pendidikan"  class="form-control">
            </div>
      		<div class="form-group">
      			<label for="">Nama Pendidikan</label>
      			<input type="text" name="nama_pendidikan"  class="form-control">
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