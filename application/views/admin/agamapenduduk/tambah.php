<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Statistik Agama</h4>
      	</div>
      	<form action="<?php echo base_url('agamapenduduk/tambah') ?>" method="post">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control">
            </div>
      		<div class="form-group">
               <label for="">Agama</label>
               <select class="form-control" name="kdagama">
                  <option value="">*</option>
                  <?php foreach($agama->result() as $aga){ ?>
                     <option value="<?php echo $aga->kd_agama; ?>"><?php echo $aga->nama_agama; ?></option>
                  <?php } ?>
               </select>

            </div>
            <div class="form-group">
               <label for="">Jumlah</label>
               <input type="number" name="jumlah" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Jenis Kelamin</label>
               <select class="form-control" name="jk">
                  <option value="L">Laki-laki</option>
                  <option value="P">Perempuan</option>
               </select>
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