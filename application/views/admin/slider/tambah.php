<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Slider</h4>
      	</div>
      	<form action="<?php echo base_url('slider/tambah') ?>" method="post" enctype="multipart/form-data">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Keterangan Slider</label>
      			<textarea class="form-control" name="ket_slider"></textarea>
      		</div>
            <div class="form-group">
               <label for="">Deskripsi Slider</label>
               <textarea class="form-control" name="des_slider"></textarea>
            </div>
            <div class="form-group">
               <label for="">Pilih Slider</label>
               <input type="file" name="fileslider"  class="form-control">
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