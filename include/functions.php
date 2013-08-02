<?php

function Mode_site() {

	if ($_GET['mode'] == install){
		echo 'page install<br />';
	}		


	if ($_GET['mode'] == admin){
		echo 'page Admin<br />';
	}

	if ($_GET['mode'] == tutos){
		echo 'page tutos<br />';
	}

	if ($_GET['mode'] == contact){
		echo 'page contact<br />';
	}

}
?>
