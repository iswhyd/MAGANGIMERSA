<div class="modal fade" id="modtambah">
   <div class="modal-dialog">
      <div class="modal-content">
      	<div class="modal-header bg-success">
				<h4>Tambah Menu</h4>
      	</div>
      	<div class="modal-body">
            <p>Custom Link</p>
            <form id="fcuslink">
      		<div class="form-group">
      			<label for="">Nama Menu</label>
      			<input type="text" name="nama_menu"  class="form-control">
      		</div>
            <div class="form-group">
               <label for="">Link Menu</label>
               <input type="text" name="link_menu"  class="form-control">
            </div>
            </form>
            <button class="btn btn-success btn-sm" onclick="cuslink()">Simpan Link Custom</button>
            <hr>
            <p>Halaman Link</p>
            <form id="fhallink">
            <div class="form-group">
               <label for="">Nama Menu</label>
               <input type="text" name="nama_menu"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Halaman</label>
               <select name="link_menu"  class="form-control select" style="width:100%;">
                  <option value="">Pilih Halaman</option>
                  <?php foreach($halaman->result() as $k){
                     echo '<option value="'.base_url('home/halaman/'.$k->id_halaman).'">'.$k->judul_halaman.'</option>';
                  } ?>
               </select>
            </div>
            </form>
            <button class="btn btn-success btn-sm" onclick="hallink()">Simpan Link Halaman</button>
            <hr>
            <p>Blog Link</p>
            <form id="fbloglink">
            <div class="form-group">
               <label for="">Nama Menu</label>
               <input type="text" name="nama_menu"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Blog</label>
               <select name="link_menu"  class="form-control select" style="width:100%;">
                  <option value="">Pilih Blog</option>
                  <?php foreach($blog->result() as $b){
                     echo '<option value="'.base_url('home/blog/'.$b->id_blog).'">'.$b->judul_blog.'</option>';
                  } ?>
               </select>
            </div>
            </form>
            <button class="btn btn-success btn-sm" onclick="bloglink()">Simpan Link Blog</button>
      	</div>
      </div>
   </div>
</div>
<script>
   $(function(){
      $('.select').select2();
   });
   function cuslink(){
      $.ajax({
         type : "POST",
         url : "<?php echo base_url('menu/tambah'); ?>",
         data : $('#fcuslink').serialize(),
         async  : false,
         cache : false,
         success : function(response){
            datamenu();
         }
      })
   }
   function hallink(){
      $.ajax({
         type : "POST",
         url : "<?php echo base_url('menu/tambah'); ?>",
         data : $('#fhallink').serialize(),
         async  : false,
         cache : false,
         success : function(response){
            datamenu();
         }
      })
   }
   function bloglink(){
      $.ajax({
         type : "POST",
         url : "<?php echo base_url('menu/tambah'); ?>",
         data : $('#fbloglink').serialize(),
         async  : false,
         cache : false,
         success : function(response){
            datamenu();
         }
      })
   }
</script>