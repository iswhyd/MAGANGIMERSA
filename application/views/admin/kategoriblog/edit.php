<?php foreach($kategoriblog->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Kategori Blog</h4>
      	</div>
      	<form action="<?php echo base_url('kategoriblog/edit') ?>" method="post">
         <input type="hidden" name="id_kategoriblog"  class="form-control" value="<?php echo $r->id_kategoriblog; ?>">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Kategori Blog</label>
      			<input type="text" name="nama_kategoriblog"  class="form-control" value="<?php echo $r->nama_kategoriblog; ?>">
      		</div>
            <div class="form-group">
               <label for="">Parameter</label>
               <input type="text" name="parameter_kategoriblog"  class="form-control" value="<?php echo $r->parameter_kategoriblog; ?>">
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