<?php

//insertion du header
include("include/header.php");
//insertion function
include("include/functions.php");
//Insertion du menu
include("include/menu.php");

//Partie texte du site

if (isset($_GET['mode'])){
	Mode_site();
}else {
	echo "partie centrale";
}

//Fin texte du site

//Insertion du footer
include("include/footer.php");

?>
