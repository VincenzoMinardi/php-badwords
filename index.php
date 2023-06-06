<?php

 $text = $_POST['paragrafo'];    // Testo inserito da un utente

 $textcensured  = $_POST['banner'];

 $textbanner = str_replace($textcensured, '***' , $text); // Parola da censurare

 $lentext = strlen($text);

 $lentextbanner = strlen($textbanner)





?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form PHP</title>
  </head>
  <body>

  <h1> paragrafo: <?=$text?></h1>
  <h1> Parola da censurare: <?=$textcensured?></h1>
  <h1>Lunghezza paragrafo:  <?=$lentext?></h1>
  <h1> Parola censurata: <?=$textbanner?></h1>
  <h1>Lunghezza paragrafo con censura: <?=$lentextbanner?></h1>
  


  </body>
</html>

