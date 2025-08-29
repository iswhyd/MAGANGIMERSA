<?php foreach($apbdespel->result() as $row); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit APBD Pelaksanaan</h4>
      	</div>
      	<form action="<?php echo base_url('apbdespel/edit') ?>" method="post">
         <input type="hidden" name="id"  class="form-control" value="<?php echo $row->id; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control" value="<?php echo $row->tahun; ?>">
            </div>
            <div class="form-group">
               <label for="">Pendapatan</label>
               <input type="number" name="dapat" class="form-control" value="<?php echo $row->dapat; ?>">
            </div>
            <div class="form-group">
               <label for="">Pagu Pendapatan</label>
               <input type="number" name="pagudapat" class="form-control" value="<?php echo $row->pagudapat; ?>">
            </div>
            <div class="form-group">
               <label for="">Pembelanjaan</label>
               <input type="number" name="belanja" class="form-control" value="<?php echo $row->belanja; ?>">
            </div>
            <div class="form-group">
               <label for="">Pagu Pembelanjaan</label>
               <input type="number" name="pagubelanja" class="form-control" value="<?php echo $row->pagubelanja; ?>">
            </div>
            <div class="form-group">
               <label for="">Pembiayaan</label>
               <input type="number" name="biaya" class="form-control" value="<?php echo $row->biaya; ?>">
            </div>
            <div class="form-group">
               <label for="">Pagu Pembiayaan</label>
               <input type="number" name="pagubiaya" class="form-control" value="<?php echo $row->pagubiaya; ?>">
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