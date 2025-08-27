<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Download</h4>
      	</div>
      	<form action="<?php echo base_url('download/tambah') ?>" method="post" enctype="multipart/form-data">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Judul Download</label>
               <input type="text" name="judul_download"  class="form-control">
      		</div>
            <div class="form-group">
               <label for="">File Download</label>
               <input type="file" name="filedownload"  class="form-control">
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