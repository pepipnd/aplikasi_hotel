
<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Pembayaran</h1>
	<?php 
    foreach($bukti as $bk):
        $bk_id = $bk->id_transaksi;
        $tanggal = $bk->tanggal;
        $nomor_kamar = $bk->nomor_kamar;
        $jenis_kamar = $bk->jenis_kamar;
        $harga = $bk->harga;
        $waktu_sewa = $bk->waktu_sewa;
    endforeach;
    ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/transaksi/print_bukti')?>" enctype="multipart/form-data">
					<input type="" name="transaksi_id" value="<?= $bk_id ?>">
						<div class="form-group col-lg-12">
							<label>Tanggal : </label>
							<input type="text" name="tanggal" class="form-control js-single" id="tanggal" value="<?= $tanggal; ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Atas Nama : </label>
							<input type="text" name="atas_nama" class="form-control js-single" id="atas_nama">
						</div>
                        <div class="form-group col-lg-12">
							<label>Nomor Kamar : </label>
							<input type="text" name="nomor_kamar" class="form-control js-single" id="nomor_kamar" value="<?= $nomor_kamar; ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Jenis Kamar : </label>
							<input type="text" name="jenis_kamar" class="form-control js-single" id="jenis_kamar" value="<?= $jenis_kamar; ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Harga : </label>
							<input type="text" name="harga" class="form-control js-single" id="harga" value="<?= $harga; ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Waktu Sewa(hari) : </label>
							<input type="text" name="waktu_sewa" class="form-control js-single" id="waktu_sewa" value="<?= $waktu_sewa; ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Total Pembayaran : </label>
							<input type="text" name="total" class="form-control js-single" id="total">
						</div>
						<tr>
						<td>Jenis Pembayaran</td>
						<td>:</td>
						<td>
						<select name="jenis_pembayaran" id="jenis_pembayaran">
						<option value="cash">Cash</option>
						<option value="debit">Debit</option>
						</select>
						</td>
						</tr>
						<div class="form-group col-lg-6">
							<button type="reset" class="btn btn-danger">Sebelumnya</button>
                            <button type="submit" class="btn btn-info btn-flat" onclick="tambahruang()">
								<i class="fa fa-pencil"></i>Selesai & Print</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function tambahruang(){
							Swal.fire({
							icon: 'success',
							title: 'Kategori Berhasil Ditambah!',
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
