<div class="container-fluid">
	<h4>Invoice Pemesanan</h4>
	<table class="table table-bordered table-hover table-striped">
 
		<tr>
			<th>Id Order</th>
			<th>Id Makanan</th>
			<th>Nama Makanan</th>
			<th>Jumlah Pesanan</th>
            <th>Total Pesanan</th>
            <th>Subtotal</th>
		</tr>
        <?php foreach ($invoice as $inv) : ?>
        <tr>
            <td><?php echo $inv->id_order ?></td>
            <td><?php echo $inv->id_makanan ?></td>
            <td><?php echo $inv->nama_makanan ?></td>
            <td><?php echo $inv->jumlah_pesan ?></td>
            <td><?php echo $inv->total_pesanan ?></td>
            <td><?php echo $inv->total_harga?></td>
            
        </tr>
        <?php endforeach; ?>

        
	</table>
</div>
