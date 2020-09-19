<div class="container-fluid">

	<table class="table table-bordered mt-4">

		<tr>

			<th>No</th>
			<th>Id User</th>
			<th>Id Order</th>
			<th>Tanggal</th>
			<th>Total Harga</th>
			<th>Uang</th>
			<th>Kembalian</th>
			<th colspan="3">Aksi</th>

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
			<td><?php echo $trs->nominal_uang?></td>
			<td><?php echo $trs->kembalian ?></td>
			<td>
				<?php echo anchor('kasir/data_transaksi/edit/'.$trs->id_transaksi, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
			</td>
			<td><?php echo anchor('kasir/data_transaksi/hapus/'.$trs->id_transaksi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
			</td>
			<td><?php echo anchor('kasir/data_transaksi/struk/'.$trs->id_transaksi, '<div class="btn btn-success btn-sm"><i class="fas fa-shopping-cart"></i></i></div>')?>
			</td>
		</tr>
		<?php endforeach; ?>

	</table>

</div>