<?php

	if (isset($_COOKIE['country'])) {
		$country = $_COOKIE['country'];
	}
	else{
		$country = "Country";
	}

	if (isset($_COOKIE['language'])) {
		$language = $_COOKIE['language'];
	}
	else{
		$language = "language";
	}
	if (isset($_COOKIE['currency'])) {
		$currency = $_COOKIE['currency'];
	}
	else{
		$currency = "Currency";
	}

	if(isset($_COOKIE['color'])) {
		$color = $_COOKIE['color'];
	}
	else
		$color = "#ffffff";

?>