<?php foreach($agama->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Agama</h4>
      	</div>
      	<form action="<?php echo base_url('agama/edit') ?>" method="post">
         <input type="hidden" name="id"  class="form-control" value="<?php echo $r->id; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Kode Agama</label>
               <input type="text" name="kd_agama"  class="form-control" value="<?php echo $r->kd_agama; ?>">
            </div>
      		<div class="form-group">
      			<label for="">Nama Agama</label>
      			<input type="text" name="nama_agama"  class="form-control" value="<?php echo $r->nama_agama; ?>">
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