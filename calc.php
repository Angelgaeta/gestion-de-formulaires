<?php 

echo <<<_END
  <html>
    <head>
      <title>Utilisation de valeurs par défaut dans des champs de formulaire</title>
    </head>
    <body>
      <form method="post" action="calc.php"><pre>
        Capital emprunté <input type="text" name="capital">
        Mensualité       <input type="text" name="mensualite">
        Nombre d'années  <input type="text" name="annees" value="15">
        Taux d'intérêt   <input type="text" name="taux" value="3">
                         <input type="submit">
      </pre></form>
    </body>
  </html>
_END;

?>
