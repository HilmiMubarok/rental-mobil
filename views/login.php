<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?= APP_NAME ?> - Login</title>
	<link href="<?= base_url('sb-admin-2/') ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?= base_url('sb-admin-2/') ?>/css/sb-admin-2.min.css" rel="stylesheet">
	<style>
	.asup {
		background-image:url(<?= base_url('uploads/bg.jpg') ?>);
		background-sizze:cover;
	}
	</style>
</head>

<body class="bg-gradient-primary asup">

	<div class="container">

		<!-- Outer Row -->
		<div class="row justify-content-start mt-5">

			<div class="col-md-5">

				<div class="card o-hidden border-0 shadow-lg my-3 h-100">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col">
								<div class="p-5">
									<div class="text-center my-3">
										<h1 class="h4 text-gray-900 mb-4">Rental<b>Mobil</b></h1>
									</div>
									<?php if(checkSession('success')): ?>
										<div class="alert alert-success alert-dismissible fade show" role="alert">
								  			<?= getSession('success', true) ?>
								  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    			<span aria-hidden="true">&times;</span>
								  			</button>
										</div>
									<?php elseif(checkSession('error')): ?>
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
								  			<?= getSession('error', true) ?>
								  			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								    			<span aria-hidden="true">&times;</span>
								  			</button>
										</div>
									<?php endif ?>
									<form class="user" method="POST" action="<?= base_url('auth/login') ?>">
										<div class="form-group">
											<input type="text" class="form-control form-control-user" name="username" placeholder="Masukan username" autocomplete="off" required="required" autofocus>
										</div> <br> 
										<div class="form-group">
											<input type="password" class="form-control form-control-user" name="password" placeholder="Masukan password" required="required">
										</div> <br>
										<button class="btn btn-primary btn-user btn-block" name="login">MASUK</button>
										<hr>
										<center>
										<small>Created By Tin Awalul M &copy; 2021.</small>
										</center>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery/jquery.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="<?= base_url('sb-admin-2/') ?>/js/sb-admin-2.min.js"></script>

</body>

</html>
