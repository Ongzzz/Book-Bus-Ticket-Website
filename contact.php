<?php

	$bool = "true";

	if(isset($_POST['submitted'])){
		if(!empty($_POST['fName'])){	
			if(!ctype_alpha($_POST['fName'])){
				$error_fname = "The first name should be alphabets only!";
				$bool="false";
			} else {
				$fName = $_POST['fName'];
			}
		} else {
			$error_fname = "First name field is empty.";
			$bool="false";
		}
		
		if(!empty($_POST['lName'])){	
			if(!ctype_alpha($_POST['lName'])){
				$error_lname = "The last name should be alphabets only!";
				$bool="false";
			} else {
				$lName = $_POST['lName'];
			}
		} else {
			$error_lname = "Last name field is empty.";
			$bool="false";
		}
		
		if(!empty($_POST['email'])){
			if (!filter_var(($_POST['email']), FILTER_VALIDATE_EMAIL)){
				$error_email = "Invalid email entered!";
				$bool = "false";
			} else {
				$email = $_POST['email'];
			}
		} else {
			$error_email = "Email field is empty.";
			$bool="false";
		}
		
		if(!empty($_POST['message'])){
			$message = $_POST['message'];
		} else {
			$error_message = "Please leave us a message here.";
			$bool="false";
		}
		
		if ($bool=="true"){		
			header('Location:Success.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">


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
echo "               <h1><strong>Contact</strong></h1>\n";
echo "               <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Contact</strong></div>\n";
echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section\" id=\"contact-section\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row justify-content-center text-center\">\n";
echo "       <div class=\"col-7 text-center mb-5\">\n";
echo "         <h2>Contact Us</h2>\n";
echo "         <p>Having problems booking the tickets or difficulties using this website? Fear not! Just send us an email and we will get to you in 2 working days!</p>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "       <div class=\"row\">\n";
echo "         <div class=\"col-lg-8 mb-5\" >\n";
echo "           <form action=\"#\" method=\"post\">\n";
echo "             <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-6 mb-4 mb-lg-0\">\n";
?>
					   <?php 
							if (empty($fName)){
								echo "<input type=\"text\" name=\"fName\" class=\"form-control\" placeholder=\"First name\">\n";
								if (!empty($error_fname)){
									echo "<p style=\"color:red;\">$error_fname</p>";
								}		
							}
							else{
								echo "<input type=\"text\" class=\"form-control\" placeholder=\"$fName\">\n";
							}	
						?>
<?php
echo "               </div>\n";
echo "               <div class=\"col-md-6\">\n";
?>
						<?php 
							if (empty($lName)){
								echo "<input type=\"text\" name=\"lName\" class=\"form-control\" placeholder=\"Last name\">\n";
								if (!empty($error_lname)){
									echo "<p style=\"color:red;\">$error_lname</p>";
								}		
							}
							else{
								echo "<input type=\"text\" class=\"form-control\" placeholder=\"$lName\">\n";
							}	
						?>
<?php
echo "               </div>\n";
echo "             </div>\n";
echo "				<form action=\"#\" method=\"post\" autocomplete=\"off\">";
echo "              <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-12\">\n";
?>
						<?php 
							if (empty($email)){
								echo "<input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Email address\">\n";
								if (!empty($error_email)){
									echo "<p style=\"color:red;\">$error_email</p>";
								}		
							}
							else{
								echo "<input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"$email\">\n";
							}	
						?>
<?php 
echo "               </div>\n";
echo "             </div>\n";
echo "              <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-12\">\n";
?>
						<?php 
							if (empty($message)){
								echo "<textarea name=\"message\" id=\"\" class=\"form-control\" placeholder=\"Write your message.\" cols=\"30\" rows=\"22\"></textarea>\n";
								if (!empty($error_message)){
									echo "<p style=\"color:red;\">$error_message</p>";
								}		
							}
							else{
								echo "<textarea name=\"message\" id=\"\" class=\"form-control\" placeholder=\"$message\" cols=\"30\" rows=\"22\"></textarea>\n";
							}	
						?>
<?php 
echo "               </div>\n";
echo "             </div>\n";
echo "             <div class=\"form-group row\">\n";
echo "               <div class=\"col-md-6 mr-auto\">\n";
echo "                 <input type=\"submit\" class=\"btn btn-block btn-primary text-white py-3 px-5\" value=\"Send Message\">\n";
echo "               </div>\n";
echo "             </div>\n";
echo "				<input type = \"hidden\" name = \"submitted\" value = \"true\">";
echo "           </form>\n";
echo "         </div>\n";
echo "         <div class=\"col-lg-4 ml-auto\">\n";
echo "           <div class=\"bg-white p-3 p-md-5\">\n";
echo "             <h3 class=\"text-black mb-4\">Contact Info</h3>\n";
echo "             <ul class=\"list-unstyled footer-link\">\n";
echo "               <li class=\"d-block mb-3\">\n";
echo "                 <span class=\"d-block text-black\">Address:</span>\n";
echo "                 <span>5, Lorong Bintang, 14000 Bukit Mertajam, Penang</span></li>\n";
echo '					   <div id="map" style="width:100%;height:250px;"></div></br>';
echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Phone:</span><span>04-1234567</span></li>\n";
echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Email:</span><span><a href='mailto:BusTicketBookingMalaysia@gmail.com'>BusTicketBookingMalaysia@gmail.com</a></span></li>\n";
echo "             </ul>\n";
echo "           </div>\n";
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
