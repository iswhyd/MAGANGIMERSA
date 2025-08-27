<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Penduduk</h4>
      	</div>
      	<form action="<?php echo base_url('penduduk/tambah') ?>" method="post">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control">
            </div>
      		<div class="form-group">
      			<label for="">Laki-laki</label>
      			<input type="number" name="cowok"  class="form-control">
      		</div>
            <div class="form-group">
               <label for="">Perempuan</label>
               <input type="number" name="cewek"  class="form-control">
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