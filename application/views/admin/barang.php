<h3>Data Barang</h3>
<hr>
<form method="post">
	<table class="table table-striped table-bordered" id="myTable">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Harga</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $a = 0; foreach($barang as $a_item): $a++;?>
			<tr>
				<td><?=$a?></td>
				<td><?=$a_item->nama_barang?></td>
				<td><?=$a_item->harga_barang?></td>
				<td>
					<a href="<?=site_url('admin/edit_admin/'.$a_item->id_barang)?>" class="btn btn-primary btn-xs">Edit</a>
					<button type="submit" class="btn btn-danger btn-xs" name="del" value="<?=$a_item->id_barang?>">Hapus</button>
				</td>
			</tr>
		<?php endforeach;?>
		</tbody>
	</table>
</form>