<!DOCTYPE html>
<body>


<?php
	//head
	include "head.php";
?>

    
<?php
		echo"<body onload=\"updateClock(); setInterval('updateClock()', 1000 )\">";
		//preloader
		include "preloader.php";
		//header
		include "headerWC.php";
		//nav
		include "nav.php";?>
		
<?php
include 'header2.php';
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";
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
            $query = 'CREATE TABLE Users (
			User_Id VARCHAR(200) NOT NULL PRIMARY KEY,
            User_Name TEXT NOT NULL,
			User_Age INT UNSIGNED NOT NULL,
            User_Email VARCHAR(200) NOT NULL,
            User_Password VARCHAR(200) NOT NULL,
			User_Phone_Number TEXT NOT NULL,
            User_Address TEXT NOT NULL
            )';

            if (mysqli_query($ticketDB,$query)) {
                echo '<p><center>The table has been created.</center></p>';
            }
            else {
                echo '<p style="color: red;"><center>Could not create table because:<br />' . mysqli_error($ticketDB) . '.</p><p>The query being run was: '. $query . '</center></p>';
            }
        }
		include 'footer1.php';?>
	
</body>
</html>
<?php
	include "jsscripts.php";
	//back to top button
	include "btn_backtotop.php";
?>