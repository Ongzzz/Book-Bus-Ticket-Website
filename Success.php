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


echo "             </div>\n";
echo "            </div>\n";
echo "         </div>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "    \n";
echo "    <div class=\"site-section bg-light\" id=\"contact-section\">\n";
echo "     <div class=\"container\">\n";
echo "       <div class=\"row justify-content-center text-center\">\n";
echo "       <div class=\"col-7 text-center mb-5\">\n";
echo "         <h2>Your action is success</h2>\n";
echo "       </div>\n";
echo "     </div>\n";
echo "			<div class=\"col-md-4\"></div>";
echo "				<center><a href='index.php' class='btn btn-box' style=\"margin-left:px;\" >Back to Home</a></center>";
echo "				<div class=\"h-60\"></div>";
echo "			</div>";
?>

<?php
	
	
	include "footer1.php";
?>
<?php
	include "jsscripts.php";
	//back to top button
	include "btn_backtotop.php";
?>

</body>
</html>
