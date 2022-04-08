<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Jenis Kamar</title>
</head>

<body>
	<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Edit Jenis Kamar</h1>
    <?php 
        foreach($editjk as $ejk): 
        $id = $ejk->id_jenis;
        endforeach; 
    ?>
	<div class="row">

		<div class="col-lg-6">

			<!-- Circle Buttons -->
			<div class="card shadow mb-12">
				<div class="card-body">
					<form method="post" action="<?=base_url('index.php/Jenis_kamar/simpan_editjk')?>" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $id ?>">
						<div class="form-group col-lg-12">
							<label>Nama jenis kamar: </label>
							<input type="text" name="nama_jenis_kamar" class="form-control js-single" id="nama_jenis_kamar" value="<?= $ejk->nama_jenis_kamar  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Keterangan : </label>
							<input type="text" name="keterangan" class="form-control js-single" id="keterangan" value="<?= $ejk->keterangan  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Jumlah kamar : </label>
							<input type="number" name="jumlah_kamar" class="form-control js-single" id="jumlah_kamar" value="<?= $ejk->jumlah_kamar  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Harga : </label>
							<input type="number" name="harga" class="form-control js-single" id="harga" value="<?= $ejk->harga  ?>">
						</div>
						<div class="form-group col-lg-12">
							<label>Gambar : </label>
                            <input type="file" name="gambarjk" id="gambarjk" class="form-control js-single" accept="image/jpeg, image/jpg, image/png" value="<?= $ejk->gambarjk  ?>">
						</div>

						<div class="form-group col-lg-6">
							<button type="submit" class="btn btn-info btn-flat" onclick="editjk()">
								<i class="fa fa-pencil"></i> Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</div>
						<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
						<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
						/>
						<script>
							function editjk(){
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
