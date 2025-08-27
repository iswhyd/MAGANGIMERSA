<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Gallery</h4>
      	</div>
      	<form action="<?php echo base_url('gallery/tambah') ?>" method="post" enctype="multipart/form-data">
      	<div class="modal-body">
            <div class="form-group">
               <label for="">Kategori Gallery</label>
               <select name="id_kategorigallery" id="id_kategorigallery" class="form-control select" style="width:100%;">
                  <option value="">Pilih</option>
                  <?php foreach($kategorigallery->result() as $k){
                     echo '<option value="'.$k->id_kategorigallery.'">'.$k->nama_kategorigallery.'</option>';
                  } ?>
               </select>
            </div>
      		<div class="form-group">
      			<label for="">Keterangan Gallery</label>
      			<textarea class="form-control" name="ket_gallery"></textarea>
      		</div>
            <div class="form-group">
               <label for="">Pilih Gallery</label>
               <input type="file" name="filegallery"  class="form-control">
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
<script>
   $(function(){
    $('.select').select2();
   })
</script>