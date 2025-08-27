<?php foreach($jenisbelanja->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Jenis Belanja</h4>
      	</div>
      	<form action="<?php echo base_url('jenisbelanja/edit') ?>" method="post">
         <input type="hidden" name="id"  class="form-control" value="<?php echo $r->id; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Kode Jenis Belanja</label>
               <input type="text" name="kd_jenisbelanja"  class="form-control" value="<?php echo $r->kd_jenisbelanja; ?>">
            </div>
      		<div class="form-group">
      			<label for="">Nama Jenis Belanja</label>
      			<input type="text" name="nama_jenisbelanja"  class="form-control" value="<?php echo $r->nama_jenisbelanja; ?>">
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