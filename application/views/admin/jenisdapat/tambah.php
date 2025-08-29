<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Jenis Pendapatan</h4>
      	</div>
      	<form action="<?php echo base_url('jenisdapat/tambah') ?>" method="post">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Kode Jenis Pendapatan</label>
               <input type="text" name="kd_jenisdapat"  class="form-control">
            </div>
      		<div class="form-group">
      			<label for="">Nama Jenis Pendapatan</label>
      			<input type="text" name="nama_jenisdapat"  class="form-control">
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