<?php
$this->load->view('templates/header');
$this->load->view('templates/sidebar');
$this->load->view('templates/topbar');
?>
<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<div class="clearfix">
		<h5 class="h3 mb-4 text-gray-800 float-left">Ubah Data Obat</h5>
		<a href="<?= base_url('data_obat'); ?>" class="btn btn-secondary btn-sm float-right"><i class="fas fa-reply"></i> Kembali</a>
	</div>
	<hr>
	<div class="card">
		<div class="card-header">
			<span class="text-primary"><strong>Silahkan isi data di bawah ini!</strong></span>
		</div>
		<div class="card-body">
			<form action="<?= base_url('data_obat/aksi_edit'); ?>" method="post">
				<div class="form-group">
					<label for="text">Kode Obat</label>
					<input type="text" name="kode_obat" value="<?php echo $data_obat->kode_obat ?>" class="form-control">
				</div>

				<div class="form-group">
					<label for="text">Nama Obat</label>
					<input type="text" name="nama_obat" value="<?php echo $data_obat->nama_obat ?>" class="form-control">
				</div>

				<div class="form-group">
					<label for="text">Jenis Obat</label>
					<input type="text" name="jenis_obat" value="<?php echo $data_obat->jenis_obat ?>" class="form-control">
				</div>

				<div class="form-group">
					<label for="text">Dosis Aturan Obat</label>
					<input type="text" name="dosis_aturan_obat" value="<?php echo $data_obat->dosis_aturan_obat ?>" class="form-control">
				</div>

				<div class="form-group">
					<label for="text">Satuan</label>
					<input type="text" name="satuan" value="<?php echo $data_obat->satuan ?>" class="form-control">
				</div>
				<button type="submit" class="btn btn-primary btn-sm" name="simpan"><i class="fas fa-save"></i> Simpan</button>
				<button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-times"></i> Batal</button>
		</div>
	</div>
</div>
</div>
<?php
$this->load->view('templates/footer');
?>
