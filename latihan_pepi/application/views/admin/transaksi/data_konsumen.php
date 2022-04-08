
<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Data Diri Konsumen</h1>

	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/transaksi/simpan_isidataksm')?>" enctype="multipart/form-data">
						<div class="form-group col-lg-12">
							<label>Nama Lengkap : </label>
							<input type="text" name="nama_lengkap" class="form-control js-single" id="nama_lengkap">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat : </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat">
						</div>
						<div class="form-group col-lg-12">
							<label>Kota : </label>
							<input type="text" name="kota" class="form-control js-single" id="kota">
						</div>
						<div class="form-group col-lg-12">
							<label>Provinsi : </label>
							<input type="text" name="provinsi" class="form-control js-single" id="provinsi">
						</div>
						<div class="form-group col-lg-12">
							<label>Negara : </label>
							<input type="text" name="negara" class="form-control js-single" id="negara">
						</div>
						<div class="form-group col-lg-12">
							<label>Nomor Identitas : </label>
							<input type="text" name="no_identitas" class="form-control js-single" id="no_identitas">
						</div>
						<div class="form-group col-lg-12">
							<label>Nomor telepon : </label>
							<input type="number" name="no_telepon" class="form-control js-single" id="no_telepon">
						</div>
						<div class="form-group col-lg-12">
							<label>Email : </label>
							<input type="email" name="email" class="form-control js-single" id="email">
						</div>
						<div class="form-group col-lg-6">
                            <button type="submit" class="btn btn-info btn-flat" onclick="tambahruang()">
								<i class="fa fa-pencil"></i>Selanjutnya</button>
								<button type="reset" class="btn btn-danger">reset</button>

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
