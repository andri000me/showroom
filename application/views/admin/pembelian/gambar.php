<?php  
	// eror upload
	if(isset($error)){
		echo '<p class="alert alert-warning">';
		echo $error;
		echo '</p>';
	}
	//Notif Error
	echo validation_errors('<div class="alert alert-warning">','</div>');

 	//Form open
 	echo form_open_multipart(base_url('admin/beli/gambar/'.$produk->id_produk),' class="form-horizontal"'); 
?>

	<div class="form-group form-group-lg">
		<label class="col-md-2 control-label">Judul Gambar</label>

		<div class="col-md-5">
		<input type="text" name="judul_gambar" class="form-control" placeholder="Judul Gambar" value="<?= set_value('judul_gambar'); ?>" required>
		</div>
	</div>

	<div class="form-group form-group-lg">
		<label class="col-md-2 control-label">Unggah Gambar</label>

		<div class="col-md-4">
		<input type="file" name="gambar" class="form-control" placeholder="Gambar" value="<?= set_value('gambar'); ?>" required>
		</div>
	<div class="col-md-4">
		<button class="btn btn-success btn-lg" name="submit" type="submit">
			<i class="fa fa-save"></i>Simpan
		</button>
		<button class="btn btn-info btn-lg" name="reset" type="reset">
			<i class="fa fa-times"></i>Reset
		</button>
	</div>
</div>

<?= form_close(); ?>

<?php 
	// notif
	if($this->session->flashdata('sukses')){
		echo "<div>";
		echo '<p class="alert alert-success">';
		echo $this->session->flashdata('sukses');
		echo "</div>";
	}

?>

<table class="table table-bordered" id="example1">
	<thead>
		<tr>
			<th>NO</th>
			<th>GAMBAR</th>
			<th>JUDUL GAMBAR</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td>
				<img src="<?= base_url('assets/upload/image/thumbs/'.$produk->gambar); ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?= $produk->nama_produk; ?></td>
			<td>
				
			</td>
		</tr>

		<?php $no=2; foreach($gambar as $gambar) { ?>
		<tr>
			<td><?= $no; ?></td>
			<td>
				<img src="<?= base_url('assets/upload/image/thumbs/'.$gambar->gambar); ?>" class="img img-responsive img-thumbnail" width="60">
			</td>
			<td><?= $gambar->judul_gambar; ?></td>
			<td>
				 
				<a href="<?= base_url('admin/beli/delete_gambar/'.$produk->id_produk.'/'.$gambar->id_gambar); ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin menghapus gambar ini')"><i class="fa fa-trash-o"></i>Hapus</a>

			</td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table>