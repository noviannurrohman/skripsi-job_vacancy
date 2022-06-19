<script>
		localStorage.setItem('user', 'student')
	</script>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="<?= base_url('assets/login'); ?>/img/logo_mahasiswa.png" alt="logo">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title" style="text-align:center;">Login Student</h4>

							<?= $this->session->flashdata('message'); ?>

							<form method="POST" class="my-login-validation" novalidate="" action="<?= base_url('student/login/aksi_login'); ?>">

								<div class="form-group">
									<label for="nim">NIM</label>
									<input id="nim" type="text" class="form-control" name="nim" value="" required autofocus>
									<div class="invalid-feedback">
										Email is invalid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<!-- <a href="forgot.html" class="float-right">
											Forgot Password?
										</a> -->
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password is required
							    	</div>
								</div>

								<!-- <div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Remember Me</label>
									</div>
								</div> -->

								<div class="form-group m-0">
									<button type="submit" class="btn btn-primary btn-block">
										Login
									</button>
								</div>
								<div class="mt-4 text-center">
									Don't have an account? <a href="<?= base_url('student/register'); ?>">Create One</a>
								</div>
							</form>
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2017 &mdash; E-Job Vacancy
					</div>
				</div>
			</div>
		</div>
	</section>