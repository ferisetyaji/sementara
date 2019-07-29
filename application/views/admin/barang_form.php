<h3>Tambah Barang</h3>
<hr>
<form method="post">
	<div class="form-group row">
		<label class="col-md-3">Nama Barang</label>
		<div class="col-md-8">
			<input type="text" class="form-control" name="nama" value="<?=@$barang->nama_barang?>">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-3">Harga</label>
		<div class="col-md-8">
			<input type="text" class="form-control" name="harga" value="<?=@$barang->harga_barang?>">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-3"></label>
		<div class="col-md-8">
			<button type="submit" class="btn btn-success btn-sm" name="save" value="1">Simpan</button>
			<a href="<?=site_url('admin/barang')?>" class="btn btn-danger btn-sm">Batal</a>
		</div>
	</div>
</form>