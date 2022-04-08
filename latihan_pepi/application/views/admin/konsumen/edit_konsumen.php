

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Data Konsumen</h1>
    <?php 
        foreach($editks as $eks): 
        $id = $eks->id_konsumen;
        endforeach; 
    ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/konsumen/simpan_editks')?>">
                    <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Nama Lengkap: </label>
							<input type="text" name="nama_lengkap" class="form-control js-single" id="nama_lengkap" value="<?= $eks->nama_lengkap  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Alamat: </label>
							<input type="text" name="alamat" class="form-control js-single" id="alamat" value="<?= $eks->alamat  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Kota: </label>
							<input type="text" name="kota" class="form-control js-single" id="kota" value="<?= $eks->kota  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Provinsi: </label>
							<input type="text" name="provinsi" class="form-control js-single" id="provinsi" value="<?= $eks->provinsi  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Negara: </label>
							<input type="text" name="negara" class="form-control js-single" id="negara" value="<?= $eks->negara  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Nomor Identitas: </label>
							<input type="text" name="no_identitas" class="form-control js-single" id="no_identitas" value="<?= $eks->no_identitas  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Nomor Telepon: </label>
							<input type="text" name="no_telepon" class="form-control js-single" id="no_telepon" value="<?= $eks->no_telepon  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Email: </label>
							<input type="text" name="email" class="form-control js-single" id="email" value="<?= $eks->email  ?>">
						</div>
	
						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="edit()">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function edit(){
							Swal.fire({
							icon: 'success',
							title: 'Berhasil Diubah!',
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
