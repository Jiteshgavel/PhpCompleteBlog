<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<---- Include the above in your HEAD tag ---------->


<?php  include "include/header.php" ?>
<?php  //include "include/nav.php" ?>
<?php  include "include/nav.php" ?>
<!-- Signup fontawesome link -->
<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
<link rel="stylesheet" href="assets/css/signup.css">






<br>
<br>




<div class=" card border-0 m-5 pt-4">
<article class=" mx-auto">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<p>
		<a href="" class="btn btn-block bg-danger text-white btn-twitter"> <i class="fa fa-google" aria-hidden="true"></i>   Login via Twitter</a>
		<a href="" class="btn btn-block bg-primary text-white btn-facebook"> <i class="fa fa-facebook" aria-hidden="true"></i>   Login via facebook</a>
	</p>
	<p class="divider-text">
        <span class="bg-light">OR</span>
	</p>
	<?php 

		if(isset($_POST['submit']))
		{
		 $data = $_POST;

		if (empty($data['username']) ||
			empty($data['password']) ||
			empty($data['email']) ||
			empty($data['password_confirm'])) {
			
			
			echo "<div class='alert alert-danger' role='alert'>
			Please fill all required fields!
		   </div>";
			
		   
				 if ($data['password'] !== $data['password_confirm']) {
				
			     echo "<div class='alert alert-danger' role='alert'>
				 Password and Confirm password should match!
				 </div>";
				
			
		        echo $username = mysqli_real_escape_string($con,$_POST['username']);
				echo $email = mysqli_real_escape_string($con,$_POST['email']);
				echo $passwordConfirm = mysqli_real_escape_string($con,$_POST['password_confirm']);

				$query = "SELECT * FROM users WHERE user_email ='$email' ";
				$check_email = mysqli_query($con,$query);
				$email_count = mysqli_num_rows($check_email);

						if($email_count>0)
						{
							echo "<div class='alert alert-danger' role='alert'>
							Your Account is Already  Exists!
							</div>";
						}
						else
						{
						
						$passwordConfirm = password_hash($passwordConfirm,PASSWORD_BCRYPT,array('cost'=>12));
						
							$query = "INSERT INTO users (user_name,user_email,user_password,user_role)";
							$query .="VALUES('{$username}','{$email}','{$passwordConfirm}','suscriber')";
							$register = mysqli_query($con,$query);

							// if(!$register)
							// {
								
							// }

							if($register)
							{
								echo "<div class='alert alert-success' role='alert'>
									Thankyou You are Registered..
									</div>";
							}
							else
							{
								mysqli_error($register);
							}
						}
					}
		}
	 }			
			
	?>









	<form method="POST" action="">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>
        <input name="username" class="form-control" placeholder="Full name" type="text">
    </div> <!-- form-group// -->


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email">
    </div> <!-- form-group// -->


    <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input name="password" class="form-control" placeholder="Create password" type="password">
	</div>
	 
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" name="password_confirm" placeholder="Confirm password" type="password">
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account?  
	<a href="" class="" data-toggle="modal" data-target="#exampleModalCenter">Login</a>
	</p>                                                                 
</form>
</article>
</div> <!-- card.// -->




</div> 
<!--container end.//-->


<?php  include "include/footer.php" ?>