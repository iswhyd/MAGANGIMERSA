<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah APBD Pembelanjaan</h4>
      	</div>
      	<form action="<?php echo base_url('apbdesbelanja/tambah') ?>" method="post">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control">
            </div>
      		<div class="form-group">
               <label for="">Jenis Pembelanjaan</label>
               <select class="form-control" name="kdjenisbelanja">
                  <option value="">*</option>
                  <?php foreach($jenisbelanja->result() as $aga){ ?>
                     <option value="<?php echo $aga->kd_jenisbelanja; ?>"><?php echo $aga->nama_jenisbelanja; ?></option>
                  <?php } ?>
               </select>
            </div>
            <div class="form-group">
               <label for="">Penyerapan</label>
               <input type="number" name="penyerapan" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pagu</label>
               <input type="number" name="pagu" class="form-control">
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