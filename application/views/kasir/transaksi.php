<div class="container-fluid">
	<h3> <i class="fas fa-money-check-alt"></i> Pembayaran </h3>
	<?php foreach($order as $orders): ?>

	<form action="<?php echo base_url().'kasir/data_order/tambah_bayar'; ?>" method="post"
		enctype="multipart/form-data">
		<div class="form-group">
			<label for="">Id User</label>
			<input type="text" name="id_user" class="form-control" value="<?php echo $orders->id_user?>" readonly>
		</div>
		<div class="form-group">
			<label for="">Id Order</label>
			<input type="text" name="id_order" class="form-control" value="<?php echo $orders->id_order?>" readonly>
		</div>
		<div class="form-group">
			<label for="">Tanggal</label>
			<input type="text" name="tanggal" class="form-control" value="<?php echo $orders->tanggal?>" readonly>
		</div>
		<div class="form-group">
			<label for="">Total Harga</label>
			<input type="text" name="total_harga" id="total_harga" class="form-control"
				value="<?php echo $orders->total_harga?>" readonly>
		</div>
		<div class="form-group">
			<label for="">Nominal Uang</label>
			<input type="text" name="nominal_uang" id="nominal_uang" placeholder="Nominal Uang" class="form-control"
				onkeyup="kembalians()">
		</div>

		<div class="form-group">
			<label for="">Kembalian</label>
			<input type="text" name="kembalian" id="kembalian" placeholder="Kembalian" class="form-control" readonly>
		</div>
</div>
<button type="submit" class="btn btn-primary ml-4">Simpan</button>
<?php echo anchor('kasir/data_order/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>
</form>
<?php endforeach; ?>

</div>
</div>
</div>
<script>
	function kembalians() {
		var uang = Number(document.getElementById("nominal_uang").value);
		var totharga = Number(document.getElementById("total_harga").value);

		var kembali = uang - totharga;
		Number(document.getElementById("kembalian").value = kembali)
	};

</script>
