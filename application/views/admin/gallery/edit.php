<?php foreach($fraksi->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Fraksi</h4>
      	</div>
      	<form action="<?php echo base_url('fraksi/edit') ?>" method="post">
         <input type="hidden" name="id_fraksi"  class="form-control" value="<?php echo $r->id_fraksi; ?>">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Fraksi</label>
      			<input type="text" name="nama_fraksi"  class="form-control" value="<?php echo $r->nama_fraksi; ?>">
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