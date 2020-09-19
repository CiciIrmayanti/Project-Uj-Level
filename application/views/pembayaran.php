<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="">
					<?php $grand_total = 0;
							if($keranjang = $this->cart->contents()){
								foreach ($keranjang as $item)
								{
									$grand_total = $grand_total + $item['subtotal'];
								}
								echo "<h5>Total Belanja Anda : Rp.".number_format($grand_total,0,',','.');
							
					?>
				</div>
		
			<hr>

			<h3 class="text-center">Input Pemesanan</h3>
			
			<form action="<?php echo base_url().'dashboard/proses_pesanan'; ?>" method="post"
				enctype="multipart/form-data">

				<div class="form-group">
					<label for="">No Meja</label>
					<input type="text" name="no_meja" placeholder="Nomor Meja" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Tanggal</label>
					<input type="date" name="tanggal" placeholder="Tanggal" class="form-control"
						value="<?php echo date('Y-m-d')?>" readonly>
				</div>

				<div class="form-group">
					<label for="">Id User</label>
					<input type="text" name="id_user" placeholder="Id User" class="form-control"
						value="<?php echo $this->session->userdata('id_user') ?>" readonly>
				</div>

				<div class="form-group">
					<label for="">Keterangan</label>
					<input type="text" name="keterangan" placeholder="Keterangan" class="form-control">
				</div>

				<div class="form-group">
					<label for="">Total Harga</label>
					<input type="text" name="total_harga" id="total_harga" placeholder="Total Harga" class="form-control"
						value="<?php echo $grand_total?>" readonly>
				</div>


				<button type="submit" class="btn btn-sm btn-primary ">Pesan</button>
				<?php echo anchor('dashboard/detail_keranjang/','<div class="btn btn-sm btn-danger">Kembali</div>') ?>

			</form>

			<?php 
                } else {
                    echo "<h4>Keranjang Belanja Anda Masih Kosong";
                }
            
            ?>
		</div>

		<div class="col-md-2"></div>

	</div>
</div>

