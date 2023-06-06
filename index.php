<?php

 $text = $_POST['paragrafo'];    // Testo inserito da un utente

 $textcensured = $_POST['banner'];

 $textbanner = str_ireplace($banner, '***' , $text);





?>

<!DOCTYPE html>
<html>
  <head>
    <title>Form PHP</title>
  </head>
  <body>

  <h1> paragrafo:<?= $text?></h1>
  <h1><?= $textcensured?></h1>
  <h1><?=$textbannwe?></h1>


  </body>
</html>

