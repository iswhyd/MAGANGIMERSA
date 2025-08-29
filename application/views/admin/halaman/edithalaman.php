<?php foreach($halaman->result() as $hal); ?>
<div class="">
   <form action="<?php echo base_url('halaman/edit/'.$hal->id_halaman); ?>" method="post" enctype="multipart/form-data">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Edit Data Halaman</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <label for="">Judul Halaman</label>
               <input type="text" name="judul_halaman"  class="form-control" value="<?php echo $hal->judul_halaman; ?>">
            </div>
            <div class="form-group">
               <label for="">Isi Halaman</label>
               <textarea class="form-control" id="editor1" name="isi_halaman"><?php echo $hal->isi_halaman; ?></textarea>
            </div>
         </div>
         <div class="box-footer">
            <button class="btn btn-primary"><i class="fa fa-check"></i> Edit</button>
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