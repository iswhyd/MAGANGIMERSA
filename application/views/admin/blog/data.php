<div class="">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>Data Blog</b></h3>
			<span class="pull-right"><a href="<?php echo base_url('admin/inputblog'); ?>" class="btn btn-success btn-xs">Input Blog</a></span>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-hover example1">
				<thead>
					<th width="5%">No</th>
					<th>Judul Blog</th>
					<th>Kategori Blog</th>
					<th>Tgl Input</th>
					<th>Gambar</th>
					<th width="15%">Aksi</th>
				</thead>
				<tbody>
					<?php $no=1; foreach($blog->result() as $r){ ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $r->judul_blog; ?></td>
						<td><?php echo $r->nama_kategoriblog; ?></td>
						<td><?php echo tglwaktu($r->tglinput_blog); ?></td>
						<td><img src="<?php echo base_url($r->foto_blog); ?>" alt="" width="120px"></td>
						<td>
							<a href="<?php echo base_url('admin/editblog/'.$r->id_blog); ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
							<a href="#" onclick="hapus('<?php echo $r->id_blog; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Hapus</a>
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
		  title: "Menghapus Blog Ini?",
		  text: "Tekan Ya Untuk Setuju dan Tekan Batal Jika Tidak Setuju",
		  type: "warning",
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal',
		})
		.then(function () {
        	$.ajax({
				type : "GET",
				url : "<?php echo base_url('blog/hapus/'); ?>"+id,
				cache : false,
				async : false,
				success : function(response){
					swal("Blog Berhasil Dihapus", {
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