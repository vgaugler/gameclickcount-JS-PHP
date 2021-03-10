<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Jeu du click</title>
</head>
<body>
    <section id="parent" class="wrapper">
        <div class="title">
        <p>Battle de click !</p>
        <img src="click.png" alt="">
            </div>
        <div class="box">
        
        <div class = "boxClick">
        <a class="link" id="linkclick" href="#">Cliquez ici</a>
        
   
        <div class="score">
       <p><span id="countclick">0</span></p> 
        
        </div>
    
</div>

    <div class="scoreBox">
        <h2> Postez votre résultat ! </h2>
        <form method="post" action="php/cible.php">
        <input type='pseudo' id="pseudo" name="pseudo" placeholder="votre pseudo">
        <textarea type="hidden" id="resultat" name="score"> 0 </textarea>
        <button type="submit"> Envoyer </button>
    </form>
    <div class="boxResultat">

    
    <?php
    // Connexion à la base de données via pdo
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
    //requete sql , selectionne la table voulu pour retourner les valeurs   
        $reponse = $bdd->query('SELECT pseudo, score FROM click ORDER BY score DESC');
        
    // renvoie les valeurs trouvé ligne par ligne   
        while ($donnees = $reponse->fetch())
        {
            echo '<div class="flex">'.'<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['score']);
        }
        
        $reponse->closeCursor(); // Termine le traitement de la requête
        ?>
        <div>
    </div>
    </div>
    </section>
    
        
    
      <script type="text/javascript" src="js/main.js"></script>
</body>
</html>