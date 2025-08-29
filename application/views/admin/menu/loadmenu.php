<?php $no=1; foreach($menu->result() as $r){ ?>
<tr>
	<td><?php echo $no; ?></td>
	<td><?php echo $r->nama_menu; ?></td>
	<td><?php echo $r->link_menu; ?></td>
	<td><?php echo $r->urutan_menu; ?></td>
	<td><button class="btn btn-success btn-xs" onclick="tamurutan_menu('<?php echo $r->id_menu; ?>')"><i class="fa fa-chevron-up"></i></button></td>
	<td><button class="btn btn-info btn-xs" onclick="kururutan_menu('<?php echo $r->id_menu; ?>')"><i class="fa fa-chevron-down"></td>
	<td>
		<a href="<?php echo base_url('admin/submenu/'.$r->id_menu); ?>" class="btn bg-navy btn-xs"><i class="fa fa-check"></i> Sub Menu</a>
		<a href="#" onclick="hapus('<?php echo $r->id_menu; ?>')" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> Hapus</a>
	</td>
</tr>
<?php $no++; } ?>
<script>
	function tamurutan_menu(id){
		$.ajax({
			type : "POST",
			url : "<?php echo base_url('menu/tamurutan_menu/'); ?>"+id,
			cache : false,
			async : false,
			success : function(response){
				datamenu();
			}
		});
	}
	function kururutan_menu(id){
		$.ajax({
			type : "POST",
			url : "<?php echo base_url('menu/kururutan_menu/'); ?>"+id,
			cache : false,
			async : false,
			success : function(response){
				datamenu();
			}
		});
	}
</script>