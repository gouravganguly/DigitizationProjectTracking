<?php include('header.php') ?>
	<form class="login100-form validate-form" method="post" action=#>
		<span class="login100-form-title">
			Registration
		</span>
		<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
			<input class="input100" type="text" name="email" placeholder="Email">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 validate-input" data-validate = "Password is required">
			<input class="input100" type="password" name="pass" placeholder="Password">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>		
		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Login" name="submit" />
		</div>
		<div class="text-center p-t-12">
			<span class="txt1">
				Forgot
			</span>
			<a class="txt2" href="#">
				Username / Password?
			</a>
		</div>
		<div class="text-center p-t-136">
			<a class="txt2" href="login1.php">
				Back
				<i class="fa fa-long-arrow-left m-l-5" aria-hidden="true"></i>
			</a>
		</div>
	</form>
<?php include('footer.php'); ?>