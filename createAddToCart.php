
<?php

	if ($ticketDB=mysqli_connect("localhost","root",""))
	
	{
	//handle error if the database couldn't be selected;
		if (!mysqli_select_db($ticketDB,"Book_Ticket_Website"))
		{
			print"<p style='color:red;'><center>Could not select the database because:<br/>"
			.mysqli_error($ticketDB).".</center></p>";
			mysqli_close($ticketDB);
			$ticketDB=FALSE;
		}
			
	}
	else //connection failure
	{
		print"<p style='color:red;'><center>Could not select the database because:<br/>"
		.mysqli_error($ticketDB).".</center></p>";
	}
	
	if ($ticketDB) {
            $query = 'CREATE TABLE Add_To_Cart (
			user_id TEXT NOT NULL,
			ticket_id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            bus_type TEXT NOT NULL,
			ticket_price TEXT NOT NULL,
            pick_up_point VARCHAR(200) NOT NULL,
            destination VARCHAR(200) NOT NULL,
			pick_up_date TEXT NOT NULL,
            date_purchased DATETIME NOT NULL
            )';

            if (mysqli_query($ticketDB,$query)) {
                
            }
            else {
                echo '<p style="color: red;"><center>Could not create table because:<br />' . mysqli_error($ticketDB) . '.</p><p>The query being run was: '. $query . '</center></p>';
            }
        }
