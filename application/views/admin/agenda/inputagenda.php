<div class="">
   <form action="<?php echo base_url('agenda/tambah') ?>" method="post" enctype="multipart/form-data">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Tambah Data Agenda</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <label for="">Judul Agenda</label>
               <input type="text" name="judul_agenda"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Isi Agenda</label>
               <textarea class="form-control" id="editor1" name="isi_agenda"></textarea>
            </div>
            <div class="form-group">
               <label for="">Tempat Agenda</label>
               <input type="text" name="tempat_agenda"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Tanggal Agenda</label>
               <input type="text" class="form-control datepicker" name="tgl_agenda" autocomplete="off">
            </div>
            <div class="form-group">
               <label for="">Waktu Agenda (12:45)</label>
               <input type="text" name="waktu_agenda"  class="form-control">
            </div>
            <div class="form-group">
               <label for="">Foto Agenda</label>
               <input type="file" name="fileagenda"  class="form-control">
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
      $('.datepicker').datepicker({
         format : "yyyy-m-d",
      });
   })
</script>
<?php if($this->session->flashdata('msg')=='simpan'){ ?>
<script>
   iziToast.show({timeout:5000,color:'green',title: 'Berhasil Disimpan',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='gagal'){ ?>
<script>
   iziToast.show({timeout:5000,color:'red',title: 'Gagal',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>