	<nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="John Smith" src="images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>Sign in</a>
					</div>
					<div class="menu-top-info-sub">
						<small>Please fill the required fields below</small>
					</div>
				</div>
				<div class="menu-content">
							<form class="form" action="php/user-login.php" method="post">
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-username">Username</label>
														<input class="form-control" id="login-username" type="text" name="username">
													</div>
												</div>
											</div>
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-password">Password</label>
														<input class="form-control" id="login-password" type="password" name="password">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<button class="btn btn-block btn-blue waves-button waves-effect waves-light" name="submit">Sign In</button>
													</div>
												</div>
											</div>
										</form>

					<!-- <ul class="nav">
						<li>
							<a href="javascript:void(0)"><span class="icon icon-account-box"></span>Profile Settings</a>
						</li>
						<li>
							<a href="javascript:void(0)"><span class="icon icon-add-to-photos"></span>Upload Photo</a>
						</li>
						<li>
							<a href="page-login.html"><span class="icon icon-exit-to-app"></span>Logout</a>
						</li>
					</ul> -->
				</div>
			</div>
		</div>
	</nav>