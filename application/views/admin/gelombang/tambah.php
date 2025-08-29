<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Gelombang</h4>
      	</div>
      	<form action="<?php echo base_url('gelombang/tambah') ?>" method="post">
      	<div class="modal-body">
      		<div class="form-group">
      			<label for="">Nama Gelombang</label>
      			<input type="text" name="nama_gelombang"  class="form-control">
      		</div>
            <div class="form-group">
               <label for="">Mulai Gelombang</label>
               <input type="text" name="mulai_gelombang"  class="form-control date" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="">Selesai Gelombang</label>
               <input type="text" name="selesai_gelombang"  class="form-control date" autocomplete="off">
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
    $('.date').datepicker({
      local : "id",
      format : "dd-mm-yyyy",
      autoclose : true,
    });
  });
</script>