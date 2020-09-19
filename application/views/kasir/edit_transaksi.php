<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Transaksi</h3>

	<?php foreach($transaksi as $trs) : ?>
	<form action="<?php echo base_url().'kasir/data_transaksi/update'?>" method="post">
		<div class="for-group">
			<label for="">Id User</label>
			<input type="text" name="id_user" class="form-control" value="<?php echo $trs->id_user ?>">
		</div>

		<div class="for-group">
			<label for="">Id Order</label>
			<input type="hidden" name="id_transaksi" class="form-control" value="<?php echo $trs->id_transaksi ?>">
			<input type="text" name="id_order" class="form-control" value="<?php echo $trs->id_order ?>">
		</div>

		<div class="for-group">
			<label for="">Tanggal</label>
			<input type="text" name="tanggal" class="form-control" value="<?php echo $trs->tanggal ?>">
		</div>

		<div class="for-group">
			<label for="">Total Harga</label>
			<input type="text" name="total_harga" class="form-control" value="<?php echo $trs->total_harga ?>">
		</div>

		<div class="for-group">
			<label for="">Nominal Uang</label>
			<input type="text" name="nominal_uang" class="form-control" value="<?php echo $trs->nominal_uang ?>">
		</div>

		<div class="for-group">
			<label for="">Kembalian</label>
			<input type="text" name="kembalian" class="form-control" value="<?php echo $trs->kembalian ?>">
		</div>

		<button class="btn btn-primary btn-sm mt-3" type="submit">Edit Data</button>
	</form>
	<?php endforeach; ?>

</div>
