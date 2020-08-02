<!-- jQuery -->
<script src="js/jquery-2.1.1.js"></script>
<!--  plugins -->
<script src="js/bootstrap.min.js"></script>
<script src="js/menu.js"></script>
<script src="js/animated-headline.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/date-time.js"></script>
<script src="js/show-pwd.js"></script>
<script src="js/preview-img.js"></script>
<?php 
	$url = basename($_SERVER['PHP_SELF']);
	if ($url == "contact.php")
		echo "<script src=\"js/google-map.js\"></script>";
		echo "<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyAh9kCBt6Db8-g_Pyk3zLIUUmM1V0aTuHk&callback=myMap\"></script>";
?>	
<!-- moderizr -->
<script src="js/modernizr.js"></script>
<!--  custom script -->
<script src="js/custom.js"></script>