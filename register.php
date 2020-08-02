<?php
	$checkId="false";
	$checkName="false";
	$checkAge="false";
	$checkPhone="false";
	$checkAddress="false";
	$checkEmail="false";
	$checkPassword="false";
	$msg = "";

	if(isset($_POST['submitted'])){	
		if (empty($_POST['id']) || trim($_POST['id'])==null){
			$error_id ="Please enter your ID!";	
		}	
		else{
			$id = $_POST['id'];
			$ticketDB = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($ticketDB,'Book_Ticket_Website');
			mysqli_query($ticketDB,'CREATE DATABASE Book_Ticket_Website');

			$sql_id = "SELECT * FROM USERS WHERE User_Id='$id'";
			$res_u = mysqli_query($ticketDB, $sql_id);
			if(mysqli_num_rows($res_u) > 0){
				$error_id = "ID taken, choose another ID!";
			}
			else
				$checkId="true";
		}
		
		if (empty($_POST['name']) || trim($_POST['name'])==null){
			$error_name ="Please enter your name!";	
		}	
		else if (!preg_match('/^[a-zA-Z-,]+(\s{0,1}[a-zA-Z-, ])*$/', $_POST['name'])){
			$error_name = "<p style='color:red'>Invalid last name entered!</p>";
		}
		else{
			$name=$_POST['name'];
			$checkName="true";
		}

		if (empty($_POST['age']) ||(trim($_POST['age'])==null)){	
			$error_age="Please enter your age!";	
		}
		
		else if (($_POST['age']<1 || $_POST['age']==0) && is_numeric($_POST['age'])){
			$error_age="Your age should more than 0!";
		}
		
		else if (!is_numeric($_POST['age'])){
			$error_age="Please enter age in numeric!";	
		}	
		else{
			$age=$_POST['age'];
			$checkAge="true";
		}
		
		if (empty($_POST['phone']) || (trim($_POST['phone'])==null)) {
			$error_phone="Please enter your phone number!";
		}
		else if (!is_numeric($_POST['phone'])){
			$error_phone="Please enter phone number in numeric!";
		}
		
		else if (strlen($_POST['phone'])!=10 && strlen($_POST['phone'])!=11){
			$error_phone="Your phone number should be consist of 10 or 11 digits!";	
		}
		else{
			$phone=$_POST['phone'];
			$checkPhone="true";
		}
		
		
		if (empty($_POST['address']) || (trim($_POST['address'])==null)){
			$error_address="Please enter your address!";
		}
		
		else if (strlen($_POST['address'])<10 || ctype_alpha($_POST['address'])|| is_numeric($_POST['address'])|| ctype_space($_POST['address'])){
			$error_address="Your address should has more than 9 alphanumerics which include alphabet and digit!";
		}
		else{
			$address=$_POST['address'];
			$checkAddress="true";
		}
		
		if (empty($_POST['email']) || (trim($_POST['email'])==null)){
			$error_email="Please enter your email!";	
		}
		else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
			$error_email = "Invalid email entered!";
		}
		else{
			$email=$_POST['email'];
			$checkEmail="true";
		}
		
		if (empty($_POST['password']) || (trim($_POST['password'])==null)) {
			$error_password="Please enter your password!";
		}
		
		else if (ctype_alpha($_POST['password']) || is_numeric($_POST['password'])|| strlen($_POST['password'])<10 || ctype_space($_POST['password'])){
			$error_password="Please enter a secure password which has more than 9 alphanumerics which include alphabet and digit!";
		}
		else{
			$password=$_POST['password'];
			$checkPassword="true";
		}
		

		if ($checkAddress=="true" && $checkAge=="true" && $checkEmail=="true" && $checkId=="true" && $checkName=="true" && $checkPassword=="true" && $checkPhone=="true")
		{
			$ticketDB = mysqli_connect('localhost', 'root', '');
			mysqli_select_db($ticketDB,'Book_Ticket_Website');
			mysqli_query($ticketDB,'CREATE DATABASE Book_Ticket_Website');

			if ($ticketDB) {
	            $query = 'CREATE TABLE Users (
				User_Id VARCHAR(200) NOT NULL PRIMARY KEY,
	            User_Name TEXT NOT NULL,
				User_Age INT UNSIGNED NOT NULL,
	            User_Email VARCHAR(200) NOT NULL,
	            User_Password VARCHAR(200) NOT NULL,
				User_Phone_Number TEXT NOT NULL,
	            User_Address TEXT NOT NULL
	            )';
	        }
	        if (mysqli_query($ticketDB, $query)) {
	            echo '<p><center>The table has been added!</center></p>';
	        }
	        else {
	            echo '<p style="color: red">Could not create table because: <br />' . mysqli_error($ticketDB);
	        }
			 
	        //Define the query:
	        $sql = "INSERT INTO users(User_Id,User_Name,User_Age,User_Email,User_Password,User_Phone_Number,User_Address) VALUES ('$id','$name','$age', '$email','$password','$phone','$address')";
	        //Execute the query:
	        if (mysqli_query($ticketDB, $sql)) {
	            echo '<p><center>The record has been added!</center></p>';
	          	header('Location:Success.php');
	        }
	        else {
	            echo '<p style="color: red">Could not add the record because: <br />' . mysqli_error($ticketDB);
	        }
	        
			mysqli_close($ticketDB);
	    }//No problem
	}
//head
include "head.php";

echo"<body onload=\"updateClock(); setInterval('updateClock()', 1000 )\">";
//preloader
include "preloader.php";
//header
include "headerWC.php";
//nav
include "nav.php";
	

include 'header.php';
print "                <h1><strong>Register</strong></h1>\n";
print "                <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Register</strong></div>\n";
print "              </div>\n";
print "\n";
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";


		
	
?>






<?php


		echo "    <div class=\"site-section\" id=\"contact-section\">\n";
		echo "     <div class=\"container\">\n";
		echo "       <div class=\"row justify-content-center text-center\">\n";
		echo "       <div class=\"col-7 text-center mb-5\">\n"	;
		echo "         <h2>Register</h2>\n";
		echo "         <p>Please fill in all the fields below.</p>\n";
		echo "       </div>\n";
		echo "     </div>\n";
		echo "       <div class=\"row\">\n";
		echo "         <div class=\"col-lg-8 mb-5\" >\n";
					
						echo "<form action=\"#\" method=\"post\">\n";
					
					
		echo "             <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-6 mb-4 mb-lg-0\">\n";
		

			if (empty($id))
			{
				echo "<input type=\"text\" name=\"id\" class=\"form-control\" placeholder=\"User ID\">\n";
				if (!empty($error_id))
				{
					echo "<p style=\"color:red;\">$error_id</p>";
				}	
			}
			else if($checkId == "false"){
				echo "<input type=\"text\" name=\"id\" class=\"form-control\" placeholder=\"User ID\">\n";
				echo "<p style=\"color:red;\">$error_id</p>";
			}
			else{
				echo "<input type=\"text\" name=\"id\" class=\"form-control\" value=\"$id\" placeholder=\"$id\">\n";
			
			}

		echo "               </div>\n";
		
		
		echo "               <div class=\"col-md-6 mb-4 mb-lg-0\">\n";

						
							if (empty($name))
							{
								echo "<input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\">\n";
								if (!empty($error_name))
								{
									echo "<p style=\"color:red;\">$error_name</p>";
								}	
							}
							else
							{
								echo "<input type=\"text\" name=\"name\" class=\"form-control\" value=\"$name\" placeholder=\"$name\">\n";
							
							}

		echo "               </div>\n";
		echo "               </div>\n";
		echo "             <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-6\">\n";
							if (empty($age))
							{
								echo "<input type=\"text\" name=\"age\" class=\"form-control\" placeholder=\"Age\">\n";
								if (!empty($error_age))
								{
									echo "<p style=\"color:red;\">$error_age</p>";
								}	
							}
							else
							{
								echo "<input type=\"text\" name=\"age\" class=\"form-control\" value=\"$age\" placeholder=\"$age\">\n";
							}

		echo "               </div>\n";
		echo "               </div>\n";
		echo "              <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-12\">\n";
							if (empty($email)) 
							{
								echo "<input type=\"text\" name=\"email\" class=\"form-control\" placeholder=\"Email\">\n";
								if (!empty($error_email))
								{
									echo "<p style=\"color:red;\">$error_email</p>";
								}	
							}
							else
							{
								echo "<input type=\"text\" name=\"email\" class=\"form-control\" value=\"$email\" placeholder=\"$email\">\n";
							}
		
		echo "               </div>\n";
		echo "             </div>\n";
		echo "              <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-12\">\n";
							if (empty($password))
							{
								echo "<input type=\"password\" name=\"password\" class=\"form-control\" placeholder=\"Password\">\n";
								if (!empty($error_password))
								{
									echo "<p style=\"color:red;\">$error_password</p>";
								}	
							}
							else
							{
								echo "<input type=\"password\" name=\"password\" class=\"form-control\" value=\"$password\" placeholder=\"$password\">\n";
							}
	
		echo "               </div>\n";
		echo "             </div>\n";
		echo "              <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-12\">\n";
							if (empty($phone))
							{
								echo "<input type=\"text\" name=\"phone\" class=\"form-control\" placeholder=\"Phone Number\">\n";
								if (!empty($error_phone))
								{
									echo "<p style=\"color:red;\">$error_phone</p>";
								}	
							}
							else
							{
								echo "<input type=\"text\" name=\"phone\" class=\"form-control\" value=\"$phone\" placeholder=\"$phone\">\n";
							}
		
		echo "               </div>\n";
		echo "             </div>\n";
		echo "              <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-12\">\n";
							if (empty($address))
							{
								echo "<textarea name=\"address\" id=\"\" class=\"form-control\" placeholder=\"Address\" cols=\"30\" rows=\"5\"></textarea>\n";
								if (!empty($error_address))
								{
									echo "<p style=\"color:red;\">$error_address</p>";
								}	
							}
							else
							{
								echo "<textarea name=\"address\" id=\"\" class=\"form-control\" value=\"$address\" placeholder=\"$address\"  cols=\"30\" rows=\"5\"></textarea>\n";
							}
		
		echo "               </div>\n";
		echo "             </div>\n";
		echo "             <div class=\"form-group row\">\n";
		echo "               <div class=\"col-md-6 mr-auto\">\n";
		echo "                 <input type=\"submit\" class=\"btn btn-block btn-primary text-white py-3 px-5\" value=\"Register\">\n";
		echo "					<input name='submitted' type='hidden' value='true'>";
		echo "               </div>\n";
		echo "             </div>\n";
		echo "           </form>\n";
		
		echo "         </div>\n";
		echo "         <div class=\"col-lg-4 ml-auto\">\n";
		echo "           <div class=\"bg-white p-3 p-md-5\">\n";
		echo "             <h3 class=\"text-black mb-4\">Can't register or have any problem? You are welcomed to contact us!</h3>\n";
		echo "             <ul class=\"list-unstyled footer-link\">\n";
		echo "               <li class=\"d-block mb-3\">\n";
		echo "					<span class=\"d-block text-black\">Email:</span>\n";
		echo "					<span><a href='mailto:BusTicketBookingMalaysia@gmail.com'>BusTicketBookingMalaysia@gmail.com</a></span></li>\n";
		echo "               <li class=\"d-block mb-3\">\n";
		echo "                 <span class=\"d-block text-black\">Address:</span>\n";
		echo "                 <span>5, Lorong Bintang, 14000 Bukit Mertajam, Penang</span></li>\n";
		echo "               <li class=\"d-block mb-3\"><span class=\"d-block text-black\">Phone:</span><span>04-1234567</span></li>\n";
		echo "             </ul>\n";
		echo "           </div>\n";
		echo "         </div>\n";
		echo " </div>";
		echo " </div>";
		echo " </div>";
		

	

include 'footer1.php';

include "jsscripts.php";
//back to top button
include "btn_backtotop.php";
?>
</body>
</html>

