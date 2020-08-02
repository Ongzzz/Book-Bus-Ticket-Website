<?php
	
include 'header2.php';
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";

        if (isset($_POST['submitted'])){
            $ticketDB = mysqli_connect('localhost', 'root', '');
            mysqli_select_db($ticketDB,'Book_Ticket_Website');
            //Validate the form data:
            $problem = FALSE;
            if (!empty($_POST['name']) && !empty($_POST['description']) && (!empty($_POST['quantity'])||$_POST['quantity']<=0) && (!empty($_POST['price'])||$_POST['price']<=0) && (!empty($_POST['shipping'])||$_POST['shipping']<0) ) {
                $bus = trim($_POST['bus']);
                $price = trim($_POST['price']);
				$pick_up_point=trim($_POST['pick_up_point']);
				$destination=trim($_POST['destination']);
				$pick_up_date=trim($_POST['pick_up_date']);
				$img=$_FILES['image']['name'];
				$location='productPic/'.$img;
				$path= pathinfo($img, PATHINFO_EXTENSION);
				$image=$_FILES['image']['tmp_name'];
				move_uploaded_file($image,$location);
				
				if (!is_numeric($price))
				{
					echo"<p><center>Price should be only contain of number!!!!</center></p>";
					$problem=true;
				}

				
            }
            else 
			{
                echo '<p style="color: red;"><center>Please submit both a title and an entry.</center></p>';
				
                $problem = TRUE;
            }

            if (!$problem) {
                //Define the query:
                $query = "INSERT INTO Purchase_History(ticket_id,bus_type,ticket_price,pick_up_point,destination,pick_up_date,date_purchased) VALUES (0,'$bus','$price', '$pickUp','$destination','$pickUpDate',NOW())";
                //Execute the query:
                if (mysqli_query($ticketDB, $query)) {
                    echo '<p><center>The record has been added!</center></p>';
                }
                else {
                    echo '<p style="color: red">Could not add the record because: <br />' . mysqli_error($ticketDB) . '.</p><p>The query was: ' . $query . '</p>';
                }
            }//No problem

            mysqli_close($ticketDB);
        } //End of form submission IF. 
		echo "<a href='index.php'><center>Return to home page.</center></a>";
		
	include 'footer1.php';
   ?>