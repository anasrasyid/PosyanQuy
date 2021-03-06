<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<title>Daftar Antrian</title>
	<style>
		.row {
			margin-top: 200px;
		}

	</style>
</head>

<body>
	<!-- Navbar -->

	<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="#">
				<img src="brand.svg" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
				aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
				<div class="navbar-nav">
					<a class="nav-item nav-link" href="profile-ibu.html">Profile</span></a>
					<a class="nav-item nav-link active" href="form-antrian.html">Daftar Antrian</a>
				</div>
			</div>
		</div>
	</nav> -->

	<!-- Akhir Navbar -->

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-5">
				<div class="card">
					<div class="card-header text-center">
						Form Pendaftaran Antrian
					</div>
					<div class="card-body">
						<form action="<?php echo site_url('member/pendaftaranAntrian')?>" method="POST">
							<div class="form-group pt-4">
								<label for="anak">Nama anak:</label><br>
								<select id="anak" name="anak">
									<?php foreach ($anak as $row) { ?>
									<option value="<?php echo $row->id ?>" ><?php echo $row->nama?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group pt-4">
								<label>Pilih Tanggal Imunisasi</label><br>
								<input type="date" class="tanggal" name="tanggal" id="myDate">
							</div>
							<div class="form-group pt-4 pb-4">
								<h3>Antrian yang sudah masuk hari ini : <span class="antrian"></span></h3>
							</div>
							<button type="submit" name="tambah" class="btn btn-primary btn-block">Daftar
								Antrian</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var today = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000)
		myDate.min = today.toISOString().split("T")[0]
	</script>
	<script>
		$(document).ready(function () {
			$(".tanggal").change(function () {
				$.ajax({
					url: "get_antrian/" + $(this).val(),
					success: function (result) {
						$(".antrian").html(result);
					},
					error: function () {
                    	$(".antrian").html(' ');
                	}
				});
			});
		});

	</script>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"> </Script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
		integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
		integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
	</script>
</body>

</html>
