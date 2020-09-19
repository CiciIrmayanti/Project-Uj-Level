<div class="container-fluid">
	<table class="table table-bordered mt-4 text-center">
		<tr>
			<th>No</th>
			<th>Nomor Meja</th>
			<th>Tanggal</th>
			<th>Id User</th>
			<th>Keterangan</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
        $no=1;
        foreach($order as $orders) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $orders->no_meja?></td>
			<td><?php echo $orders->tanggal?></td>
			<td><?php echo $orders->id_user?></td>
			<td><?php echo $orders->keterangan?></td>
			<td><?php echo anchor('kasir/data_order/bayar/'.$orders->id_order, '<div class="btn btn-primary btn-sm">Pembayaran</div>')?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
