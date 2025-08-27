<div class="">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>Data Agenda</b></h3>
			<span class="pull-right"><a href="<?php echo base_url('admin/inputagenda'); ?>" class="btn btn-success btn-xs">Input Agenda</a></span>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-hover example1">
				<thead>
					<th width="5%">No</th>
					<th>Foto</th>
					<th>Tgl|Waktu Agenda</th>
					<th>Judul Agenda</th>
					<th>Tempat</th>
					<th>Tgl Input</th>
					<th width="15%">Aksi</th>
				</thead>
				<tbody>
					<?php $no=1; foreach($agenda->result() as $r){ ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><img src="<?php echo base_url($r->foto_agenda); ?>" alt="" width="120px"></td>
						<td><?php echo tglwaktu($r->tgl_agenda.''.$r->waktu_agenda); ?></td>
						<td><?php echo $r->judul_agenda; ?></td>
						<td><?php echo $r->tempat_agenda; ?></td>
						<td><?php echo dmywaktu($r->tglinput_agenda); ?></td>

						<td>
							<a href="<?php echo base_url('admin/editagenda/'.$r->id_agenda); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
							<a href="#" onclick="hapus('<?php echo $r->id_agenda; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Hapus</a>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
	function hapus(id){
		swal({
		  title: "Menghapus Agenda Ini?",
		  text: "Tekan Ya Untuk Setuju dan Tekan Batal Jika Tidak Setuju",
		  type: "warning",
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal',
		})
		.then(function () {
        	$.ajax({
				type : "GET",
				url : "<?php echo base_url('Agenda/hapus/'); ?>"+id,
				cache : false,
				async : false,
				success : function(response){
					swal("Agenda Berhasil Dihapus", {
				      icon: "success",
				   });
				   
				}
			});
			document.location.reload();
      },
      function (dismiss) {
        if(dismiss === 'cancel') {
          swal("Anda Membatalkan Proses");
        }
      })
	}
</script>