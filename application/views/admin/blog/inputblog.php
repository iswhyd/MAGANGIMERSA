<div class="row">
   <form action="<?php echo base_url('blog/tambah') ?>" method="post" enctype="multipart/form-data">
   <div class="col-md-4">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Pilih Kategori Dan Gambar</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <label for="">Kategori Blog</label>
               <select name="id_kategoriblog" id="id_kategoriblog" class="form-control select">
                  <option value="">Pilih</option>
                  <?php foreach($kategoriblog->result() as $k){
                     echo '<option value="'.$k->id_kategoriblog.'">'.$k->nama_kategoriblog.'</option>';
                  } ?>
               </select>
            </div>
            <div class="form-group">
               <label for="">Pilih Gambar</label>
               <input type="file" name="fileblog"  class="form-control">
            </div>
         </div>
      </div>
   </div>
   <div class="col-md-8">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Judul Dan Isi Blog</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <label for="">Judul Blog</label>
               <input type="text" name="judul_blog"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Isi Blog</label>
               <textarea class="form-control" id="editor1" name="isi_blog"></textarea>
            </div>
         </div>
         <div class="box-footer">
            <button class="btn btn-primary"><i class="fa fa-check"></i> Simpan</button>
         </div>
      </div>
   </div>
   </form>
</div>
<?php if($this->session->flashdata('msg')=='simpan'){ ?>
<script type="text/javascript">
  iziToast.show({timeout:false,color:'green',title: 'Blog Berhasil Disimpan',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='gagal'){ ?>
<script>
   iziToast.show({timeout:5000,color:'red',title: 'Gagal',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<script>
   $(function(){
    $('.select').select2();
    $('input').iCheck({
       checkboxClass: 'icheckbox_square-green',
       radioClass: 'iradio_square-green',
       increaseArea: '20%' // optional
    });
    CKEDITOR.replace('editor1',{
      height: 300,
    });
   });
</script>