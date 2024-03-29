<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<title>Admin | Profil</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<?php
			@include_once("navigasi.php");
		?>

		<div class="main">
			<?php
				@include_once("header.php");
			?>

			<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Profile</h1>
						</div>
					<div class="row">
						<div class="col-md-4 col-xl-12">
							<div class="card mb-3">								
								<div class="card-body text-center">
									<img id="img-profile-admin" src="img/no_image.png" alt="photo" class="img-fluid rounded-circle mb-2"/>
									<h5 class="card-title mb-0" id="namaLengkap"></h5>
									<div class="text-muted mb-2" id="username"></div>

									<div>									
										<a class="btn btn-primary" href="profile-admin-edit.php"><span data-feather="edit-2"></span> Edit Profil</a>
									</div>
								</div>
								<div class="card-body">
									<h5 class="h6 card-title">About</h5>
									<ul class="list-unstyled mb-0">
										<li class="mb-1"><span data-feather="heart" class="feather-sm me-1"></span> Jenis Kelamin  <a  id="jenisKelamin" href="#">-</a></li>
										<li class="mb-1"><span data-feather="home" class="feather-sm me-1"></span> Tempat Tanggal Lahir <a id="ttl" href="#">- <time>dd/mm/yyyy</time> </a></li>
										<li class="mb-1"><span data-feather="map-pin" class="feather-sm me-1"></span> Alamat <a id="alamat" href="#">-</a></li>
										<li class="mb-1"><span data-feather="maik" class="feather-sm me-1"></span> Email <a id="emailProfil" href="#">-</a></li>
									</ul>
								</div>								
							</div>
						</div>
					</div>
				</div>
			</main>

			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-12 text-center">
							<p class="mb-0">
								<a href="index.html" class="text-muted"><strong>Perpustakaan Digital</strong></a> &copy;
							</p>
						</div>						
					</div>
				</div>
			</footer>
		</div>
	</div>
	<?php
		@include_once("sourceJS.html");
	?>
	<script src="js/app.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>