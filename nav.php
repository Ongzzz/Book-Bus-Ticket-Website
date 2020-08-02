<!-- nav -->
<nav>
	<ul class="box-primary-nav">
		<li class="box-label">MENU</li>

		<li><a href="index.php ">Home</a>
		<?php 
			$url = basename($_SERVER['PHP_SELF']);
			if ($url == "index.php")
				echo "<i class=\"ion-ios-circle-filled color\"></i>"
		?>		
		</li>
		
		<li><a href="listing.php">Listing</a>
		<?php 
			$url = basename($_SERVER['PHP_SELF']);
			if ($url == "Listing.php")
				echo "<i class=\"ion-ios-circle-filled color\"></i>"
		?>	
		</li>
		
		<li><a href='testimonials.php'>Testimonials</a>
		<?php 
			$url = basename($_SERVER['PHP_SELF']);
			if ($url == "testimonials.php")
				echo "<i class=\"ion-ios-circle-filled color\"></i>"
		?>	
		</li>
		
		<li><a href="blog.php">Blog</a>
		<?php 
			$url = basename($_SERVER['PHP_SELF']);
			if ($url == "blog.php")
				echo "<i class=\"ion-ios-circle-filled color\"></i>"
		?>	
		</li>
		
		<li><a href="about.php">About</a>
		<?php 
			$url = basename($_SERVER['PHP_SELF']);
			if ($url == "about.php")
				echo "<i class=\"ion-ios-circle-filled color\"></i>"
		?>	
		</li>
		
		<li><a href="contact.php">Contact</a>
		<?php 
			$url = basename($_SERVER['PHP_SELF']);
			if ($url == "contact.php")
				echo "<i class=\"ion-ios-circle-filled color\"></i>"
		?>			
		</li>
		
		<li class="box-label">Follow me</li>
		<li class="box-social"><a href="https://www.facebook.com/tan.weicong.1/"><i class="ion-social-facebook"></i></a></li>
		<li class="box-social"><a href="https://www.instagram.com/FreshGrocery/?hl=en"><i class="ion-social-instagram-outline"></i></a></li>
		 <li class="box-social"><a href="https://twitter.com/FreshGrocery"><i class="ion-social-twitter"></i></a></li>
	</ul>
</nav>
<!-- end nav -->