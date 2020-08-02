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
include "header.php";
print "                <h1><strong>Destination & date</strong></h1>\n";
print "                <div class=\"custom-breadcrumbs\"><a href=\"index.php\">Home</a> <span class=\"mx-2\">/</span> <strong>Destination and date</strong></div>\n";
print "              </div>\n";
print "\n";
print "            </div>\n";
print "          </div>\n";
print "        </div>\n";
print "      </div>\n";
print "<br /><br /><br />";
print " <div style='margin: 0 auto; padding: 0;width: 1440px'>";
print "		<h1 class='fade'><b>Destination and date<b></h1><br />";
print "		<form action='purchase1.php' method='post'>";
print "		<table class='fade' border='1' cellpadding='10' width='100%' style='text-align: center;
				border-collapse: collapse; margin: 25px 0; border-radius: 5px 5px 0 0; overflow: hidden;
				box-shadow: 0 0 20px rgba(0, 0, 0, 0.15)'>";
print "			<tr style='background-color: #79baec; color:#ffffff; font-weight:bold'>";
print "				<th>Type of bus</th>";
print "				<th>Pick Up Point</th>";
print "				<th>Destination</th>";
print "				<th>Date</th>";
print "				<th></th>";
print "			</tr>";

				$bus=$_POST['bus'];
				$pick_up=$_POST['pick_up'];
				$destination=$_POST['destination'];
				$date=$_POST['date'];
				$rapid=false;
				$aeroline=false;
				$transtar=false;
				$nice=false;
				if ($bus=="rapid")
				{
					
					if ($pick_up=="penang")
					{
					$rapid=true;	
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Sungai Nibong Terminal Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>Terminal Bersepadu Selatan</h6></td>";
print "				<td><p>06/08/20</p><h6>08.30 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase1' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>06/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase2' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($destination=="kualaLumpur")
					{
					$rapid=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Sungai Nibong Terminal Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>Terminal Bersepadu Selatan</h6></td>";
print "				<td><p>06/08/20</p><h6>08.30 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase1' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($destination=="ipoh")
					{
					$rapid=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>06/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase2' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					
					else if ($date=="06/08/2020")
					{
					$rapid=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Sungai Nibong Terminal Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>Terminal Bersepadu Selatan</h6></td>";
print "				<td><p>06/08/20</p><h6>08.30 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase1' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>06/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase2' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($destination==null && $pick_up==null && $date==null)
					{		
					$rapid=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Sungai Nibong Terminal Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>Terminal Bersepadu Selatan</h6></td>";
print "				<td><p>06/08/20</p><h6>08.30 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase1' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Rapid Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>06/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase2' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
				}
					
						
						
				
				if ($bus=="aeroline")
				{
					if ($pick_up=="perlis" || $destination=="johor")
					{
					$aeroline=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Perlis</p><h6>Kuala Perlis Bus Terminal</h6></td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>06/08/20</p><h6>4.45 p.m.</h6></td>";
print "				<td><p>RM92.00</p><input name='purchase3' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($pick_up=="melaka" || $destination=="terengganu")
					{
					$aeroline=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>Terengganu</p><h6>Hentian Bus Mpkt</h6></td>";
print "				<td><p>06/08/20</p><h6>05.05 p.m.</h6></td>";
print "				<td><p>RM37.00</p><input name='purchase4' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($pick_up=="kualaLumpur" || $destination=="kelantan")
					{
					$aeroline=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>Kelantan</p><h6>Nilam Puri</h6></td>";
print "				<td><p>07/08/20</p><h6>09.45 a.m.</h6></td>";
print "				<td><p>RM40.00</p><input name='purchase5' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($date=="06/08/2020")
					{
					$aeroline=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Perlis</p><h6>Kuala Perlis Bus Terminal</h6></td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>06/08/20</p><h6>4.45 p.m.</h6></td>";
print "				<td><p>RM92.00</p><input name='purchase3' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>Terengganu</p><h6>Hentian Bus Mpkt</h6></td>";
print "				<td><p>06/08/20</p><h6>05.05 p.m.</h6></td>";
print "				<td><p>RM37.00</p><input name='purchase4' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($date=="07/08/2020")
					{
					$aeroline=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>Kelantan</p><h6>Nilam Puri</h6></td>";
print "				<td><p>07/08/20</p><h6>09.45 a.m.</h6></td>";
print "				<td><p>RM40.00</p><input name='purchase5' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($destination==null && $pick_up==null && $date==null)
					{	
					$aeroline=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Perlis</p><h6>Kuala Perlis Bus Terminal</h6></td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>06/08/20</p><h6>4.45 p.m.</h6></td>";
print "				<td><p>RM92.00</p><input name='purchase3' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>Terengganu</p><h6>Hentian Bus Mpkt</h6></td>";
print "				<td><p>06/08/20</p><h6>05.05 p.m.</h6></td>";
print "				<td><p>RM37.00</p><input name='purchase4' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Aeroline Malaysia Express Bus</td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>Kelantan</p><h6>Nilam Puri</h6></td>";
print "				<td><p>07/08/20</p><h6>09.45 a.m.</h6></td>";
print "				<td><p>RM40.00</p><input name='purchase5' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					
				}
				
				if ($bus=="nice")
				{
					
					if ($pick_up=="kelantan" || $destination=="seremban")
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Kelantan</p><h6>Bukit Bunga</h6></td>";
print "				<td><p>Seremban</p><h6>Seremban</h6></td>";
print "				<td><p>07/08/20</p><h6>07.15 a.m.</h6></td>";
print "				<td><p>RM42.00</p><input name='purchase6' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($pick_up=="kualaLumpur" || $destination=="penang")
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>Penang</p><h6>Penang Komtar</h6></td>";
print "				<td><p>08/08/20</p><h6>07.45 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase7' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					if ($pick_up=="penang" || $destination=="ipoh")
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>08/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase8' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					if ($pick_up=="penang" || $destination=="kualaLumpur")
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>11.55 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase9' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($date=="07/08/2020")
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Kelantan</p><h6>Bukit Bunga</h6></td>";
print "				<td><p>Seremban</p><h6>Seremban</h6></td>";
print "				<td><p>07/08/20</p><h6>07.15 a.m.</h6></td>";
print "				<td><p>RM42.00</p><input name='purchase6' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($date=="08/08/2020")
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>Penang</p><h6>Penang Komtar</h6></td>";
print "				<td><p>08/08/20</p><h6>07.45 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase7' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>08/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase8' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>11.55 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase9' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($destination==null && $pick_up==null && $date==null)
					{
					$nice=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Kelantan</p><h6>Bukit Bunga</h6></td>";
print "				<td><p>Seremban</p><h6>Seremban</h6></td>";
print "				<td><p>07/08/20</p><h6>07.15 a.m.</h6></td>";
print "				<td><p>RM42.00</p><input name='purchase6' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>Penang</p><h6>Penang Komtar</h6></td>";
print "				<td><p>08/08/20</p><h6>07.45 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase7' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>08/08/20</p><h6>07.00 a.m.</h6></td>";
print "				<td><p>RM25.00</p><input name='purchase8' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>NICE Malaysia Express Bus</td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>11.55 a.m.</h6></td>";
print "				<td><p>RM45.00</p><input name='purchase9' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
							
				}
				if ($bus=="transtar")
				{
					if ($pick_up=="ipoh" || $destination=="melaka")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>02.30 p.m.</h6></td>";
print "				<td><p>RM34.00</p><input name='purchase10' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					if ($pick_up=="ipoh" || $destination=="johor")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>09/08/20</p><h6>09.25 a.m.</h6></td>";
print "				<td><p>RM65.00</p><input name='purchase12' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($pick_up=="johor" || $destination=="penang")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>09.45 p.m.</h6></td>";
print "				<td><p>RM80.00</p><input name='purchase11' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($pick_up=="melaka" || $destination=="kedah")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>Kedah</p><h6>Kuala Kedah Bus Terminal</h6></td>";
print "				<td><p>09/08/20</p><h6>11.30 a.m.</h6></td>";
print "				<td><p>RM54.00</p><input name='purchase13' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($pick_up=="johor" || $destination=="kualaLumpur")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>09/08/20</p><h6>16.15 a.m.</h6></td>";
print "				<td><p>RM40.00</p><input name='purchase14' type='submit' value='Add to cart' class='btn'/></td>"; 
print "				</tr>";
					}
					else if ($date=="08/08/2020")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>02.30 p.m.</h6></td>";
print "				<td><p>RM34.00</p><input name='purchase10' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>09.45 p.m.</h6></td>";
print "				<td><p>RM80.00</p><input name='purchase11' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
					else if ($date=="09/08/2020")
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>09/08/20</p><h6>09.25 a.m.</h6></td>";
print "				<td><p>RM65.00</p><input name='purchase12' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";		
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>Kedah</p><h6>Kuala Kedah Bus Terminal</h6></td>";
print "				<td><p>09/08/20</p><h6>11.30 a.m.</h6></td>";
print "				<td><p>RM54.00</p><input name='purchase13' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";		
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>09/08/20</p><h6>16.15 a.m.</h6></td>";
print "				<td><p>RM40.00</p><input name='purchase14' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";		
					}
					else if ($destination==null && $pick_up==null && $date==null)
					{
					$transtar=true;
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>02.30 p.m.</h6></td>";
print "				<td><p>RM34.00</p><input name='purchase10' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>Penang</p><h6>Penang Sentral</h6></td>";
print "				<td><p>08/08/20</p><h6>09.45 p.m.</h6></td>";
print "				<td><p>RM80.00</p><input name='purchase11' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Ipoh</p><h6>Ipoh Amanjaya</h6></td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>09/08/20</p><h6>09.25 a.m.</h6></td>";
print "				<td><p>RM65.00</p><input name='purchase12' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Melaka</p><h6>Melaka Sentral</h6></td>";
print "				<td><p>Kedah</p><h6>Kuala Kedah Bus Terminal</h6></td>";
print "				<td><p>09/08/20</p><h6>11.30 a.m.</h6></td>";
print "				<td><p>RM54.00</p><input name='purchase13' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
print "				<tr style='font-weight: bold; font-size: 18px'>";
print "				<td>Transtar Travel Malaysia Express Bus</td>";
print "				<td><p>Johor</p><h6>Larkin Bus Terminal</h6></td>";
print "				<td><p>Kuala Lumpur</p><h6>KL Sentral</h6></td>";
print "				<td><p>09/08/20</p><h6>16.15 a.m.</h6></td>";
print "				<td><p>RM40.00</p><input name='purchase14' type='submit' value='Add to cart' class='btn'/></td>";
print "				</tr>";
					}
				}
				

print "		</table>";
					if ($rapid==false && $nice==false && $transtar==false && $aeroline==false)
					{
						echo"<center>No bus found</center>";
					}
print "		<form>";
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