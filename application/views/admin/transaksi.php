<h3>Data Transaksi</h3>
<hr>
<form method="post">
	<table class="table table-striped table-bordered" id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Username</th>
				<th>Nama Lengkap</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $a = 0; foreach($admin as $a_item): $a++;?>
			<tr>
				<td><?=$a?></td>
				<td><?=$a_item->username?></td>
				<td><?=$a_item->nama_admin?></td>
				<td>
					<a href="<?=site_url('admin/edit_admin/'.$a_item->id_admin)?>" class="btn btn-primary btn-xs">Edit</a>
					<button type="submit" class="btn btn-danger btn-xs" name="del" value="<?=$a_item->id_admin?>">Hapus</button>
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</form>