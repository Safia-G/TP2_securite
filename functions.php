<?php

	function getDatabaseConnexion() {
		try {
		    $user = "root";
			$pass = "0000";
			$pdo = new PDO('mysql:host=localhost;dbname=articles', $user, $pass);
			 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;

		} catch (PDOException $e) {
		    print "Erreur !: " . $e->getMessage() . "<br/>";
		    die();
		}
	}


	// récupere tous les users
	function getAllUsers() {
		$con = getDatabaseConnexion();
		$requete = 'SELECT * from ListeArticles';
		$rows = $con->query($requete);
		return $rows;
	}

	// creer un user
	function createUser($titre, $description) {
		try {
			$con = getDatabaseConnexion();
			$sql = "INSERT INTO ListeArticles (titre, description)
					VALUES ('$titre', '$description')";
	    	$con->exec($sql);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	//recupere un user
	function readUser($id) {
		$con = getDatabaseConnexion();
		$requete = "SELECT * from ListeArticles where id = '$id' ";
		$stmt = $con->query($requete);
		$row = $stmt->fetchAll();
		if (!empty($row)) {
			return $row[0];
		}

	}

	//met à jour le user
	function updateUser($id, $titre, $description) {
		try {
			$con = getDatabaseConnexion();
			$requete = "UPDATE ListeArticles set
						titre = '$titre',
						description = '$description'
						where id = '$id' ";
			$stmt = $con->query($requete);

		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	// suprime un user
	function deleteUser($id) {
		try {
			$con = getDatabaseConnexion();
			$requete = "DELETE from ListeArticles where id = '$id' ";
			$stmt = $con->query($requete);
		}
	    catch(PDOException $e) {
	    	echo $sql . "<br>" . $e->getMessage();
	    }
	}

	function getNewUser() {
		$user['id'] = "";
		$user['titre'] = "";
		$user['description'] = "";
	}
?>
