<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Fasilitas</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah Transaksi</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/transaksi/simpan_transaksi')?>" enctype="multipart/form-data">
                    <div class="form-group col-lg-12">
							<label>Tanggal : </label>
							<input type="date" name="tanggal" class="form-control js-single" id="tanggal">
						</div>
						<div class="form-group col-lg-12">
							<label>Atas Nama : </label>
							<input type="text" name="atas_nama" class="form-control js-single" id="atas_nama">
						</div>
                        <div class="form-group col-lg-12">
							<label>Jenis Kamar : </label>
							<select name="jenis_kamar" id="jenis_kamar" class="form-control js-single">
							<?php foreach($jenisk as $jk): ?>
							<option value="<?= $jk->id_jenis ?>"><?= $jk->nama_jenis_kamar ?></option>
							<?php endforeach; ?>
							</select>
						</div>
                        <div class="form-group col-lg-12">
							<label>Nomor Kamar : </label>
							<select name="nomor_kamar" id="nomor_kamar" class="form-control js-single">
							<?php foreach($kamar as $km): ?>
							<option value="<?= $km->id_kamar ?>"><?= $km->nomor_kamar ?></option>
							<?php endforeach; ?>
							</select>
						</div>
						<div class="form-group col-lg-12">
							<label>Waktu Sewa (hari) : </label>
							<input type="number" name="waktu_sewa" class="form-control js-single" id="waktu_sewa">
						</div>
						<div class="form-group col-lg-12">
							<label>Jenis Pembayaran : </label>
							<select name="jenis_pembayaran" id="jenis_pembayaran" class="form-control js-single"> 
							<option value="cash">Cash</option>
							<option value="debit">Debit</option>
							</select>
						</div>
						
						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="tambahruang()">
								<i class="fa fa-pencil"></i>Selesai</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function tambah(){
							Swal.fire({
							icon: 'success',
							title: 'Berhasil Ditambah!',
							 showClass: {
								popup: 'animate__animated animate__fadeInDown'
							},
							hideClass: {
								popup: 'animate__animated animate__fadeInDown'
							}
							})
							}
						</script>
				</div>
			</div>
		</div>

	</div>

</div>
	</div>
