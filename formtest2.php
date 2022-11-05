<?php // formtest2.php

// Version modifiée du formtest.php avec gestion des données. 


  // on vérifie la présence, dans le tableau associatif $_POST, du champ nom qui a été envoyé et l'affiche à l'utilisateur.
  // la fonction PHP isset permet de vérifier si $POST['nom'] contient une valeur. Si rien n'est publié, alors le programme affecte (Inconnu) à la variable $nom;
  // sinon, il affecte la valeur entrée à la variable. 

  if (!empty($_POST['nom'])) $nom = $_POST['nom'];
  else $nom = "(Inconnu)";

  echo <<<_END
  <html>
    <head>
      <title>Formulaire de test</title>
    </head>
    <body>
      Votre nom est : $nom<br>
      <form method="post" action="formtest2.php">
        Quel est votre nom?
        <input type="text" name="nom">
        <input type="submit">
      </form>
    </body>
  </html>
_END;

?>
