<?php $no=1; foreach($submenu->result() as $r){ ?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $r->nama_submenu; ?></td>
	<td><?php echo $r->link_submenu; ?></td>
	<td><?php echo $r->urutan_submenu; ?></td>
	<td><button class="btn btn-success btn-xs" onclick="tamurutan_submenu('<?php echo $r->id_submenu; ?>')"><i class="fa fa-chevron-up"></i></button></td>
	<td><button class="btn btn-info btn-xs" onclick="kururutan_submenu('<?php echo $r->id_submenu; ?>')"><i class="fa fa-chevron-down"></td>
	<td>
		<a href="#" onclick="hapus('<?php echo $r->id_submenu; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Hapus</a>
	</td>
</tr>
<?php $no++; } ?>
<script>
	function tamurutan_submenu(id){
		$.ajax({
			type : "POST",
			url : "<?php echo base_url('submenu/tamurutan_submenu/'); ?>"+id,
			cache : false,
			async : false,
			success : function(response){
				datasubmenu();
			}
		});
	}
	function kururutan_submenu(id){
		$.ajax({
			type : "POST",
			url : "<?php echo base_url('submenu/kururutan_submenu/'); ?>"+id,
			cache : false,
			async : false,
			success : function(response){
				datasubmenu();
			}
		});
	}
</script>