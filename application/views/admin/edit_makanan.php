<div class="container-fluid">
	<h3><i class="fas fa-edit"></i> Edit Data Makanan</h3>

	<?php foreach($makanan as $mkn) : ?>
	<form action="<?php echo base_url().'admin/data_makanan/update'?>" method="post">
		<div class="for-group">
			<label for="">Nama Makanan</label>
			<input type="text" name="nama_makanan" class="form-control" value="<?php echo $mkn->nama_makanan ?>">
		</div>

		<div class="for-group">
			<label for="">Harga</label>
			<input type="hidden" name="id_makanan" class="form-control" value="<?php echo $mkn->id_makanan ?>">
			<input type="text" name="harga" class="form-control" value="<?php echo $mkn->harga ?>">
		</div>

		<div class="for-group">
			<label for="">Status Makanan</label>
			<input type="text" name="status_makanan" class="form-control" value="<?php echo $mkn->status_makanan ?>">
		</div>

		<div class="for-group">
			<label for="">Kategori</label>
			<input type="text" name="kategori" class="form-control" value="<?php echo $mkn->kategori ?>">
		</div>


		<button class="btn btn-primary btn-sm mt-3" type="submit">Simpan</button>
	</form>
	<?php endforeach; ?>

</div>
