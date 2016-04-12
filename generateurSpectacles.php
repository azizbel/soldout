<?php

//Parametres de connexion

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "soldOutDB";

try {
	//connexion
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Generation des erreurs
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //insertion de lignes
    for ($i = 0; $i<10; $i++)  {
    $sql = "INSERT INTO spectacle (nbPlacesDispo,nbPlacesPrises,prixPlace,dateHeure,dateMiseEnLigne,duree,id_boutique,id_vendeur) VALUES (13,150,20,'2016-04-13','2016-04-15',120,1,1 )";
   
    $conn->exec($sql);}
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;


?>