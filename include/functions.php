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
		Contact();
	}

}

function Install() {

	echo ' Page install 2';	

}

function Mode_Default() {

 	echo 'texte centre';
}

function Contact() {

	echo '

<center><h3>Nous contacter</h3></center><p>
<table align=center>
	<tr>
		<td>Nom</td><td><input type=text name=nom></td>
	</tr><tr>
		<td>Prénom</td><td><input type=text name=prenom></td>
	</tr><tr>
		<td>E-mail</td><td><input type=text name=email></td>
	</tr><tr>
		<td>Commentaires/remarque</td><td><textarea rows="4" cols="50">Tapez ici votre commentaire</textarea></td>
	</tr>
</table>

';
}
?>
