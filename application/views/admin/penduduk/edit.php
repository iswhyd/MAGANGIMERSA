<?php foreach($penduduk->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Penduduk</h4>
      	</div>
      	<form action="<?php echo base_url('penduduk/edit') ?>" method="post">
         <input type="hidden" name="id"  class="form-control" value="<?php echo $r->id; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Tahun</label>
               <input type="text" name="tahun"  class="form-control" value="<?php echo $r->tahun; ?>">
            </div>
            <div class="form-group">
               <label for="">Laki-laki</label>
               <input type="number" name="cowok"  class="form-control" value="<?php echo $r->cowok; ?>">
            </div>
            <div class="form-group">
               <label for="">Perempuan</label>
               <input type="number" name="cewek"  class="form-control" value="<?php echo $r->cewek; ?>">
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