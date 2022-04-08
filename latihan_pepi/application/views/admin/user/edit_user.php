<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Data User</h1>
    <?php 
        foreach($editu as $eu): 
        $id = $eu->id_user;
        endforeach; 
    ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/User/simpan_edit_user')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Nama Lengkap: </label>
							<input type="text" name="nama_lengkap" class="form-control js-single" id="nama_lengkap" value="<?= $eu->nama_lengkap  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Email: </label>
							<input type="email" name="email" class="form-control js-single" id="email" value="<?= $eu->email  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>No HP: </label>
							<input type="number" name="no_hp" class="form-control js-single" id="no_hp" value="<?= $eu->no_hp  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Password: </label>
							<input type="password" name="password" class="form-control js-single" id="password" value="<?= $eu->password  ?>">
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
