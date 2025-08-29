<?php 
$adm= $this->Mlogin->getoneadmin($this->session->userdata('id_admin'))->row_array();
?>
<div class="row">
	<div class="col-lg-6">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title"><b>Update Akun</b></h3>
		</div>
		<div class="box-body">
			<form method="post" action="<?php echo base_url('admin/updateakun'); ?>">
				<div class="form-group">
					<label>Nama</label>
					<input type="text" class="form-control" name="nama_admin" value="<?php echo $adm['nama_admin']; ?>">
				</div>
				<div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username_admin" value="<?php echo $adm['username_admin']; ?>">
				</div>
				<div class="form-group">
					<label>Password <span class="text-danger">*kosongkan password jika tidak merubahnya</span></label>
					<input type="text" class="form-control" name="password_admin">
				</div>
				<button class="btn btn-success"><i class="fa fa-check"></i> Update</button>
			</form>
		</div>
	</div>
	</div>
</div>

<?php if($this->session->flashdata('msg')=='edit'){ ?>
<script>
	iziToast.show({timeout:5000,color:'blue',title: 'Berhasil Diupdate',position: 'topRight',pauseOnHover: true,transitionIn: false});
</script>
<?php } ?>