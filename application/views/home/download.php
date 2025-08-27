<!-- Download -->
<section class="padding-top padding-bottom-half" style="margin-top: -50px;">
  <div class="container">
    <div class="text-center"><h2 class="heading text">Download<span class="divider-center"></span></h2></div>
    <div class="row">
      <table class="table table-bordered table-hover serverside" style="width:100%;">
        <thead>
          <th width="5%">No</th>
          <th>Ket Download</th>
          <th>Tgl Input</th>
          <th>Telah Didownload</th>
          <th width="10%">Aksi</th>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</section>
<!-- Download -->
<script>
  $(document).ready(function(){
    loaddownload();
  });
  function loaddownload(){
    $('.serverside').DataTable({ 
         "processing": true, 
         "serverSide": true, 
         "pageLength": 10,
         "order": [], 
         "ajax": {
             "url": "<?php echo site_url('download/get_data_download')?>",
             "type": "POST"
         },
         "columnDefs": [
         { 
             "targets": [ 0 ], 
             "orderable": false, 
         },
         ],
      });
  }
</script>
