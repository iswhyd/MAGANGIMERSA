<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah APBD Pelaksanaan</h4>
      	</div>
      	<form action="<?php echo base_url('apbdespel/tambah') ?>" method="post">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pendapatan</label>
               <input type="number" name="dapat" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pagu Pendapatan</label>
               <input type="number" name="pagudapat" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pembelanjaan</label>
               <input type="number" name="belanja" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pagu Pembelanjaan</label>
               <input type="number" name="pagubelanja" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pembiayaan</label>
               <input type="number" name="biaya" class="form-control">
            </div>
            <div class="form-group">
               <label for="">Pagu Pembiayaan</label>
               <input type="number" name="pagubiaya" class="form-control">
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