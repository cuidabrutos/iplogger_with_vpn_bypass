	<?php
	// Cuidabrutos Anti VPN/Proxy En Texto Plano
	$url = "http://check.getipintel.net/check.php?ip=" . $remote . "&contact=" . rand() . "@gmail.com&flags=m";
	$rq = file_get_contents("$url");
	if ($rq = 1) {
		echo "Not_Proxy";
	}
	if ($rq = 0) {
		echo "Yes_Proxy";
	}
	?>