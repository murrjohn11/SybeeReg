<?php
	include 'sql.php';
	$idnum = $_POST['idnum'];
	if($SQL->validateID($idnum)){
		if(!$SQL->isSignedIn($idnum)){
			 $SQL->signin($idnum);
			 echo "Success";
		}else echo "Already Logged In";
	}else echo "Fail";