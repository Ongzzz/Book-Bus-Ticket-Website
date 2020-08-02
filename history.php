<!DOCTYPE html>
<html>
<?php
	session_start();
	$id = $_SESSION['id'];

include "header.php";
print "                <h1><strong>Purchase History</strong></h1>\n";
print "                <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Destination and date</strong></div>\n";
print "              </div>\n";
print "\n";
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";
print "<br /><br /><br />";
print " <div style='margin: 0 auto; padding: 0;width: 1440px'>";
		if($ticketDB=mysqli_connect("localhost","root","")){
			
			if(mysqli_select_db($ticketDB,'Book_Ticket_Website')){
				$query=mysqli_query($ticketDB,"select * from purchase_history");
				if(mysqli_query($ticketDB,$query){
					if(mysqli_num_rows($query)>0){
						print "<table class='fade' border='1' cellpadding='10' width='100%' style='text-align: center;
								border-collapse: collapse; margin: 25px 0; border-radius: 5px 5px 0 0; overflow: hidden;
								box-shadow: 0 0 20px rgba(0, 0, 0, 0.15)'>";
						print " <tr style='background-color: #79baec; color:#ffffff; font-weight:bold'>
								<th>Ticket ID</th>
								<th>Type of Bus</th>
								<th>Ticket Price</th>
								<th>Pick up point</th>
								<th>Destination</th>
								<th>Pick up Date</th>
								<th>Date Purchase</th>";
								
						while ($row = mysqli_fetch_array($query)) {
							if($id == $row['user_id']){
								$ticket=$row['ticket_id'];
								print "<tr style='font-weight: bold; font-size: 18px'>";
								print "<td>$ticket</td>";
								print "<td>$row[bus_type]</td>";
								print "<td>$row[ticket_price]</td>";
								print "<td>$row[pick_up_point]</td>";
								print "<td>$row[destination]</td>";
								print "<td>$row[pick_up_date]</td>";
								print "<td>$row[date_purchased]</td>";
								print "</tr>";
							}
						}
						print "</table>";
					}
				}
				else{
					include "createTable.php";
					if(mysqli_num_rows($query)>0){
						print "<table class='fade' border='1' cellpadding='10' width='100%' style='text-align: center;
								border-collapse: collapse; margin: 25px 0; border-radius: 5px 5px 0 0; overflow: hidden;
								box-shadow: 0 0 20px rgba(0, 0, 0, 0.15)'>";
						print " <tr style='background-color: #79baec; color:#ffffff; font-weight:bold'>
								<th>Ticket ID</th>
								<th>Type of Bus</th>
								<th>Ticket Price</th>
								<th>Pick up point</th>
								<th>Destination</th>
								<th>Pick up Date</th>
								<th>Date Purchased</th>";
								
								
						while ($row = mysqli_fetch_array($query)) {
							if($id == $row['user_id']){
								print "<tr style='font-weight: bold; font-size: 18px'>";
								print "<td>$row[ticket_id]</td>";
								print "<td>$row[bus_type]</td>";
								print "<td>$row[ticket_price]</td>";
								print "<td>$row[pick_up_point]</td>";
								print "<td>$row[destination]</td>";
								print "<td>$row[pick_up_date]</td>";
								print "<td>$row[date_purchased]</td>";
							}
						}
					}
				}
			}
			else{
				print "No result found";
			}	
		}
		else{
			print "<p style='font-size: 20px'>Unable to connect to database.</p>";
		}
print "";		//$_SESSION['id'];
print " </div>";
print "<br /><br /><br />";
include "footer1.php";
print "  </body>\n";
print "\n";
print "</html>\n";
?>