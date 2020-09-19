<div class="container-fluid">
	<?php echo "Tanggal: ".date('d-m-Y'); ?>
	<table id="example" border="1px" cellspacing="0" class="table table-striped table-bordered" style="width: 100%">
		<tr>
			<th>No</th>
			<th>Id User</th>
			<th>Id Order</th>
			<th>Tanggal</th>
			<th>Total Harga</th>
		</tr>
		<?php 
        if($c_transaksi){
        $no=1;
        foreach($transaksi as $trs) { ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $trs->id_user?></td>
			<td><?php echo $trs->id_order?></td>
			<td><?php echo $trs->tanggal?></td>
			<td><?php echo $trs->total_harga?></td>
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
