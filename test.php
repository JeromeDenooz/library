<?php

try {

	//Tentative de connexion à la base de données
    $dbh = new PDO('mysql:host=localhost;dbname=bibliotheque', 'root', '');
    //echo '<h4 class="text-center">Connexion réussie</h4>';

    /*
    foreach($dbh->query('SELECT * from jeux_video') as $row) {
        print_r($row);
    }
    */

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$response = $dbh->query('select * from jeux_video');
$nameList = "<ul>";

while ($data = $response->fetch()) {
	$nameList = $nameList."<li>".$data['nom']."</li>";
}

$response->closeCursor(); // Termine le traitement de la requête
//echo $nameList."</ul>";

//Fermeture de la session
$dbh = null;
?>