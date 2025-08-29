<div class="">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>Data Kategori Gallery</b></h3>
			<span class="pull-right"><a href="#" onclick="tambah()" class="btn btn-success btn-xs">Tambah Kategori Gallery</a></span>
		</div>
		<div class="box-body">
			<table class="table table-bordered table-hover example1">
				<thead>
					<th width="5%">No</th>
					<th>Nama Kategori Gallery</th>
					<th width="20%">Aksi</th>
				</thead>
				<tbody>
					<?php $no=1; foreach($kategorigallery->result() as $r){ ?>
					<tr>
						<td><?php echo $no; ?></td>
						<td><?php echo $r->nama_kategorigallery; ?></td>
						<td>
							<a href="#" onclick="edit('<?php echo $r->id_kategorigallery; ?>')" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
							<a href="#" onclick="hapus('<?php echo $r->id_kategorigallery; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Hapus</a>
						</td>
					</tr>
					<?php $no++; } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div id="tambah"></div>
<div id="edit"></div>
<script>
	function	tambah(){
		$.ajax({
			type : "GET",
			url : "<?php echo base_url('admin/tambahkategorigallery'); ?>",
			cache : false,
			async : false,
			success : function(html){
				$("#tambah").html(html).show();
				$('#modtambah').modal('show');
			}
		});
	}
	function	edit(id){
		$.ajax({
			type : "GET",
			url : "<?php echo base_url('admin/editkategorigallery/'); ?>"+id,
			cache : false,
			async : false,
			success : function(html){
				$("#edit").html(html).show();
				$('#modedit').modal('show');
			}
		});
	}
	function hapus(id){
		swal({
		  title: "Menghapus Kategori Gallery Ini?",
		  text: "Tekan Ya Untuk Setuju dan Tekan Batal Jika Tidak Setuju",
		  type: "warning",
        showCancelButton: true,
        confirmButtonText: 'Ya',
        cancelButtonText: 'Batal',
		})
		.then(function () {
        	$.ajax({
				type : "GET",
				url : "<?php echo base_url('kategorigallery/hapus/'); ?>"+id,
				cache : false,
				async : false,
				success : function(response){
					swal("Kategori Gallery Berhasil Dihapus", {
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
<?php if($this->session->flashdata('msg')=='simpan'){ ?>
<script>
	iziToast.show({timeout:5000,color:'green',title: 'Berhasil Disimpan',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='edit'){ ?>
<script>
	iziToast.show({timeout:5000,color:'blue',title: 'Berhasil Diedit',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>
<?php if($this->session->flashdata('msg')=='hapus'){ ?>
<script>
	iziToast.show({timeout:5000,color:'red',title: 'Berhasil Dihapus',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>