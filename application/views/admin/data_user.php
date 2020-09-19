<div class="container-fluid">
	<table class="table table-bordered mt-4">
		<tr>
			<th>No</th>
			<th>Usernama</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
			<th>Id Level</th>
			<th>Aksi</th>
		</tr>
		<?php 
        $no=1;
        foreach($user as $usr) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $usr->username?></td>
			<td><?php echo $usr->password?></td>
			<td><?php echo $usr->nama_user?></td>
			<td><?php echo $usr->id_level?></td>
			<td><?php echo anchor('admin/data_user/hapus/'.$usr->id_user, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>
</div>
