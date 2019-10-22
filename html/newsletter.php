<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Newsletter post</title>
  </head>
<body>
  <h1>Newsletter</h1>
  <form action="/newsletter.php" method="GET">
    <label for="email">Abonne toi</label>
    <input type="email" name="email" id="email" value="" placeholder="mon_mail@example.com" required>
    <button>Envoyer</button>
  </form>

  <form action="/newsletter.php" method="GET">
      <button name="files">Afficher les email</button>
  </form>

<?php

/// TEST DATE ///
// $date = getdate();

//  foreach ( $date as $unity => $time ) {
//      echo "$unity :  $time <br/>";
//   }

  if (isset($_REQUEST['email'])) {
    // echo ($_REQUEST['email']);
    file_put_contents(__DIR__.'/listeEmail.txt', ($_REQUEST['email'] . "\n"), FILE_APPEND);
  } elseif (isset($_REQUEST['files'])) {
    $liste_de_mail = file_get_contents(__DIR__.'/listeEmail.txt'); //return a string !!
    echo $liste_de_mail . "<br/>";
  }
?>

</body>
</html>