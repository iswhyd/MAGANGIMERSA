<?php foreach($ourservice->result() as $r); ?>
<div class="modal fade" id="modedit">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Edit Ourservice</h4>
      	</div>
      	<form action="<?php echo base_url('ourservice/edit') ?>" method="post" enctype="multipart/form-data">
         <input type="hidden" name="id_ourservice"  class="form-control" value="<?php echo $r->id_ourservice; ?>">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Judul Ourservice</label>
               <input type="text" name="judul_ourservice" class="form-control" value="<?php echo $r->judul_ourservice; ?>">
            </div>
            <div class="form-group">
               <label for="">Keterangan Ourservice</label>
               <textarea class="form-control" name="ket_ourservice"><?php echo $r->ket_ourservice; ?></textarea>
            </div>
            <div class="form-group">
               <label for="">Link Ourservice</label>
               <input type="text" name="link_ourservice" class="form-control" value="<?php echo $r->link_ourservice; ?>">
            </div>
            <div class="form-group">
               <label for="">Pilih Foto</label>
               <input type="file" name="fileourservice"  class="form-control">
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