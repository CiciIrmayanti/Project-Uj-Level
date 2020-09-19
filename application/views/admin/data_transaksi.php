<div class="container-fluid">
	<a href="<?php echo site_url('dashboard/cetak');?>" class="btn btn-info mt-2">Download PDF</a>

	<table class="table table-bordered mt-4">
		<tr>
			<th>No</th>
			<th>Id User</th>
			<th>Id Order</th>
			<th>Tanggal</th>
			<th>Total Harga</th>
			<th>Aksi</th>
		</tr>
		<?php 
        $no=1;
        foreach($transaksi as $trs) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $trs->id_user?></td>
			<td><?php echo $trs->id_order?></td>
			<td><?php echo $trs->tanggal?></td>
			<td><?php echo $trs->total_harga?></td>
			<td><?php echo anchor('admin/data_transaksi/hapus/'.$trs->id_transaksi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>
