

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Data Kamar</h1>
   
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/kamar/simpan_edit_kamar')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $kamar->id_kamar ?>">
						<div class="form-group col-lg-12">
							<label>No Kamar: </label>
							<input type="text" name="nomor_kamar" class="form-control js-single" id="nomor_kamar" value="<?= $kamar->nomor_kamar ?>">
						</div>
                        <div class="form-group col-lg-12">
							<label>Jenis Kamar : </label>
							<select name="jenis_kamar" id="jenis_kamar" class="form-control js-single">
                            <?php foreach($jenisk as $jk): ?>
                            <option value="<?= $jk->id_jenis ?>" <?php  if($kamar->jenis_id == $jk->id_jenis) 
                            { echo "selected";}?>><?= $jk->nama_jenis_kamar?></option>
                            <?php endforeach ;?>
                            </select>
						</div>
                        <div class="form-group col-lg-12">
							<label>Keterangan : </label>
							<input type="text" name="ket_kamar" class="form-control js-single" id="ket_kamar" value="<?= $kamar->ket_kamar ?>">
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
