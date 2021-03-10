<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Jeu du click</title>
</head>
<body>
    <section id="parent" class="wrapper">
        <p class="title">Battle de click !</p>
        <div class="box">
        
        <a class="link" id="child" href="#">Cliquez ici</a>
        
   
      <div class="score">
       <p><span id="child-count">0</span></p> 
        
    </div>
    
    

    <div class="scoreBox">
        <h2> Postez votre résultat ! </h2>
        <form method="post" action="cible.php">
        <input type='pseudo' id="pseudo" name="pseudo" placeholder="votre pseudo">
        <textarea type="hidden" id="resultat" name="score"> 0 </textarea>
        <button type="submit"> Envoyer </button>
    </form>
    <div class="boxResultat">
    <?php
        try
        {
            $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        catch (Exception $e)
        {
                die('Erreur : ' . $e->getMessage());
        }
        
        $reponse = $bdd->query('SELECT pseudo, score FROM click ORDER BY score DESC');
        
        
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
    
        
    
      <script type="text/javascript" src="main.js"></script>
</body>
</html>