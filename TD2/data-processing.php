<?php
    include 'formulaire.html';
    if($_POST['Submit'] =='Send'){
        $message='Voici vos identifiants d\'inscription:'.PHP_EOL;
        $message.='Email:'.$_POST['mail'].PHP_EOL;
        $message.='Motdepasse:'.PHP_EOL.$_POST['Vérification'];
        mail($message,$message,$message);
        echo '<!DOCTYPE html> 
              <html lang="fr">
              <head>
              <title>Message envoyé</title>
              </head>
              <body>
              <header> Merci pour le soutien</header>
              <ul>
              <li><a href="index.html">Menu principal</a></li>
              </ul></body>' .PHP_EOL;
    }
    else{
        echo '<br/><strong> Bouton non géré!</strong>';
    }