<?php

function Mode_site() {

	if ($_GET['mode'] == install){
		Install();
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

function Install() {

	echo ' Page install 2';	

}

function Mode_Default() {

 	echo 'texte centre';
}
?>
