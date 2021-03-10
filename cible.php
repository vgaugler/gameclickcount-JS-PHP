<?php
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO click (pseudo, score) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['score']));

// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>

