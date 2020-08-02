<!DOCTYPE html>
<html>
<?php
include "header.php";
		$ticket = false;
		date_default_timezone_set("Asia/Singapore");
		$time = date("l jS \,  F Y h:i:s A");
		session_start();
		if(isset($_SESSION['id'])){
			$id = $_SESSION['id'];
		}
		if(isset($_POST['purchase1'])){
			$bustype = "rapid bus";
			$price = "RM45.00";
			$pickup = "Sungai Nibong Terminal Sentral";
			$destination = "Terminal Bersepadu Selatan";
			$date = "06/08/20, 08.30 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase2'])){
			$bustype = "rapid bus";
			$price = "RM25.00";
			$pickup = "Penang Sentral";
			$destination = "Ipoh Amanjaya";
			$date = "06/08/20, 08.30 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase3'])){
			$bustype = "Aeroline Malaysia Express Bus";
			$price = "RM92.00";
			$pickup = "Kuala Perlis Bus Terminal";
			$destination = "Larkin Bus Terminal";
			$date = "06/08/20, 04.45 p.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase4'])){
			$bustype = "Aeroline Malaysia Express Bus";
			$price = "RM37.00";
			$pickup = "Melaka Sentral";
			$destination = "Hentian Bus Mpkt";
			$date = "06/08/20, 05.05 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase5'])){
			$bustype = "Aeroline Malaysia Express Bus";
			$price = "RM40.00";
			$pickup = "KL Sentral";
			$destination = "Nilam Puri";
			$date = "07/08/20, 09.45 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase6'])){
			$bustype = "NICE Malaysia Express Bus";
			$price = "RM42.00";
			$pickup = "Bukit Bunga";
			$destination = "Seremban";
			$date = "07/08/20, 07.15 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase7'])){
			$bustype = "NICE Malaysia Express Bus";
			$price = "RM45.00";
			$pickup = "KL Sentral";
			$destination = "Penang Komtar";
			$date = "08/08/20, 07.45 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase8'])){
			$bustype = "NICE Malaysia Express Bus";
			$price = "RM25.00";
			$pickup = "Penang Sentral";
			$destination = "Ipoh Amanjaya";
			$date = "08/08/20, 07.00 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase9'])){
			$bustype = "NICE Malaysia Express Bus";
			$price = "RM45.00";
			$pickup = "Penang Sentral";
			$destination = "KL Sentral";
			$date = "08/08/20, 11.55 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase10'])){
			$bustype = "Transtar Travel Malaysia Express Bus";
			$price = "RM34.00";
			$pickup = "Ipoh Amanjaya";
			$destination = "Melaka Sentral";
			$date = "08/08/20, 02.30 p.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase11'])){
			$bustype = "Transtar Travel Malaysia Express Bus";
			$price = "RM80.00";
			$pickup = "Larkin Bus Terminal";
			$destination = "Penang Sentral";
			$date = "08/08/20, 09.45 p.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase12'])){
			$bustype = "Transtar Travel Malaysia Express Bus";
			$price = "RM65.00";
			$pickup = "Ipoh Amanjaya";
			$destination = "Larkin Bus Terminal";
			$date = "09/08/20, 09.25 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase13'])){
			$bustype = "Transtar Travel Malaysia Express Bus";
			$price = "RM54.00";
			$pickup = "Melaka Sentral";
			$destination = "Kuala Kedah Bus Terminal";
			$date = "09/08/20, 11.30 a.m.";
			$ticket = true;
		}
		if(isset($_POST['purchase14'])){
			$bustype = "Transtar Travel Malaysia Express Bus";
			$price = "RM40.00";
			$pickup = "Larkin Bus Terminal";
			$destination = "KL Sentral";
			$date = "09/08/20, 16.15 a.m.";
			$ticket = true;
		}
		
		
		
print "                <h1><strong>Destination & date</strong></h1>\n";
print "                <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Destination and date</strong></div>\n";
print "              </div>\n";
print "\n";
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";
print "<br /><br /><br />";
print " <div class='fade' style='margin: 0 auto; padding: 0;width: 1100px; height: 720px'>";
		if($ticket == true){
			if(isset($id)){
				if($ticketDB=mysqli_connect("localhost","root","")){
					if(mysqli_select_db($ticketDB,'Book_Ticket_Website')){
						$query = "INSERT INTO Add_To_Cart(user_id, bus_type, ticket_price, pick_up_point, destination, pick_up_date, date_purchased) 
						VALUES('$id', '$bustype', '$price', '$pickup', '$destination', '$date', NOW())";
						if(mysqli_query($ticketDB,$query)){
							print "<h1 style='font-size: 40px; font-weight: bold'>Added to cart!</h1>";
							print "<p style='font-size: 30px'>
								<b>Bus type:</b>\t$bustype <br />
								<b>Ticket price:</b>\t$price <br />
								<b>Pick up point:</b>\t$pickup <br />
								<b>Destination:</b>\t$destination <br />
								<b>Date:\t</b> $date<br />
								<b>Puchased time:</b>\t$time";
							print "<br /><br /><br /><p style='font-size: 20px'>Return to <a href='index.php'><u>homepage</u></a> or <a href='Purchase.php'><u>purchase</u></a>.</p>";
							print "<p style='font-size: 20px'>To view your purchase history, please click <a href='history.php'><u>here</u></a>.</p>";
						}
						else{
							include "createAddToCart.php";
							$query = "INSERT INTO Add_To_Cart(user_id, bus_type, ticket_price, pick_up_point, destination, pick_up_date, date_purchased) 
							VALUES('$id', '$bustype', '$price', '$pickup', '$destination', '$date', NOW())";
							print "<h1 style='font-size: 40px; font-weight: bold'>Added to cart!</h1>";
							print "<p style='font-size: 30px'>
								<b>Bus type:</b>\t$bustype <br />
								<b>Ticket price:</b>\t$price <br />
								<b>Pick up point:</b>\t$pickup <br />
								<b>Destination:</b>\t$destination <br />
								<b>Date:\t</b> $date<br />
								<b>Puchased time:</b>\t$time";
							print "<br /><br /><br /><p style='font-size: 20px'>Return to <a href='index.php'><u>homepage</u></a> or <a href='Purchase.php'><u>purchase</u></a>.</p>";
							print "<p style='font-size: 20px'>To view your purchase history, please click <a href='history.php'><u>here</u></a>.</p>";
						}
					}
					
				}
				else{	//if($ticketDB=mysqli_connect("localhost","root",""))
					include "createDatabase1.php";
					include "createAddToCart.php";
					if($ticketDB=mysqli_connect("localhost","root","")){
					mysqli_select_db($ticketDB,'Book_Ticket_Website');
					$query = "INSERT INTO Add_To_Cart(user_id, bus_type, ticket_price, pick_up_point, destination, pick_up_date, date_purchased) 
						VALUES('$id', '$bustype', '$price', '$pickup', '$destination', '$date', NOW())";
						if(mysqli_query($ticketDB,$query)){
							print "<h1 style='font-size: 40px; font-weight: bold'>Added to cart!</h1>";
							print "<p style='font-size: 30px'>
								<b>Bus type:</b>\t$bustype <br />
								<b>Ticket price:</b>\t$price <br />
								<b>Pick up point:</b>\t$pickup <br />
								<b>Destination:</b>\t$destination <br />
								<b>Date:\t</b> $date<br />
								<b>Puchased time:</b>\t$time";
							print "<br /><br /><br /><p style='font-size: 20px'>Return to <a href='index.php'><u>homepage</u></a> or <a href='Purchase.php'><u>purchase</u></a>.</p>";
							print "<p style='font-size: 20px'>To view your purchase history, please click <a href='history.php'><u>here</u></a>.</p>";
						}
						else{
							print "<p style='font-size: 20px'>Data unable to save into database.</p>";
						}
					}
				}
				mysqli_close($ticketDB);
			}
			else{
				print "<h1>You have not sign in yet!</h1>";
				print "<p style='font-size: 20px'>Click here to <a href='signIn.php'>sign in</a></p>";
			}
		}
		else{
			print "<h1 style='font-size: 40px; font-weight: bold'>Purchase failed</h1>";
			print "<p style='font-size: 20px'>Return to <a href='index.php'><u>homepage</u></a> or <a href='Purchase.php'><u>purchase</u></a>.</p>";
			print "<p style='font-size: 20px'>To view your purchase history, please click <a href='history.php'><u>here</u></a>.</p>";
		}
print " </div>";
print "<br /><br /><br />";
include "footer1.php";
print "  </body>\n";
print "\n";
print "</html>\n";
?>