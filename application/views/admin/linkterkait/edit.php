<?php foreach($linkterkait->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Link Terkait</h4>
      	</div>
      	<form action="<?php echo base_url('linkterkait/edit') ?>" method="post">
         <input type="hidden" name="id_linkterkait"  class="form-control" value="<?php echo $r->id_linkterkait; ?>">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Link Terkait</label>
      			<input type="text" name="nama_linkterkait"  class="form-control" value="<?php echo $r->nama_linkterkait; ?>">
      		</div>
            <div class="form-group">
               <label for="">Link</label>
               <input type="text" name="link_linkterkait"  class="form-control" value="<?php echo $r->link_linkterkait; ?>">
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