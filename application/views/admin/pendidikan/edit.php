<?php foreach($pendidikan->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Pendidikan</h4>
      	</div>
      	<form action="<?php echo base_url('pendidikan/edit') ?>" method="post">
         <input type="hidden" name="id"  class="form-control" value="<?php echo $r->id; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Kode Pendidikan</label>
               <input type="text" name="kd_pendidikan"  class="form-control" value="<?php echo $r->kd_pendidikan; ?>">
            </div>
      		<div class="form-group">
      			<label for="">Nama Pendidikan</label>
      			<input type="text" name="nama_pendidikan"  class="form-control" value="<?php echo $r->nama_pendidikan; ?>">
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