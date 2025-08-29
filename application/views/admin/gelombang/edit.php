<?php foreach($gelombang->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Gelombang</h4>
      	</div>
      	<form action="<?php echo base_url('gelombang/edit') ?>" method="post">
         <input type="hidden" name="id_gelombang"  class="form-control" value="<?php echo $r->id_gelombang; ?>">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Gelombang</label>
      			<input type="text" name="nama_gelombang"  class="form-control" value="<?php echo $r->nama_gelombang; ?>">
      		</div>
            <div class="form-group">
               <label for="">Mulai Gelombang</label>
               <input type="text" name="mulai_gelombang"  class="form-control date" autocomplete="off" value="<?php echo dmy($r->mulai_gelombang); ?>">
            </div>
            <div class="form-group">
               <label for="">Selesai Gelombang</label>
               <input type="text" name="selesai_gelombang"  class="form-control date" autocomplete="off" value="<?php echo dmy($r->selesai_gelombang); ?>">
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