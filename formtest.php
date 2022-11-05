<?php // formtest.php

echo <<<_END
  <html>
    <head>
      <title>Formulaire de test</title>
    </head>
    <body>
      <form method="post" action="formtest.php">
        Quel est votre nom?
        <input type="text" name="nom">
        <input type="submit">
      </form>
    </body>
  </html>
_END;

?>
