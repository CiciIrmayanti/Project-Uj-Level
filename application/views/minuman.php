<div class="container-fluid">
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="<?php echo base_url('assets/img/kantin5.jpg')?>" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="<?php echo base_url('assets/img/kantin4.jpg')?>" class="d-block w-100" alt="...">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<div class="row text-center mt-4">
		<?php foreach ($minuman as $mkn) : ?>

		<div class="card ml-3 mb-3" style="width: 18rem;">
			<img src="<?php echo base_url().'/uploads/'.$mkn->gambar ?>" class="card-img-top" alt="...">
			<div class="card-body">
				<h5 class="card-title mb-1"><?php echo $mkn->nama_makanan?></h5>
				<span class="badge badge-success mb-2"><small>Rp.
						<?php echo number_format($mkn->harga, 0,',','.')?></small></span> <br>
				<span class="badge badge-warning mb-2"><small><?php echo $mkn->status_makanan?></small></span> <br>
				<?php echo anchor('dashboard/tambah_ke_keranjang/'.$mkn->id_makanan,'<div class="btn btn-sm btn-primary">Tambah Ke Keranjang</div>') ?>
				<?php echo anchor('dashboard/detail_order/'.$mkn->id_makanan,'<div class="btn btn-sm btn-success">Detail</div>') ?>
			</div>
		</div>

		<?php  endforeach; ?>
	</div>
</div>
