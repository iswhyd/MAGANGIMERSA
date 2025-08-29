<?php foreach($agenda->result() as $r); ?>
<div class="">
   <form action="<?php echo base_url('agenda/edit/'.$r->id_agenda) ?>" method="post" enctype="multipart/form-data">
      <div class="box box-solid">
         <div class="box-header with-border bg-info">
            <h3 class="box-title">Edit Data Agenda</h3>
         </div>
         <div class="box-body">
            <div class="form-group">
               <label for="">Judul Agenda</label>
               <input type="text" name="judul_agenda"  class="form-control" value="<?php echo $r->judul_agenda; ?>">
            </div>
            <div class="form-group">
               <label for="">Isi Agenda</label>
               <textarea class="form-control" id="editor1" name="isi_agenda"><?php echo $r->isi_agenda; ?></textarea>
            </div>
            <div class="form-group">
               <label for="">Tempat Agenda</label>
               <input type="text" name="tempat_agenda"  class="form-control" value="<?php echo $r->tempat_agenda; ?>">
            </div>
            <div class="form-group">
               <label for="">Tanggal Agenda</label>
               <input type="text" class="form-control datepicker" name="tgl_agenda" autocomplete="off" value="<?php echo $r->tgl_agenda; ?>">
            </div>
            <div class="form-group">
               <label for="">Waktu Agenda (12:45)</label>
               <input type="text" name="waktu_agenda"  class="form-control" value="<?php echo $r->waktu_agenda; ?>">
            </div>
            <div class="form-group">
               <label for="">Gambar Saat Ini</label><br>
               <img src="<?php echo base_url($r->foto_agenda); ?>" alt="" width="200px">
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
<?php if($this->session->flashdata('msg')=='edit'){ ?>
<script>
  iziToast.show({timeout:5000,color:'blue',title: 'Berhasil Diedit',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='gagal'){ ?>
<script>
   iziToast.show({timeout:5000,color:'red',title: 'Gagal',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>