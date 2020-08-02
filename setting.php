<?php
	include("cookie.php");

	if(isset($_POST['apply'])){
		if(isset($_POST['country']))
			$country = $_POST['country'];
		if(isset($_POST['language']))
			$language = $_POST['language'];
		if(isset($_POST['currency']))
			$currency = $_POST['currency'];
		if(isset($_POST['color']))
			$color = $_POST['color'];

		setcookie("country", "$country");
		setcookie("language", "$language");
		setcookie("currency", "$currency");
		setcookie("color", "$color");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Settings</title>
	<link rel="stylesheet" href="css/settingsStyle.css">
</head>
<style>
.label{
	font-size: 20px;
}
.alert-success{
	position: absolute;
	top: -70px;
}
</style>
	<?php
echo "<body style='background-color:$color;'>";?>



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
		

	include("header.php");
				echo "<h1><strong>Settings</strong></h1>\n";
					echo "<div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Settings</strong></div>\n";
					echo "</div>\n";
					echo "\n";
				echo "</div>\n";
			echo "</div>\n";
		echo "</div>\n";
	echo "</div>\n";



	echo "<div class='site-section' id='settings'>";
		if(isset($_POST['apply'])){
			echo "<div class='alert alert-success'>";
	   			echo "<center><strong>Success!</strong> The new settings have been applied! Refresh the current web page or head to other web pages to see the new settings in action! =D</center>";
	  		echo "</div>";
	  	}

		echo "<div class='container ' bg-light>";
			echo "<div class='justify-content-center text-center'>";
				echo "<h2>Select the settings based your preference</h2>\n";
				echo "<p>The changes made to the settings will be applied to the current settings of the website! (If you prefer the current setting, just select the other settings you would like to change!)</p>";
			echo "</div>";
				
			echo "<div style='margin-left: 320px;'>";
				echo "<form method='post'>";
					echo "<label class='label mt-4'><strong>Country</strong></label>";
					echo "<select class='select-css' name='country' style='max-width:50%;'>";
					    echo "<option disabled selected hidden>Select Country-</option>";
					    echo "<option value='Malaysia'>Malaysia</option>";
					    echo "<option value='South Korea'>South Korea</option>";
					    echo "<option value='Japan'>Japan</option>";
					    echo "<option value='Great Britain'>Great Britain</option>";
					    echo "<option value='Italy'>Italy</option>";
					    echo "<option value='Australia'>Australia</option>";
					    echo "<option value='China'>China</option>";
					    echo "<option value='The United States'>The United States</option>";
					    echo "<option value='Brazil'>Brazil</option>";
					    echo "<option value='Singapore'>Singapore</option>";
					echo "</select>";

					echo "<label class='label mt-4'><strong>Language</strong></label>";
					echo "<select class='select-css' name='language' style='max-width:50%;'>";
					    echo "<option disabled selected hidden>Select Language-</option>";
					    echo "<option value='Malay'>Malay</option>";
					    echo "<option value='Korean'>Korean</option>";
					    echo "<option value='Japanese'>Japanese</option>";
					    echo "<option value='English'>English</option>";
					    echo "<option value='Italian'>Italian</option>";
					    echo "<option value='Chinese'>Chinese</option>";
					    echo "<option value='Portuguese'>Portuguese</option>";
					echo "</select>";

					echo "<label class='label mt-4'><strong>Currency</strong></label>";
					echo "<select class='select-css' name='currency' style='max-width:50%;'>";
					    echo "<option disabled selected hidden>Select Currency-</option>";
					    echo "<option value='RM'>RM</option>";
					    echo "<option value='₩'>₩</option>";
					    echo "<option value='¥'>¥</option>";
					    echo "<option value='£'>£</option>";
					    echo "<option value='€'>€ </option>";
					    echo "<option value='AU$'>AU$</option>";
					    echo "<option value='$'>$</option>";
					    echo "<option value='R$'>R$</option>";
					    echo "<option value='S$'>S$</option>";
					echo "</select>";

					echo "<label class='label mt-4'><strong>Background Color</strong></label>";
					echo "<select class='select-css' name='color' style='max-width:50%;'>";
						echo "<option disabled selected hidden>Select Background Color-</option>";
					    echo "<option value='#FF6F6F'>maroon</option>";
						echo "<option value='#FDDF5B'>Yellow</option>";
						echo "<option value='#90F9A2'>Green</option>";
						echo "<option value='#D276FF'>Purple</option>";
						echo "<option value='#E3F5F5'>Light Cyan</option>";
						echo "<option value='#9898E6'>Navy</option>";
						echo "<option value='#FF96C9'>Pink</option>";
						echo "<option value='#FFBF81'>Orange</option>";
						echo "<option value='#BD7645'>Brown</option>";
					echo "</select>";
					
					echo "<input type='submit' class='btn btn-default btn-primary text-white py-2 mt-4' name='apply' value='Apply changes!'>";
				echo "</form>";
			echo "</div>";	
		echo "</div>";
	echo "</div>";
	include("footer2.php");
	?>
</body>
</html>
<?php
	
	
	//javascript scripts
	include "jsscripts.php";
	//back to top button
	include "btn_backtotop.php";
?>