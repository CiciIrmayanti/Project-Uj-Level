<body class="bg-gradient-primary">

	<div class="container">

		<div class="card o-hidden border-0 shadow-lg my-5">
			<div class="card-body p-0">
				<!-- Nested Row within Card Body -->
				<div class="row">
					<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
					<div class="col-lg-7">
						<div class="p-5">
							<div class="text-center">
								<h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
							</div>
							<form method="post" action="<?php echo base_url('registrasi/index') ?>" class="user">

								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="exampleInputEmail"
										placeholder="Username" name="username">
									<?php echo form_error('username', '<div class="text-danger small ml-2">','</div>'); ?>
								</div>

								<div class="form-group row">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input type="password" class="form-control form-control-user"
											id="exampleInputPassword" placeholder="Password" name="password_1">
										<?php echo form_error('password_1', '<div class="text-danger small ml-2">','</div>'); ?>
									</div>

									<div class="col-sm-6">
										<input type="password" class="form-control form-control-user"
											id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2">
									</div>
								</div>

								<div class="form-group">
									<input type="text" class="form-control form-control-user" id="exampleInputEmail"
										placeholder="Nama Lengkap" name="nama_user">
									<?php echo form_error('nama_user', '<div class="text-danger small ml-2">','</div>'); ?>
								</div>

								<div class="form-group">
									<select name="id_level" id="" class="form-control">
										<option value="1">1 </option>
										<option value="2">2 </option>
										<option value="3">3 </option>
									</select>
								</div>

								<button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>

							</form>
							<hr>
							<div class="text-center">
								<a class="small" href="<?php echo base_url('auth/login') ?>">Sudah Punya Akun?
									Silahkan Login!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
