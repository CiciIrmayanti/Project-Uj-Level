<div class="container-fluid">
	<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah_makanan"> <i
			class="fas fa-plus fa-sm"></i> Tambah Data</button>
	<table class="table table-bordered mt-4">
		<tr>
			<th>No</th>
			<th>Nama Makanan</th>
			<th>Harga</th>
			<th>Status Makanan</th>
			<th>Kategori</th>
			<th colspan="3">Aksi</th>
		</tr>
		<?php 
        $no=1;
        foreach($makanan as $mkn) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $mkn->nama_makanan?></td>
			<td><?php echo $mkn->harga?></td>
			<td><?php echo $mkn->status_makanan?></td>
			<td><?php echo $mkn->kategori?></td>
			<td>
				<?php echo anchor('admin/data_makanan/edit/'.$mkn->id_makanan, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
			</td>
			<td>
				<?php echo anchor('admin/data_makanan/hapus/'.$mkn->id_makanan, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambah_makanan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form Input Product</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url().'admin/data_makanan/tambah_aksi'; ?>" method="post"
					enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Nama makanan</label>
						<input type="text" name="nama_makanan" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Status Makanan</label>
						<input type="text" name="status_makanan" class="form-control">
					</div>
					<div class="form-group">
						<label for="">Kategori</label>
						<select name="kategori" id="" class="form-control">
							<option value="makanan">Makanan</option>
							<option value="minuman">Minuman</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Gambar</label> <br>
						<input type="file" name="gambar" class="form-control">
					</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</div>
	</div>
</div>
