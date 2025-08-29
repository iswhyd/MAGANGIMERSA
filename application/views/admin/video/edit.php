<?php foreach($video->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Video</h4>
      	</div>
      	<form action="<?php echo base_url('video/edit') ?>" method="post">
         <input type="hidden" name="id_video"  class="form-control" value="<?php echo $r->id_video; ?>">
      	<div class="modal-body">
      		<div class="form-group">
               <label for="">Keterangan Video</label>
               <textarea class="form-control" name="ket_video"><?php echo $r->ket_video; ?></textarea>
            </div>
            <div class="form-group">
               <label for="">Link Video</label>
               <input type="text" name="link_video"  class="form-control" value="<?php echo $r->link_video; ?>">
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