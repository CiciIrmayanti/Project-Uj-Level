<div class="container-fluid">
<?php echo "Tanggal: ".date('d-m-Y'); ?>
<br>
	<h4>Invoice Pemesanan</h4>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Order</th>
			<th>Id Makanan</th>
			<th>Nama Makanan</th>
			<th>Jumlah Pesanan</th>
			<th>Total Harga</th>
            <th>Nominal Uang</th>
            <th>Kembalian</th>
		</tr>
        <?php
        if($c_invoice){
        $no=1;
        foreach($invoice as $inv) { ?>
            <tr>
            <td><?php echo $inv->id_order ?></td>
            <td><?php echo $inv->id_makanan ?></td>
            <td><?php echo $inv->nama_makanan ?></td>
            <td><?php echo $inv->jumlah_pesan ?></td>
            <td><?php echo $inv->total_pesanan ?></td>
            <td><?php echo $inv->nominal_uang ?></td>
            <td><?php echo $inv->kembalian ?></td>
            
        </tr>

		<?php } 
        }else {
                                ?>
		<!-- <tr>
                                    <td colspan="8">Data User Kosong!</td>
                                </tr> -->
		<?php
                            }
                        ?>

        
	</table>
</div>
