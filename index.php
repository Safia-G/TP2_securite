<?php
error_reporting(E_ALL);
ini_set("display_errors", true);
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    include 'functions.php';
    include 'AfficherArticles.php';
    $rows = getAllUsers();
    afficherTableau($rows, getHeaderTable());
     ?>
<a href="create.php?id=0">Creer un nouvel article</a>
  </body>
</html>
