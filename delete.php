<?php
	session_start();
	$id = $_GET['id'];

	$depenses = simplexml_load_file('files/depenses.xml');

	$index = 0;
	$i = 0;

	foreach($depenses->depense as $depense){
		if($depense->id == $id){
			$index = $i;
			break;
		}
		$i++;
	}

	unset($depenses->depense[$index]);
	file_put_contents('files/depenses.xml', $depenses->asXML());

	$_SESSION['message'] = 'Une dépense a été supprimée';
	header('location: index.php');

?>