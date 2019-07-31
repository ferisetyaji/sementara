<div class="row">
	<div class="col-md-8">
		<h3>Tambah Admin</h3>
		<hr>
		<form method="post">
			<div class="form-group row">
				<label class="col-md-3">Nama Admin</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="fullname" value="<?=@$admin->nama_admin?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3">Username</label>
				<div class="col-md-8">
					<input type="text" class="form-control" name="username" value="<?=@$admin->username?>">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3">Password</label>
				<div class="col-md-8">
					<input type="password" class="form-control" name="form-control" name="password">
				</div>
			</div>
			<div class="form-group row">
				<label class="col-md-3"></label>
				<div class="col-md-8">
					<button type="submit" class="btn btn-success btn-sm" name="save" value="1">Simpan</button>
					<a href="<?=site_url('admin')?>" class="btn btn-danger btn-sm">Batal</a>
				</div>
			</div>
		</form>
	</div>
</div>