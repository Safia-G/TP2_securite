<?php

include 'functions.php';
include 'AfficherArticles.php';
$action = $_GET["action"];

if ($action == "DELETE") {
  $id = $_GET["id"];
} else {
  $id = $_GET["id"];
  $titre = $_GET["titre"];
  $description = $_GET["description"];
}

if ($action == "CREATE") {
  createUser($titre, $description);

  echo "nouvel article créé <br>";
  echo "<a href='index.php'>Liste des articles</a>";
}

if ($action == "UPDATE") {
  updateUser($id, $titre, $description);
  echo "article mis à jour <br>";
  echo "<a href='index.php'>Liste des articles</a>";
}

if ($action == "DELETE") {
  deleteUser($id);

  echo "article supprimé <br>";
  echo "<a href='index.php'>Liste des articles</a>";
}
 ?>
