<!DOCTYPE html>
<html>
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
session_start();
include "header.php";
print "                <h1><strong>Purchase</strong></h1>\n";
print "                <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Destination and date</strong></div>\n";
print "              </div>\n";
print "\n";
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";

$success = false;
if(isset($_POST['purchase'])){
	if($ticketDB=mysqli_connect("localhost","root","")){
		include "createTable.php";
		mysqli_select_db($ticketDB, 'Book_Ticket_Website');
		$ticket = $_POST['ticket'];
		$row = mysqli_query($ticketDB,"select * from add_to_cart WHERE ticket_id = $ticket");
		$fetch = mysqli_fetch_array($row);
		$id = $fetch['user_id'];
		$busType = $fetch['bus_type'];
		$ticketPrice = $fetch['ticket_price'];
		$pickUp = $fetch['pick_up_point'];
		$destination = $fetch['destination'];
		$date = $fetch['pick_up_date'];
		$query = "INSERT INTO purchase_history(user_id, ticket_id, bus_type, ticket_price, pick_up_point, destination, pick_up_date, date_purchased) 
				VALUES('$id', '$ticket', '$busType', '$ticketPrice', '$pickUp', '$destination', '$date', NOW())";
		if(mysqli_query($ticketDB,$query)){
			$success = true;
		}
	
		
		$deleteTicket = "DELETE FROM add_to_cart WHERE ticket_id ='$ticket' ";
		mysqli_query($ticketDB, $deleteTicket);
		
	}
}

print "<br /><br /><br />";
print " <div class='fade' style='margin: 0 auto; padding: 0;width: 1100px; height: 720px'>";
	if($success == true){
		print "<h1>Successfully purchased</h1>";
		print "<br /><br /><br /><p style='font-size: 20px'>Return to <a href='index.php'><u>homepage</u></a> or <a href='cart.php'><u>cart</u></a>.</p>";
		print "<p style='font-size: 20px'>To view your purchase history, please click <a href='history.php'><u>here</u></a>.</p>";
	}
	else{
		print "<h1>Purchase failed</h1>";
		print "<br /><br /><br /><p style='font-size: 20px'>Return to <a href='index.php'><u>homepage</u></a> or <a href='cart.php'><u>cart</u></a>.</p>";
		print "<p style='font-size: 20px'>If you want to retry, please click on <a href'cart.php'>purchase</a></p>";
	}
print " </div>";
print "<br /><br /><br />";
include "footer1.php";
print "  </body>\n";
print "\n";
print "</html>\n";
?>
<?php
	include "jsscripts.php";
	//back to top button
	include "btn_backtotop.php";
?>