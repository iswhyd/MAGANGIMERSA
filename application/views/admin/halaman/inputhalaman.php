<div class="">
   <form action="<?php echo base_url('halaman/tambah') ?>" method="post" enctype="multipart/form-data">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Tambah Data Halaman</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <label for="">Judul Halaman</label>
               <input type="text" name="judul_halaman"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Isi Halaman</label>
               <textarea class="form-control" id="editor1" name="isi_halaman"></textarea>
            </div>
         </div>
         <div class="box-footer">
            <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
         </div>
      </div>
   </form>
</div>
<script>
   $(function(){
      CKEDITOR.replace('editor1',{
      height: 300,
    });
   })
</script>