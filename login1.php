<?php
	session_start();
?> 
<!--
<?php //include('server.php') ?> -->

<?php include('header.php') ?>


<div class="form-w3ls">


    <ul class="tab-group cl-effect-4" id="horizontal-list" >
        <li class="tab active" style="padding: 10px 5px 10px 60px;" > <a href="#signin-agile" style="font-size: 20px;">Sign In</a></li>
		<li class="tab inactive" style="padding: 10px 30px 10px 10px;">  <a href="#signup-agile" style="font-size: 20px; ">Sign Up</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">




				<form class="login100-form validate-form" method="POST" action="server.php">
					<span class="login100-form-title">
						Member Login
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
						<a class="txt2" href="login-admin.php">
							Admin
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>  
					</div>
				</form>


				</div>
		<div id="signup-agile">  


				
				<form  method="post" action="server.php">
		<span class="login100-form-title">
			Registration
		</span>
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="username" placeholder="Name">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-user" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="text" name="email" placeholder="Email">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</span>
		</div>
		<div class="wrap-input100 ">
			<input class="input100" type="password" name="pass1" placeholder="Password"> 
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>		
		<div class="wrap-input100 ">
			<input class="input100" type="password" name="pass2" placeholder="Confirm Password">
			<span class="focus-input100"></span>
			<span class="symbol-input100">
				<i class="fa fa-lock" aria-hidden="true"></i>
			</span>
		</div>	
		<div class="container-login100-form-btn">
			<input type="submit" class="login100-form-btn" value="Submit" name="submit1" />
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


	</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
  
			<?php include('footer.php'); ?>