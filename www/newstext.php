<?php

session_start();

if(($_GET['page']) === '0') {
	echo '
		Dark Souls III - $59.99
	';
} else if(($_GET['page']) === '1') {
	echo '
		Dishonored II - $59.99
	';
} else if(($_GET['page']) === '2') {
	echo '
		Portal II - $19.99
	';
} else if(($_GET['page']) === '3') {
	echo '
		HTC Vive - $899.99
	';
}
?>