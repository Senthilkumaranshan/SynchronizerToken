<?php

	if(isset($_POST['user_name']) && isset($_POST['pwd']))
	{
		$username=$_POST['user_name'];
		$password=$_POST['pwd'];

		if (!(($username=='admin') && ($password=='admin')))
		{
			echo "Check your Credentials";
			
			exit();	
		}

	}

?>


<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <title>My account - Bootstrap Themes</title>
        <link rel='stylesheet' href='https://themes.getbootstrap.com/wp-content/themes/bootstrap-marketplace/style.css?ver=1531597991' />
		
		
    </head>
    <body class="page-template-default page page-id-7 page-parent woocommerce woocommerce-account woocommerce-page dokan-theme-dokan">
<a href='logout.php' name="logout" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;">log out</a>
		<main id="main" class="site-main main">
			<section class="section">
				<div class="container">
					<div class="row">
						<div class="container container--xs">
							<div class="woocommerce">



								<div id="signup_div_wrapper" style="margin-top:-100px !important">
									<img class="img-fluid mx-auto d-block mb-5" width="100px" height="100px" src="signin_icon.png" alt="logo">
									<h1 style="margin-top:-50px !important"class="mb-1 text-center">User Details</h1>
									<p class="fs-14 text-gray text-center mb-5">Fill all details</p>

    												<input id="fill" type="button" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;" name="fill" value="Auto Fill Details" />

										<form method="post" action="final.php" class="register">

											<p class="woocommerce-FormRow woocommerce-FormRow--first form-row form-row-first">
												<label for="reg_sr_firstname">Name <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name" id="name" value=""  required/>
											</p>

											<p class="woocommerce-FormRow woocommerce-FormRow--last form-row form-row-last">
												<label for="reg_sr_lastname">Email <span class="required">*</span></label>
												<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email" value=""  required />
											</p>
			
			
											<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="reg_email">Phone Number <span class="required">*</span></label>
												<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="phone" value="" />
											</p>

											<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
												<label for="reg_password">Address <span class="required">*</span></label>
												<textarea class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="address"> </textarea>
											</p>
											
											<p class="woocomerce-FormRow form-row">
												          
												<input type="submit" class="btn btn-brand btn-block btn-lg mb-4 mt-3" style="margin:0;background-color:#00bfff !important;" name="submit" value="Submit" />
											</p>
											
											
											
											<input type="hidden" name="csrf" value="" id="csrf"/>
    
										</form>
									

                                        <p class="text-gray-soft text-center small mb-2">By clicking "Submit" you can submit your details.</p>
   

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
        </main>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script>
			$(document).ready(function()
			{
				var xhttp;
				xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() 
				{
					if (this.readyState == 4 && this.status == 200) 
					{
						document.getElementById("csrf").setAttribute('value', this.responseText) ;
					}
			
				};
			
				xhttp.open("GET", "generate_csrf.php", true);
				xhttp.send();
			});
	   </script>
	   	   <script>
	   $(document).on("click","#fill",function(e){
		  $('#name').val("John Smith");
		  $('#email').val("John.s@gmail.com");
		  $('#phone').val("0771234567");
		  $('#address').val("No 33, Martin St, L.A.");
	   });
	   </script>
	   


	</body>
</html>