<?php
	include 'sql.php';
	$idnum = $_POST['idnum'];
	if(strlen($idnum)>0&&$SQL->signin($idnum)){
		echo "Success";
	}else echo "Fail";