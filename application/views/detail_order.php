<div class="container-fluid">
	<div class="card">
		<div class="card-header">
			Detail Produk
		</div>
		<div class="card-body">
			<?php foreach($makanan as $mkn): ?>
			<div class="row">
				<div class="col-md-4">
					<img src="<?php echo base_url().'/uploads/'.$mkn->gambar ?>" alt="" class="card-img-top">
				</div>
				<div class="col-md-8">
					<table class="table">
						<tr>
							<td>Nama Menu</td>
							<td><strong><?php echo $mkn->nama_makanan?></strong></td>
						</tr>
						<tr>
							<td>Harga</td>
							<td><strong>
									<div class="btn btn-sm btn-success">Rp.
										<?php echo number_format($mkn->harga,0,',','.')?></div>
								</strong>
							</td>
						</tr>
						<tr>
							<td>Kategori</td>
							<td><strong><?php echo $mkn->kategori?></strong>
						</td>
						</tr>
					</table>
					<?php echo anchor('dashboard/tambah_ke_keranjang/'.$mkn->id_makanan,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
					<?php echo anchor('welcome/index/'.$mkn->id_makanan,'<div class="btn btn-sm btn-danger">Kembali</div>') ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
