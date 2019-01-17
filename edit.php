<?php
	session_start();
	if(isset($_POST['edit'])){
		$users = simplexml_load_file('files/depenses.xml');
		foreach($users->depense as $user){
			if($user->id == $_POST['id']){
				$user->montant = $_POST['montant'];
				$user->personne = $_POST['personne'];
				$user->description = $_POST['description'];
				break;
			}
		}

		file_put_contents('files/depenses.xml', $users->asXML());
		$_SESSION['message'] = 'Member updated successfully';
		header('location: index.php');
	}
	else{
		$_SESSION['message'] = 'Select member to edit first';
		header('location: index.php');
	}

?>