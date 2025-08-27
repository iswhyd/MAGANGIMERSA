<?php foreach($apbdesbelanja->result() as $row); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit APBD Pembelanjaan</h4>
      	</div>
      	<form action="<?php echo base_url('apbdesbelanja/edit') ?>" method="post">
         <input type="hidden" name="id"  class="form-control" value="<?php echo $row->id; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control" value="<?php echo $row->tahun; ?>">
            </div>
            <div class="form-group">
               <label for="">Jenis Pembelanjaan</label>
               <select class="form-control" name="kdjenisbelanja">
                  <option value="">*</option>
                  <?php foreach($jenisbelanja->result() as $aga){ ?>
                     <option <?php if($aga->kd_jenisbelanja==$row->kdjenisbelanja){ echo 'selected'; } ?> value="<?php echo $aga->kd_jenisbelanja; ?>"><?php echo $aga->nama_jenisbelanja; ?></option>
                  <?php } ?>
               </select>

            </div>
            <div class="form-group">
               <label for="">Penyerapan</label>
               <input type="number" name="penyerapan" class="form-control" value="<?php echo $row->penyerapan; ?>">
            </div>
            <div class="form-group">
               <label for="">Pagu</label>
               <input type="number" name="pagu" class="form-control" value="<?php echo $row->pagu; ?>">
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