<?php
	session_start();
	if(isset($_POST['add'])){
		//open xml file
		$depenses = simplexml_load_file('files/depenses.xml');
		$depense = $depenses->addChild('depense');
		$depense->addChild('id', $_POST['id']);
		$depense->addChild('montant', $_POST['montant']);
		$depense->addChild('personne', $_POST['personne']);
		$depense->addChild('description', $_POST['description']);
		file_put_contents('files/depenses.xml', $depenses->asXML());
		$_SESSION['message'] = 'Une action de dépenses a été ajoutée';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Veuillez remplir la forme SVP!';
		header('location: index.php');
	}

?>