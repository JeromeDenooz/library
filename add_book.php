<?php
//var_dump($_POST);
//exit();
header('Content-Type: application/json');
switch ($_SERVER['REQUEST_METHOD']) {
	case 'POST' :
		switch ($_SERVER['PATH_INFO']) {
			case '/livre' :
				try {
					$id = addABook($_POST['titre'], $_POST['auteur'], $_POST['edition']);
				} catch (PDOException $e) {
					echo $e->getMessage();
				}
				$response = ['id'=>$id];
				echo json_encode($response);
				break;
		}
		break;
	case 'GET' :
		switch ($_SERVER['PATH_INFO']) {
			case '/livre' :
				try {
					$response = getBooks();
				} catch (PDOException $e) {
					echo $e->getMessage();
				}
				echo json_encode($response);
				break;
		}
		break;
	case 'PUT' :
		switch ($_SERVER['PATH_INFO']) {
			case '/livre' :
				var_dump($_POST);
				exit;
				try {
					$response = getBooks();
				} catch (PDOException $e) {
					echo $e->getMessage();
				}
				echo json_encode($response);
				break;
		}
		break;
	case 'DELETE' :
		break;
};

function addABook($titre, $auteur, $edition) {
	$db = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	$queryInsert = $db->prepare("INSERT INTO livre(titre, auteur, edition) VALUES(:titre, :auteur, :edition);");
	$queryInsert->execute(array(
		'titre' => $titre,
		'auteur' => $auteur,
		'edition' => $edition)
	);
	return $db->lastInsertId();
};

function getBooks() {
	$db = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	try {
		$query = $db->query('SELECT * FROM livre');
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
	$bookList = array(array(
		'id' => "",
		'titre' => "",
		'auteur' => "",
		'edition' => ""
	));
	$i=0;
	while ($data = $query->fetch()) {
		$bookList[$i]['id'] = $data['id'];
		$bookList[$i]['titre'] = $data['titre'];
		$bookList[$i]['auteur'] = $data['auteur'];
		$bookList[$i]['edition'] = $data['edition'];
		$i++;
	}
	return $bookList;
};

function updateBook($id) {
};

/*
	try {
		$db = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		echo "<span class=\"text-center\">Connection à la base réussie</span>";
	} catch (PDOException $exception) {
		print_r("Erreur : ".$exception->getMessage()."<br/>");
	}

	$titre = 'Le tour du monde en 80 jours';
	$auteur = 'Victor Hugo';
	$edition = 'Petit Bateau';

	$queryInsert = $db->prepare("INSERT INTO livre(titre, auteur, edition) VALUES(:titre, :auteur, :edition);");
	try {
		$queryInsert->execute(array(
			'titre' => $titre,
			'auteur' => $auteur,
			'edition' => $edition)
		);
	} catch(PDOException $e) {
		echo $e->getMessage();
	}

	/*
	$query = $db->exec("INSERT INTO livre(titre) VALUES('JQuery pour les nuls')");
	$query = $db->exec("INSERT INTO livre(titre) VALUES('Javascript pour les nuls')");
	$query = $db->exec("INSERT INTO livre(titre) VALUES('Slim pour les nuls')");
	$query = $db->exec("INSERT INTO livre(titre) VALUES('HTML pour les nuls')");

	$query = $db->exec("UPDATE livre SET auteur='Sébastien Denooz' WHERE id=2");
	*/

	//$query = $db->exec("DELETE FROM livre WHERE id=6");
 ?>