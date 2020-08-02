<?php

	$bool = "true";
	$invalid = "";

	if(isset($_POST['submitted'])){
		
		
		if(!empty($_POST['id']))
		{
			if (strlen($_POST['id'])<5){
				$error_id = "Your email or username should have more than 4 alphanumerics!";
				$bool="false";
			} 
			else 
				$id = $_POST['id'];
		} 
		else {
			$error_id = "Please enter your id.";
			$bool="false";
		}
		
		if(!empty($_POST['password']))
			$password = $_POST['password'];
		else {
			$error_password = "Please enter you password.";
			$bool="false";
		}
		
		if ($bool=="true"){
			$ticketDB = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($ticketDB,'Book_Ticket_Website');

			$sql_id = "SELECT * FROM Users WHERE User_Id='$id'";
			$res_u = mysqli_query($ticketDB, $sql_id);
			if(mysqli_num_rows($res_u) > 0){
				$sql = "SELECT * FROM Users WHERE User_Id='$id' AND User_Password='$password'";
				$result = mysqli_query($ticketDB, $sql);

				if(mysqli_num_rows($result) > 0){
					session_start();
					if(isset($_SESSION['id'])) {
				 		session_destroy();
				 		session_start();
				 		$_SESSION['id'] = $_POST['id'];
					}
					else
						$_SESSION['id'] = $_POST['id'];

					header('Location:Success.php');
				}
				else
					$invalid = "ID and password does not match!";
			}
			else
				$invalid = "ID does not exist!";

			mysqli_close($ticketDB);
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
form {
    margin-left: 50%;
    margin-right:50%;
    width: 80%;
}
</style>
</head>
<body>
<?php
	//head
	include "head.php";
?>

<?php
		echo "<body onload=\"updateClock(); setInterval('updateClock()', 1000 )\">";
		
		//preloader
		include "preloader.php";
		//header
		include "headerWC.php";
		//nav
		include "nav.php";
		
?>
<?php
include 'header.php';
echo "               <h1><strong>Sign in</strong></h1>";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Sign In</strong></div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section\" id=\"contact-section\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row justify-content-center text-center\">\n";
echo "       <div class=\"col-md-6 mb-4 mb-lg-0\">\n";
echo "         <h3 class=\"text-uppercase\">Sign In</p></h3>\n";
echo "         <p>Please enter your id and password to sign in.</p></br>\n";
echo "       </div>";
echo "     </div>";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-8 mb-5\" >\n";
echo "           <form action=\"#\" method=\"post\">\n";
echo "             <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-6 mb-4 mb-lg-0\">";
?>

						<div class="input-contact">
					   <?php 
							if (empty($id)){
								echo "<input type=\"text\" name=\"id\" class=\"form-control\" placeholder=\"ID\">\n";
								echo "<span>ID</span>";
								if (!empty($error_id)){
									echo "<p style=\"color:red;\">$error_id</p>";
								}		
							}
							else{
								echo "<input type=\"text\" name=\"id\" class=\"form-control\" placeholder=\"$id\" value=\"$id\">\n";
							}	
						?>
						</div>
<?php
echo "               </div>\n";
echo "				 </div>\n";
echo "				<form action=\"#\" method=\"post\" autocomplete=\"off\">";
echo "              <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-6\">\n";
?>
						
						<div class="input-contact">
						<?php 
							if (empty($password)){
								echo "<input type=\"text\" name=\"password\" class=\"form-control\" placeholder=\"Password\">\n";
								echo "<span>password</span>";
								if (!empty($error_password)){
									echo "<p style=\"color:red;\">$error_password</p>";
								}		
							}
							else{
								echo "<input type=\"text\" name=\"password\" class=\"form-control\" placeholder=\"password\" value=\"$password\">\n";
							}
							echo "<p style=\"color:red;\">$invalid</p>";	
						?>
						</div>

					</br>
					<div class="col-md-12">
							<input type = "submit" class="btn btn-box" value = "Sign In" name = "submit">
							<input type = "hidden" name = "submitted" value = "true">
					</div>
	
<?php
echo "               </div>\n";
echo "             </div>\n";
?>
					
<?php
echo "             <div class=\"form-group row\">\n";
?>
					
<?php
echo "             </div>\n";
echo "				<input type = \"hidden\" name = \"submitted\" value = \"true\">";
echo "           </form>\n";
echo "         </div>\n";

echo "       </div>\n";
echo "     </div>\n";
echo "   </div>\n";
echo "\n";
echo "     \n";
include 'footer2.php';
echo "  </body>\n";
echo "</html>\n";
?>



<?php
	
	
	//javascript scripts
	include "jsscripts.php";
	//back to top button
	include "btn_backtotop.php";
?>

</body>
</html>
